 <div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
			<div class="az-content-breadcrumb">
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard'); ?>">Home</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard/users'); ?>">Users</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard/users/profile?id='.$this->input->get('id')); ?>">Profile</a></span>
			</div>
			<div class="az-dashboard-one-title">
				<div>
					<h2 class="az-dashboard-title">EDIT PROFILE</h2>
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
					 <!--<button onclick="document.getElementById('create_debate').submit();" class="btn btn-purple">Update</button>-->
				</div>
			</div>
			<div class="row row-sm mg-b-20">
				<div class="col-lg-6 offset-lg-3 ht-lg-100p">
					<div class="card">
						<div class="card-body">
							<div class="card-body-top">
								<form method="post" action="" id="create_debate" enctype="multipart/form-data">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-xl-12">
											<div class="form-group">
												<label>FIRST NAME <sup>*</sup></label>
												<input name="firstname" type="text" class="form-control" value="<?php echo set_value('firstname'); ?><?php if(set_value('firstname')==''){ echo $details['firstname']; } ?>">
												<?php echo form_error('firstname' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>LAST NAME <sup>*</sup></label>
												<input name="lastname" type="text" class="form-control" value="<?php echo set_value('lastname'); ?><?php if(set_value('lastname')==''){ echo $details['lastname']; } ?>">
												<?php echo form_error('lastname' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>USER NAME <sup>*</sup></label>
												<input name="username" type="text" class="form-control" value="<?php echo set_value('username'); ?><?php if(set_value('username')==''){ echo $details['username']; } ?>">
												<?php echo form_error('username' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>PASSWORD <sup>*</sup></label>
												<input name="password" type="password" class="form-control" value="<?php echo set_value('password'); ?>">
												<?php echo form_error('password' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>RE-ENTER PASSWORD <sup>*</sup></label>
												<input name="repassword" type="password" class="form-control" value="<?php echo set_value('repassword'); ?>">
												<?php echo form_error('repassword' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>