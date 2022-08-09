 <div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
			<div class="az-content-breadcrumb">
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard'); ?>">Home</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard/debate'); ?>">Users</a></span>
			</div>
			<div class="az-dashboard-one-title">
				<div>
					<h2 class="az-dashboard-title">USERS</h2>
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
					 <a href="<?php echo base_url('admin/users/create'); ?>" class="btn btn-purple">New</a>
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
									<strong>Success!</strong> New User added successfully
								</div>
								<?php endif; ?>
								<?php if($this->session->flashdata('message')==2 && $this->session->flashdata('message')!=''): ?>
								<div class="alert alert-success alert-dismissible">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Success!</strong> User updated successfully
								</div>
								<?php endif; ?>
								<form method="get">
									<div class="row mg-b-40">
										<div class="col-lg-3">
											<div class="fomr-group">
												<input class="form-control" type="text" name="uid" value="<?php echo $this->input->get('uid'); ?>" placeholder="Enter Uid/username/first or last name">
											</div>
										</div>
										<div class="col-lg-3">
											<div class="fomr-group">
												<select class="form-control" name="status">
													<option value="">Please select any one</option>
													<option <?php if($this->input->get('status')==1) ?> value="1">Active</option>
													<option <?php if($this->input->get('status')==0) ?> value="0">Inactive</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="fomr-group">
												 <button class="btn btn-purple btn-icon float-left"><i class="fa fa-search"></i></button>
												 <a style="margin-left:3%;" href="<?php echo base_url('admin/debate'); ?>" class="btn btn-purple btn-icon float-left"><i class="fa fa-times"></i></a>
											</div>
										</div>
									</div>
								</form>
								<table class="table">
									<thead>
										<tr>
											<th>USER NAME</th>
											<th>FIRST & LAST NAME</th>
											<th>STATUS</th>
											<th>MODIFIED ON</th>
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
									<?php
									foreach($data as $list){
									echo '<tr>';
									echo '<td>'.$list->username.'</td>';
									echo '<td>'.$list->firstname.' '.$list->lastname.'</td>';
									if($list->status==1){
										echo '<td><span class="badge badge-success">Active</span></td>';
									}else{
										echo '<td><span class="badge badge-danger">Inactive</span></td>';	
									}
			
									echo '<td>'.$list->modified_on.'</td>';
									echo '<td><a href="'.base_url('admin/users/edit?id='.$list->uid).'" class="btn btn-purple btn-icon"><i class="typcn typcn-pencil"></i></a></td>';
									echo '<tr>';	
									}
									?>
									</tbody>
								</table>
								<?php echo $pager; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>