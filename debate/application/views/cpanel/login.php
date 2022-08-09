<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ENPL Debate">
    <meta name="author" content="ENPL">
    <title>Sign In | ENPL | TNIE</title>
    <link href="<?php echo ASSETURL; ?>lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo ASSETURL; ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo ASSETURL; ?>lib/typicons.font/typicons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETURL; ?>css/azia.css">
	<style>
	.az-card-signin{height: 450px;}
	</style>
  </head>
  <body class="az-body">
    <div class="az-signin-wrapper">
		<div class="az-card-signin">
			<h1 class="az-logo">EDEXWOR<span>K</span>S</h1>
				<div class="az-signin-header">
					<h2>Welcome back!</h2>
					<h4>Please sign in to continue</h4>
					<?php if($this->session->flashdata('message')==1 && $this->session->flashdata('message')!=''): ?>
					<div class="alert alert-danger alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Alert!</strong> Invalid Credentials
					</div>
					<?php endif; ?>
					<?php if($this->session->flashdata('message')==2 && $this->session->flashdata('message')!=''): ?>
					<div class="alert alert-danger alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Alert!</strong> Your Account is Inactive. Contact admin
					</div>
					<?php endif; ?>
					<form action="<?php echo base_url('admin/login'); ?>" method="post">
						<div class="form-group">
							<label>Username</label>
							<input name="username" type="text" class="form-control" placeholder="Enter your username" value="<?php echo set_value('username'); ?>" autofocus>
							<?php echo form_error('username' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="password" type="password" class="form-control" placeholder="Enter your password">
							<?php echo form_error('password' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
						</div>
						<button class="btn btn-az-primary btn-block">Sign In</button>
					</form>
				</div>
				<!--<div class="az-signin-footer">
					<p><a href="">Forgot password?</a></p>
					<p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>
				</div>-->
			</div>
		</div>
		<script src="<?php echo ASSETURL; ?>lib/jquery/jquery.min.js"></script>
		<script src="<?php echo ASSETURL; ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo ASSETURL; ?>lib/ionicons/ionicons.js"></script>
		<script src="<?php echo ASSETURL; ?>js/jquery.cookie.js" type="text/javascript"></script>
		<script src="<?php echo ASSETURL; ?>js/jquery.cookie.js" type="text/javascript"></script>
		<script src="<?php echo ASSETURL; ?>js/azia.js"></script>
	</body>
</html>
