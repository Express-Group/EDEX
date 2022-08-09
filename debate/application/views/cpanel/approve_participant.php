  <div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
			<div class="az-content-breadcrumb">
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard'); ?>">Home</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard/participant'); ?>">Approve/reject Participant</a></span>
			</div>
			<div class="az-dashboard-one-title">
				<div>
					<h2 class="az-dashboard-title">APPROVE / REJECT PARTICIPANT</h2>
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
					 <a href="<?php echo base_url('admin/participant'); ?>" class="btn btn-purple">Go Back</a>
				</div>
			</div>
			<div class="row row-sm mg-b-20">
				<div class="col-lg-8 offset-lg-2 ht-lg-100p">
					<div class="card">
						<div class="card-body">
							<div class="card-body-top">
								<form id="approve_part" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/participant/update');?>">
								<input type="hidden" id="id" value="<?php echo $participant['pid']; ?>">
								<table class="table">
									<thead>
										<tr>
											<th colspan="2" class="text-center"><h5>PARTICIPANT DETAILS</h5></th>
											<th class="text-center"><i style="cursor:pointer;font-size: 22px;" class="typcn typcn-pencil edit_p"></i></th>
										</tr>
									</thead>
									<tbody>
										<?php
										$dob = new DateTime($participant['dob']);
										$currentDate   = new DateTime('today');
										$age =  $dob->diff($currentDate)->y;
										?>
										<tr><th><strong>NAME </strong></th><th><?php echo $participant['name']; ?></tr>
										<tr><th><strong>AGE </strong></th><th><?php echo $age; ?></th></tr>
										<tr><th><strong>DATE OF BIRTH </strong></th><th><?php echo date('jS M Y' ,strtotime($participant['dob'])); ?></th></tr>
										<tr><th><strong>GENDER </strong></th><th><?php echo ($participant['gender']==1)? 'Male' : 'Female'; ?></th></tr>
										<tr><th><strong>SCHOOL </strong></th><th><?php echo $participant['school_name']; ?></th></tr>
										<tr><th><strong>CLASS </strong></th><th><?php echo $participant['class']; ?></th></tr>
										<tr><th><strong>ABOUT ME </strong></th><th><?php echo $participant['about_me']; ?></th></tr>
										<tr><th><strong>MOBILE NUMBER </strong></th><th><?php echo $participant['phone_number']; ?></th></tr>
										<tr><th><strong>EMAIL ADDRESS </strong></th><th><?php echo $participant['email']; ?></th></tr>
										<tr><th><strong>PROFILE PICTURE </strong></th><th><?php if($participant['user_image']!=''): ?><img src="<?php echo ASSETURL.'img/participants/'.$participant['user_image']; ?>" width="100px;"><?php else: ?>--<?php endif; ?><input type="file" name="profile_file" id="profile_file" accept="image/*" style="width:0;height:0;" type1="0" ><button onclick="document.getElementById('profile_file').click();" class="btn btn-purple float-right" type="button" id="profile_button"><i class="fa fa-image"></i> Upload</button></th></tr>
										<tr><th><strong>ID PICTURE </strong></th><th><?php if($participant['id_image']!=''): ?><img src="<?php echo ASSETURL.'img/id/'.$participant['id_image']; ?>" width="100px;"><?php else: ?>--<?php endif; ?><input type="file" name="id_file" id="id_file" accept="image/*" style="width:0;height:0;" type1="1"><button onclick="document.getElementById('id_file').click();" class="btn btn-purple float-right" type="button" id="id_button"><i class="fa fa-image"></i> Upload</button></th></tr>
										<tr><th><strong>TOPIC </strong></th>
										<th>
											<div class="form-group">
												<select class="form-control" name="topic" required>
													<option value="">Please select any one</option>
													<?php
													foreach($debates as $debate){
														echo '<option '.(($participant['debate_id']==$debate->debate_id)? ' selected ':'').' value="'.$debate->debate_id.'">'.$debate->topic.' ('.date('jS M Y h:i A' , strtotime($debate->schedule_date)).')</option>';
													}
													?>
												</select>
												<input type="hidden" name="pid" value="<?php echo $participant['pid'];?>">
											</div>
										</th></tr>
										<tr><th><strong>STATUS </strong></th>
										<th>
											<div class="form-group">
												<select class="form-control" name="status" required>
													<option value="">Please select any one</option>
													<option value="1" <?php if($participant['status']==1){ echo ' selected ';} ?>>Approve</option>
													<option value="2" <?php if($participant['status']==2){ echo ' selected ';} ?>>Reject</option>
												</select>
											</div>
										</th></tr>
										<tr>
										<th colspan="2" class="text-center">
											<div class="form-group">
												<button class="btn btn-purple" type="submit" name="submit">update</button>
											</div>
										</th>
										</tr>
									</tbody>
								</table>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>