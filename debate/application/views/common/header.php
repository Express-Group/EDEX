<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo ASSETURL; ?>bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo ASSETURL; ?>fontawesome/css/all.min.css">
	<script src="<?php echo ASSETURL; ?>bootstrap4/js/jquery.min.js"></script>
	<script src="<?php echo ASSETURL; ?>bootstrap4/js/popper.min.js"></script>
	<script src="<?php echo ASSETURL; ?>bootstrap4/js/bootstrap.min.js"></script>
	<style>
	<?php echo file_get_contents('/var/www/html/edex_app/debate/assets/css/custom.css'); ?>
	</style>
</head>
<body>
	<button class="scroll-up" id="scroll-up" onclick="topFunction()" title="Go to Top"><i class="fas fa-caret-up"></i></button>
	<!--header section-->
	<section class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-md-3 col-sm-3 col-xs-3 col-3 pt-5 pl-8">
					<div class="dropdown mobile-dropdown">
						<i class="fas fa-bars dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></i>
						<div class="dropdown-menu" style="">
							<a class="dropdown-item menu-register" href="<?php echo base_url('index?q=header');?>"><i class="fa fa-caret-right"></i> Home</a>
							<a class="dropdown-item" href="<?php echo base_url('senior');?>"><i class="fa fa-caret-right"></i> Senior Videos</a>
							<a class="dropdown-item" href="<?php echo base_url('junior');?>"><i class="fa fa-caret-right"></i> Junior Videos</a>
							<a class="dropdown-item" href="<?php echo base_url('index?q=sch');?>"><i class="fa fa-caret-right"></i> Schedule</a>
							<!--<a class="dropdown-item menu-register" href="<?php echo base_url('index?q=register');?>"><i class="fa fa-caret-right"></i> Register</a>
							<a class="dropdown-item menu-rules" href="<?php echo base_url('index?q=about');?>"><i class="fa fa-caret-right"></i> Rules &amp; Regulations</a>-->
							<a class="dropdown-item" href="<?php echo base_url('result/junior');?>"><i class="fa fa-caret-right"></i> Junior Result </a>
							<a class="dropdown-item" href="<?php echo base_url('result/senior');?>"><i class="fa fa-caret-right"></i> Senior Result </a>
							<a class="dropdown-item" href="<?php echo base_url('result/final');?>"><i class="fa fa-caret-right"></i> Final Result </a>
							<a class="dropdown-item menu-contact" href="<?php echo base_url('index?q=con');?>"><i class="fa fa-caret-right"></i> Contact Us</a>
							<a class="dropdown-item" href="<?php echo base_url('faq');?>"><i class="fa fa-caret-right"></i> FAQ</a>
						</div>
					</div>
				</div>
				<div class="col-xl-9 col-md-9 col-sm-9 col-xs-9 col-9 pt-4 text-right">
					<img src="<?php echo ASSETURL; ?>img/logo/edex-works-logo.png" class="img-fluid pr-5" alt="Edex_works">
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12 text-center pt-5">
					<img src="<?php echo ASSETURL; ?>img/logo/debate-logo-min.gif" class="img-fluid">
					<h3 class="text-center header-h3">India's Biggest Inter-School Virtual Debate Competition</h3>
				</div>
			</div>
			<div class="row d-none d-lg-block d-xl-block d-md-block">
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12 text-center">
					<div class="menus">
						<!--<a class="menu-register" href="">Register</a>
						<a class="menu-rules" href="">Rules &amp; Regulations</a>-->
						<a href="<?php echo base_url('senior');?>" style="margin-left: 3%;">Senior Videos</a>
						<a href="<?php echo base_url('junior');?>">Junior Videos</a>
						<!--<a href="<?php echo base_url('result/junior');?>">Junior Result</a>
						<a href="<?php echo base_url('result/senior');?>">Senior Result</a>-->
						<a href="<?php echo base_url('result/final');?>">Result Result</a>
						<a href="<?php echo base_url('faq');?>" style="margin-right: 0;">FAQ</a>
					</div>
				</div>
			</div>
		</div>
		<hr class="d-none d-lg-block d-xl-block d-md-block">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/bulb2-min.gif" class="animation-img bulb">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/question-mark-min.gif" class="animation-img question-mark">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/speaker-min.gif" class="animation-img speaker">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/cap-min.gif" class="animation-img cap">
		<img src="<?php echo ASSETURL; ?>img/characters/character1.gif" class="animation-img boy">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/podium-min.gif" class="animation-img podium">
	</section>
	<!--header section ends-->