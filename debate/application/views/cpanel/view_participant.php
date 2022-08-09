  <div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
			<div class="az-content-breadcrumb">
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard'); ?>">Home</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard/participant'); ?>">View Participant</a></span>
			</div>
			<div class="az-dashboard-one-title">
				<div>
					<h2 class="az-dashboard-title">VIEW PARTICIPANT</h2>
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
				<div class="col-lg-6 ht-lg-100p">
					<div class="card">
						<div class="card-body">
							<div class="card-body-top">
								<table class="table">
									<thead>
										<tr>
											<th colspan="2" class="text-center"><h5>PARTICIPANT DETAILS</h5></th>
										</tr>
									</thead>
									<tbody>
										<?php
										$dob = new DateTime($participant['dob']);
										$currentDate   = new DateTime('today');
										$age =  $dob->diff($currentDate)->y;
										?>
										<tr><th><strong>NAME </strong></th><th><?php echo $participant['name']; ?></th></tr>
										<tr><th><strong>AGE </strong></th><th><?php echo $age; ?></th></tr>
										<tr><th><strong>DATE OF BIRTH </strong></th><th><?php echo date('jS M Y' ,strtotime($participant['dob'])); ?></th></tr>
										<tr><th><strong>GENDER </strong></th><th><?php echo ($participant['gender']==1)? 'Male' : 'Female'; ?></th></tr>
										<tr><th><strong>SCHOOL </strong></th><th><?php echo $participant['school_name']; ?></th></tr>
										<tr><th><strong>CLASS </strong></th><th><?php echo $participant['class']; ?></th></tr>
										<tr><th><strong>ABOUT ME </strong></th><th><?php echo $participant['about_me']; ?></th></tr>
										<tr><th><strong>MOBILE NUMBER </strong></th><th><?php echo $participant['phone_number']; ?></th></tr>
										<tr><th><strong>EMAIL ADDRESS </strong></th><th><?php echo $participant['email']; ?></th></tr>
										<tr><th><strong>PROFILE PICTURE </strong></th><th><?php if($participant['user_image']!=''): ?><img src="<?php echo ASSETURL.'img/participants/'.$participant['user_image']; ?>" width="100px;"><?php else: ?>--<?php endif; ?></th></tr>
										<tr><th><strong>SCHOOL ID PICTURE </strong></th><th><?php if($participant['id_image']!=''): ?><img src="<?php echo ASSETURL.'img/id/'.$participant['id_image']; ?>" width="100px;"><?php else: ?>--<?php endif; ?></th></tr>
										<tr><th><strong>STATUS </strong></th><th>
										<?php
										if($participant['status']==1){
											echo '<span class="badge badge-success">APPROVED</span>';
										}
										if($participant['status']==2){
											echo '<span class="badge badge-danger">REJECTED</span>';
										}
										if($participant['status']==0){
											echo '<span class="badge badge-info">PENDING</span>';
										}
										?>
										</th></tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 ht-lg-100p">
					<div class="card">
						<div class="card-body">
							<div class="card-body-top">
								<table class="table">
									<thead>
										<tr>
											<th colspan="2" class="text-center"><h5>DEBATE DETAILS</h5></th>
										</tr>
									</thead>
									<tbody>
										<?php if($participant['debate_id']!=null): ?>
										<tr><th><strong>TOPIC </strong></th><th><?php echo $participant['topic']; ?></th></tr>
										<tr><th><strong>DESCRIPTION </strong></th><th><?php echo $participant['description']; ?></th></tr>
										<tr><th><strong>CATEGORY </strong></th><th><?php echo $participant['category']; ?></th></tr>
										<tr><th><strong>SCEDULE DATE & TIME </strong></th><th><?php echo date('jS M Y' ,strtotime($participant['schedule_date'])); ?></th></tr>
										<tr><th><strong>PRESENTER </strong></th><th><?php echo $participant['presenter']; ?></th></tr>
										<tr><th><strong>DEBATE IMAGE </strong></th><th><img src="<?php echo ASSETURL.'img/debate/'.$participant['debate_image']; ?>" width="100px;"></th></tr>
										<?php endif; ?>
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