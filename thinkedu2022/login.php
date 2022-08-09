<?php
session_start();
$error = "";
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
	if(count($_POST)==2){
		$emailAddress = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
		if(!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)){
			$error = "Please enter valid email address";
		}else{
			$connection = new mysqli("localhost" , "root" , "SamDb@121!" , "thinkedu2022");
			if($connection->connect_errno){
				echo "Failed to connect to MySQL: ".$connection->connect_error;
				exit;
			}
			$query = $connection->query("SELECT id, name , email , mobile FROM users WHERE email='".$emailAddress."' LIMIT 1");
			if($query->num_rows==1){
				$result = $query->fetch_row();
				$_SESSION["uid"] = $result[0];
				$_SESSION["name"] = $result[1];
				$_SESSION["email"] = $result[2];
				$_SESSION["mobile"] = $result[3];
				$dateTime = date('Y-m-d H:i:s');
				$connection->query("UPDATE users SET login_status=1 , login_time='".$dateTime."' WHERE id='".$result[0]."'");
				header('Location: watch.php');
			}else{
				$error = "Please enter valid email address";
			}
			$connection->close();
		}
	}else{
		$error = "Something went wrong.Please try again";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ThinkEdu Conclave 2022</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
			body{background: #3366cc url(images/thinkedu-2017-bg.jpg) repeat 50% 0;position:relative;}
			section,footer{width:100%;float:left;}
			.login-wrapper{width:100%;float:left;background:#fbfbfb;padding:5%;box-shadow: 6px -1px 30px 20px rgb(0 0 0 / 32%);border-radius:5px;}
			.header{background: url(images/header-bg.png) repeat-x 0 0;font-family: 'Roboto Condensed', sans-serif;}
			.header .nav-link{text-transform: uppercase;padding: 0.5rem 0.5rem;color: #585656;font-weight:700;}
			.header .nav-link:hover{color: #0a4ca0;}
			.head1{color: #444;font-weight: 400;font-size: 1.3rem;}
			.head2{color: #0b4ca0;font-weight: 700;font-size: 3rem;text-transform: uppercase;text-shadow: 1px 3px 3px #0b4ca042;}
			.head3{color: #0b4ca0;font-weight: 700;font-size: 2rem;text-transform: uppercase;text-shadow: 1px 3px 3px #0b4ca042;}
			.form-control{border: 2px solid #225ca9;height: calc(2.5em + 0.75rem + 2px);background: #fff;}
			.form-group .btn-primary{border-color: #225ca9;background-color: #225ca9;height: calc(2.5em + 0.75rem + 2px);width:100%;}
			footer{background:url(images/footer-black-band.png) repeat-x 0 0;position:fixed;left:0;bottom:0;padding: 1% 0;background-color:#110f0f;}
			footer ul{list-style:none;margin:0;}
			footer ul li{float: left;margin-right: 11px;border-right:1px solid #6b6b6b;padding-right: 11px;}
			footer ul li a{color:#ffffffb0;}
			footer p{color: #ffffffb0;margin: 0;font-size: .8rem;}
			@media only screen and (max-width: 768px){
				.header img{width: 82%;}
				.header ul{padding-bottom: 2rem;text-align: center !important; float:left !important;margin-top: 1.6rem !important;}
				.header .nav-link{padding: 0.3rem 0.3rem;font-size:.90rem;}
				.header .col-xl-10{padding:0;}
				.main{margin-top: 10%;}
				.head1{font-size: 1rem;}
				.head2 ,.head3{font-size: 1.7rem;}
			}
		</style>
	</head>
	<body>
		<section class="header">
			<div class="container">
				<div class="row">
					<div class="col-xl-2 col-xl-2 col-md-2 col-sm-2 col-3">
						<img src="images/thinkedu-2017-logo.png" alt="thinkedu_logo" class="img-fluid">
					</div>
					<div class="col-xl-10 col-xl-10 col-md-10 col-sm-10 col-9">
						<ul class="nav float-right mt-3">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about-thinkedu-conclave.php">about thinkedu</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://www.eventxpress.com/" target="_BLANK">Event Xpress</a>
							</li>
						</ul>	
					</div>
				</div>
			</div>
		</section>
		<section class="main">
			<div class="container">
				<div class="row">
					<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-md-2 col-12">
						<div class="login-wrapper">
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
									<h3 class="head1">An Assertive India</h3>
									<h3 class="head2">Tenth Edition of TNIE's</h3>
									<h3 class="head3">ThinkEdu Conclave</h3>
									<h3 class="head1" style="color:#7c7d7e;">A Decade of Thought Leadership in Education</h3>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
									<?php if($error!=''): ?>
									<div class="alert alert-danger alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Warning!</strong> <?php echo $error; ?>
									</div>
									<?php endif; ?>
									<form method="post" action="" id="formlogin">
										<p>Please enter your email address to login</p>
										<div class="form-group mt-4">
											<input <?php if($error!=''){ echo 'style="border: 2px solid red;"'; } ?> name="email" required type="email" class="form-control" placeholder="Email Address" value="<?php if(isset($_POST['email']) && $_POST['email']!=''){ echo trim($_POST['email']);} ?><?php if(isset($_GET['q']) && $_GET['q']!=''){ echo trim($_GET['q']);} ?>">
										</div>
										<div class="form-group mt-4">
											<input name="submit" type="submit" class="btn btn-primary" value="submit">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about-thinkedu-conclave.php">about thinkedu</a></li>
							<li><a href="contact-us.php">Contact</a></li>                               
						</ul>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<p class="text-right d-none d-lg-block">Copyright &copy; <?php echo date('Y'); ?>, The New Indian Express. All rights reserved</p>
						<p class="text-center d-lg-none mt-2">&copy; <?php echo date('Y'); ?>, The New Indian Express. All rights reserved</p>
					</div>
				</div>
			</div>
		</footer>
		<script>
		$(document).ready(function(e){
			var emailField = $('input[name="email"]').val();
			if(emailField!=''){
				//alert(5);
				$('input[name="submit"]').trigger('click');
			}
		});
		</script>
	</body>
</html>
