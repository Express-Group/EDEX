<?php $pending = pending_participant(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $title; ?></title>
		<link href="<?php echo ASSETURL; ?>lib/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="<?php echo ASSETURL; ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="<?php echo ASSETURL; ?>lib/typicons.font/typicons.css" rel="stylesheet">
		<link href="<?php echo ASSETURL; ?>lib/pickerjs/picker.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo ASSETURL; ?>css/azia.css?version=1">
	</head>
	<body>
		<!--header block-->
		<div class="az-header">
			<div class="container">
				<div class="az-header-left">
					<a href="<?php echo base_url('admin/dashboard'); ?>" class="az-logo"><span></span> EDEXWORKS</a>
					<a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
				</div>
				<div class="az-header-menu">
					<div class="az-header-menu-header">
						<a href="<?php echo base_url('admin/dashboard'); ?>" class="az-logo"><span></span> EDEXWORKS</a>
						<a href="" class="close">&times;</a>
					</div>
					<ul class="nav">
						<li class="nav-item active show">
							<a href="<?php echo base_url('admin/dashboard'); ?>" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/debate'); ?>" class="nav-link"><i class="typcn typcn-microphone-outline"></i> Debate</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/participant'); ?>" class="nav-link"><i class="typcn typcn-user-add-outline"></i> Participant</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/school'); ?>" class="nav-link"><i class="typcn typcn-th-list-outline"></i> School</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i> More</a>
							<nav class="az-menu-sub">
								<a href="<?php echo base_url('admin/sessions'); ?>" class="nav-link">Sessions</a>
								<a href="<?php echo base_url('admin/users'); ?>" class="nav-link">Admin Users</a>
							</nav>
						</li>
						
						<!--<li class="nav-item">
							<a href="<?php echo base_url('admin/settings'); ?>" class="nav-link"><i class="typcn typcn-cog-outline"></i> Settings</a>
						</li>-->
						<!--<li class="nav-item">
							<a href="<?php echo base_url('admin/help'); ?>" class="nav-link"><i class="typcn typcn-weather-sunny"></i> Help</a>
						</li>-->
					</ul>
				</div>
				<div class="az-header-right">
					<div class="dropdown az-header-notification">
						<a href="" class="new"><i class="typcn typcn-bell"></i></a>
						<div class="dropdown-menu">
							<div class="az-dropdown-header mg-b-20 d-sm-none">
								<a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
							</div>
							<h6 class="az-notification-title">Notifications</h6>
							<p class="az-notification-text">You have <?php echo count($pending); ?> unread notification</p>
							<div class="az-notification-list">
							<?php
							foreach($pending as $list){
								echo '<div class="media new">';
								echo '<div class="az-img-user">';
								if($list->user_image!=''){
									echo '<img src="'.ASSETURL.'img/participants/'.$list->user_image.'" alt="image1">';
								}else{
									echo '<img src="'.ASSETURL.'/img/author.png" alt="image1">';
								}
								echo '</div>'; 
								echo '<div class="media-body"><p>participant :  <strong>'.$list->name.'</strong></p>';
								echo '<span>'.date('M d Y h:i:sA' , strtotime($list->created_on)).'</span></div>';
								echo '</div>';
								
							}
							?>

							</div>
							<div class="dropdown-footer"><a href="<?php  echo base_url('admin/participant') ?>">View All Notifications</a></div>
						</div>
					</div>
							<div class="dropdown az-profile-menu">
								<a href="" class="az-img-user"><img src="<?php echo ASSETURL ?>img/author.png" alt=""></a>
								<div class="dropdown-menu">
									<div class="az-dropdown-header d-sm-none">
										<a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
									</div>
									<div class="az-header-profile">
										<div class="az-img-user">
											<img src="<?php echo ASSETURL ?>img/author.png" alt="">
										</div>
										<h6><?php echo ucfirst($this->session->userdata('firstname')); ?> <?php echo ucfirst($this->session->userdata('lastname')); ?></h6>
								  </div>
								<a href="<?php echo base_url('admin/users/profile?id='.$this->session->userdata('uid')); ?>" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
								<a href="<?php echo base_url('admin/logout'); ?>" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--header block ends-->