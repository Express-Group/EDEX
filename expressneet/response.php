<!DOCTYPE html>
<html lan="en">
	<head>
		<title>Pinnacle Books</title>
		<base href="/">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/angular-material.min.css?version=1.1">
		<link rel="stylesheet" href="assets/app.css?version=1.5">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		<script src="assets/angular.min.js?version=1.1"></script>
		<script src="assets/angular-route.js"></script>
		<script src="assets/angular-sanitize.js?version=1.1"></script>
		<script src="assets/angular-animate.min.js?version=1.1"></script>
		<script src="assets/angular-aria.min.js?version=1.1"></script>
		<script src="assets/angular-material.min.js?version=1.1"></script> 
		<script src="assets/jquery.min.js?version=1.1"></script> 
		<script src="assets/app.js?version=1.3"></script> 
		<style>
			.status-success{
				float: left;
				width: 100%;
				color: #fff;
				text-align: center;
				font-size: 37px;
				text-transform:uppercase;
			}
			.status-success i{
				background: #ffffff;
				padding: 13px 17px 13px;
				border-radius: 50%;
			}
		</style>
	</head>
	<body ng-app="niefin" ng-controller="niefin_controller">
		<div class="header">
			<div class="pinnacle-header" ng-click="home()">
				<img src="images/Pinnacle-logo.png">
			</div>
			<div class="social-icons">
				<!--<img src="images/facebook.png">
				<img src="images/twitter.png">
				<img src="images/google-plus.png">-->
				<img src="images/enpl-logo.png">
			</div>
		</div>
		<?php
			if(@$_GET['status']=='success'){
				echo '<h2 style="font-size: 86px;color: green;margin-bottom: 0;" class="status-success"><i class="fa fa-check-circle"></i></h2>';
				echo '<h2 class="status-success">Your Order has been placed successfully</h2>';
				echo '<h2 style="text-align:center;"><md-button  ng-click="goback()" class="md-raised md-primary">Home</md-button></h2>';
			}
			
			if(@$_GET['status']=='failure'){
				echo '<h2 style="font-size: 86px;color: red;margin-bottom: 0;" class="status-success"><i class="fa fa-times-circle"></i></h2>';
				echo '<h2 class="status-success">Your Order was unsuccessfull</h2>';
				echo '<h2 style="text-align:center;"><md-button  ng-click="goback()" class="md-raised md-primary">Go Back</md-button></h2>';
			}
		?>
		<div class="footer">
		<img  src="http://images.dinamani.com/images/FrontEnd/images/group.jpg">
		<span class="footer-second"><a class="footer-menu" ng-href="/privacy-policy">Privacy policy</a> <a class="footer-menu" ng-href="/terms-of-use">Terms of use</a> <a class="footer-copyright">Copyright - pinnaclebooks.in 2018</a></span>
		</div>
	</body>
</html>  