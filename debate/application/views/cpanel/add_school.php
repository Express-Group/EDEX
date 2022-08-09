<?php
$sid = $this->input->get('sid');
$edit = false;
$button = 'Save';
if($sid!=''){
	$edit = true;
	$button = 'Update';
}
?>
<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
			<div class="az-content-breadcrumb">
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard'); ?>">Home</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard/school'); ?>">School</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo ($sid==true) ? base_url('admin/dashboard/school/edit?sid='.$sid) : base_url('admin/dashboard/school/add'); ?>"><?php if($edit){ echo 'Edit'; }else{ echo 'Add'; } ?></a></span>
			</div>
			<div class="az-dashboard-one-title">
				<div>
					<h2 class="az-dashboard-title"><?php if($edit){ echo 'EDIT'; }else{ echo 'ADD'; } ?> SCHOOl</h2>
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
					 <a href="<?php echo base_url('admin/school'); ?>" class="btn btn-purple">Go Back</a>
					 <button onclick="document.getElementById('create_debate').submit();" class="btn btn-purple"><?php echo $button; ?></button>
				</div>
			</div>
			<div class="row row-sm mg-b-20">
				<div class="col-lg-12 ht-lg-100p">
					<div class="card">
						<div class="card-body">
							<div class="card-body-top">
								<form method="post" action="" id="create_debate" enctype="multipart/form-data">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-xl-6">
											<div class="form-group">
												<label>SCHOOL NAME <sup>*</sup></label>
												<input name="schoolname" type="text" class="form-control" value="<?php echo set_value('schoolname'); ?><?php if($edit==true && set_value('schoolname')==''){ echo $data['name']; }?>">
												<?php echo form_error('schoolname' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>ADDRESS</label>
												<textarea class="form-control" name="address"><?php echo set_value('address'); ?><?php if($edit==true && set_value('address')==''){ echo $data['address']; }?></textarea>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>CONTACT DETAILS</label>
												<textarea class="form-control" name="contact"><?php echo set_value('contact'); ?><?php if($edit==true && set_value('contact')==''){ echo $data['contact_details']; }?></textarea>
											</div>
											<div class="form-group">
												<label>STATUS <sup>*</sup></label>
												<select name="status" class="form-control">
													<option value="">Please select any one</option>
													<option <?php if($edit==true && $data['status']==1){ echo ' selected ';} ?> value="1">Active</option>
													<option <?php if($edit==true && $data['status']==0){ echo ' selected ';} ?> value="0">Inactive</option>
												</select>
												<?php echo form_error('status' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
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