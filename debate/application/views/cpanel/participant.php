  <div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
			<div class="az-content-breadcrumb">
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard'); ?>">Home</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard/participant'); ?>">Participant</a></span>
			</div>
			<div class="az-dashboard-one-title">
				<div>
					<h2 class="az-dashboard-title">PARTICIPANT</h2>
				</div>
				<div class="az-content-header-right">
					<div class="media">
						<div class="media-body">
							<label>Last Login</label>
							<h6><?php echo date('M d, Y h:i:s A' , strtotime($this->session->userdata('last_login'))); ?></h6>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<label>Date</label>
							<h6><?php echo date('M d, Y'); ?></h6>
						</div>
					</div>
					 <a href="<?php echo base_url('admin/dashboard'); ?>" class="btn btn-purple">Go Back</a>
				</div>
			</div>
			<div class="row row-sm mg-b-20">
				<div class="col-lg-12 ht-lg-100p">
					<div class="card">
						<div class="card-body">
							<div class="card-body-top">
								<?php if($this->session->flashdata('message')==0 && $this->session->flashdata('message')!=''): ?>
								<div class="alert alert-danger alert-dismissible">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Alert!</strong> Something went wrong.please try again
								</div>
								<?php endif; ?>
								<?php if($this->session->flashdata('message')==1 && $this->session->flashdata('message')!=''): ?>
								<div class="alert alert-success alert-dismissible">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Success!</strong> Participant updated successfully
								</div>
								<?php endif; ?>
								<form method="get">
									<div class="row mg-b-40">
										<div class="col-lg-3">
											<div class="fomr-group">
												<select class="form-control" name="school">
													<option value="">Please select any one</option>
													<?php
													foreach($schoolList as $school){
														echo '<option '.(($school->sid==$this->input->get('school')) ? ' selected ': '').' value="'.$school->sid.'">'.$school->name.'</option>';
													}
													?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="fomr-group">
												<select class="form-control" name="debate">
													<option value="">Please select any one</option>
													<?php
													foreach($debates as $debate){
														echo '<option '.(($debate->debate_id==$this->input->get('debate')) ? ' selected ': '').' value="'.$debate->debate_id.'">'.$debate->topic.'</option>';
													}
													?>
												</select>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="fomr-group">
												<input type="text" name="name" class="form-control" value="<?php echo $this->input->get('name'); ?>" placeholder="Search Name">
											</div>
										</div>
										<div class="col-lg-2">
											<div class="fomr-group">
												<select class="form-control" name="status">
													<option value="">Please select any one</option>
													<option <?php if($this->input->get('status')=='1'){ echo 'selected ';} ?> value="1">Approved</option>
													<option <?php if($this->input->get('status')=='2'){ echo 'selected ';} ?> value="2">Rejected</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="fomr-group">
												 <button class="btn btn-purple btn-icon float-left"><i class="fa fa-search"></i></button>
												 <a style="margin-left:3%;" href="<?php echo base_url('admin/participant'); ?>" class="btn btn-purple btn-icon float-left"><i class="fa fa-times"></i></a>
											</div>
										</div>
									</div>
								</form>
								<table class="table">
									<thead>
										<tr>
											<th>NAME</th>
											<th>AGE</th>
											<th>GENDER</th>
											<th>SCHOOL</th>
											<th>CLASS</th>
											<th>PROFILE PICTURE</th>
											<th>TOPIC</th>
											<th>SCHEDULE DATE & TIME</th>
											<th>STATUS</th>
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
									<?php
									foreach($participants as $participant):
										$dob = new DateTime($participant->dob);
										$currentDate   = new DateTime('today');
										$age =  $dob->diff($currentDate)->y;
										echo '<tr>';
										echo '<td>'.$participant->name.'</td>';
										echo '<td>'.$age.'</td>';
										echo '<td>'.(($participant->gender==1) ? 'Male' : 'Female').'</td>';
										echo '<td>'.$participant->school_name.'</td>';
										echo '<td>'.$participant->class.'</td>';
										if($participant->user_image!=''){
											echo '<td><img style="width:50px;" src="'.ASSETURL.'img/participants/'.$participant->user_image.'"></td>';
										}else{
											echo '<td>--</td>';
										}
										
										echo '<td>'.(($participant->topic==null) ? '-' : $participant->topic).'</td>';
										echo '<td>'.(($participant->schedule_date==null) ? '-' : date('jS M Y h:i A',strtotime($participant->schedule_date))).'</td>';
										echo '<td>';
										if($participant->status==1){
											echo '<span class="badge badge-success">APPROVED</span>';
										}
										if($participant->status==2){
											echo '<span class="badge badge-danger">REJECTED</span>';
										}
										if($participant->status==0){
											echo '<span class="badge badge-info">PENDING</span>';
										}
										echo '</td>';
										echo '<td>';
										//if($participant->status==0){
											echo '<a href="'.base_url('admin/participant/edit?id='.$participant->pid).'" class="btn btn-purple btn-icon mb-2"><i class="typcn typcn-pencil"></i></a>';
										//}
										echo '<a href="'.base_url('admin/participant/view?id='.$participant->pid).'" class="btn btn-purple btn-icon"><i class="typcn typcn-eye"></i></a>';
										echo '</td>';
										echo '</tr>';
									endforeach;
									if(count($participants)==0){
										echo '<tr><td colspan="10" class="text-center">NO RECORDS FOUND</td></tr>';
									}
									?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>