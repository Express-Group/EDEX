<!DOCTYPE html>
<html lang="en">
	<head>
		<head>
			<title><?php echo $title; ?></title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			<!--slider css-->
			<link href="http://fonts.googleapis.com/css?family=Raleway%3A900%2C600%2C400%2C300" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
			<link href="http://fonts.googleapis.com/css?family=Nothing+You+Could+Do%3A400" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
			<link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
			<link rel="stylesheet" type="text/css" href="<?php echo ASSETURL; ?>css/main.css">
			<?php if($isHome==1): ?>
			<link rel="stylesheet" type="text/css" href="<?php echo ASSETURL; ?>revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
			<link rel="stylesheet" type="text/css" href="<?php echo ASSETURL; ?>revolution/fonts/font-awesome/css/font-awesome.css">
			<link rel="stylesheet" type="text/css" href="<?php echo ASSETURL; ?>revolution/css/settings.css">
			<link rel="stylesheet" type="text/css" href="<?php echo ASSETURL; ?>revolution/css/layers.css">
			<link rel="stylesheet" type="text/css" href="<?php echo ASSETURL; ?>revolution/css/navigation.css">
			<!--slider css ends-->
			<script type="text/javascript" src="<?php echo ASSETURL; ?>revolution/js/jquery.themepunch.tools.min.js"></script>
			<script type="text/javascript" src="<?php echo ASSETURL; ?>revolution/js/jquery.themepunch.revolution.min.js"></script>
			<script type="text/javascript" src="<?php echo ASSETURL; ?>revolution/js/extensions/revolution.extension.actions.min.js"></script>
			<script type="text/javascript" src="<?php echo ASSETURL; ?>revolution/js/extensions/revolution.extension.carousel.min.js"></script>
			<script type="text/javascript" src="<?php echo ASSETURL; ?>revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
			<script type="text/javascript" src="<?php echo ASSETURL; ?>revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
			<script type="text/javascript" src="<?php echo ASSETURL; ?>revolution/js/extensions/revolution.extension.migration.min.js"></script>
			<script type="text/javascript" src="<?php echo ASSETURL; ?>revolution/js/extensions/revolution.extension.navigation.min.js"></script>
			<script type="text/javascript" src="<?php echo ASSETURL; ?>revolution/js/extensions/revolution.extension.parallax.min.js"></script>
			<script type="text/javascript" src="<?php echo ASSETURL; ?>revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
			<script type="text/javascript" src="<?php echo ASSETURL; ?>revolution/js/extensions/revolution.extension.video.min.js"></script>
			<?php endif; ?>
		</head>
		<body>
		<section class="header">
			<div class="container-fluid">
				<div class="row">
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<a title="logo" href="<?php echo base_url(); ?>"><img src="<?php echo ASSETURL;?>img/logo/logo.png" class="img-fluid"></a>
				</div>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 float-right">
					<ul class="nav nav-tabs float-right">
						<li class="nav-item"><a class="nav-link active" href="<?php echo base_url('index'); ?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url('register-now'); ?>">Register Now</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url('rules-and-regulation'); ?>">Rules & Regulation</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url('debate'); ?>">Debate (sample)</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url('contact-us'); ?>">Contact Us</a></li>
					</ul>
				</div>
			</div>
			</div>
		</section>
		<section class="color-border">
			<div class="container-fluid">
				<div class="row">
					<div style="height:3px;background:#0f75bc;" class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4"></div>
					<div style="height:3px;background:#098b4d;" class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4"></div>
					<div style="height:3px;background:#fcb040;" class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4"></div>
				</div>
			</div>
		</section>