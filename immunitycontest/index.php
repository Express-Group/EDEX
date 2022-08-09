<?php
$response = 1;
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST' && count($_POST)==5){
	$emailAddress = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
	$question = filter_var(trim($_POST['question']), FILTER_SANITIZE_STRING);
	if($emailAddress!='' && $name!='' && $phone!='' && $question!=''){
		$connection = new mysqli('localhost' , 'root' , 'SamDb@121!' , 'custom_forms');
		if ($connection->connect_errno){
			echo "Failed to connect to MySQL: " . $connection->connect_error;
			exit();
		}
		$connection->query("INSERT INTO form1 (email, name, phone, question) VALUES ('".$emailAddress."', '".$name."', '".$phone."', '".$question."')");
		$Id = $connection->insert_id;
		if($Id!='' && $Id!=null && $Id!=0){
			$response = 2;
		}
	}else{
		$response = 0;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home Remedy for Immunity Contest - EDEXLIVE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
		@import url('https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap');
		body{background-color: rgb(239, 243, 238);font-family: 'Zilla Slab', serif;}
		.container{max-width: 50%;}
		.banner{border: 1px solid #dadce0;border-radius: 8px;}
		.main-content{background-color: #fff;border: 1px solid #dadce0;border-radius: 8px;margin-bottom: 12px;padding: 24px;  padding-top: 22px;position: relative;}
		.b-main{background-color: rgb(175, 194, 171);color: rgba(0, 0, 0, 1);border-top-left-radius: 8px;    border-top-right-radius: 8px;height: 10px;left: -1px;position: absolute;top: -1px;width: calc(100% + 2px);}
		.main-content p{color: #202124;font-size: 1.1rem;}
		sup{color:red;}
		.btn-primary{background-color: rgb(91, 128, 82) !important;border-color: rgb(91, 128, 82) !important;}
		form{width:100%;}
		@media only screen and (max-width: 768px){
			.container{max-width: 100%;}	
		}
		</style>
		<!-- Begin comScore Tag -->
		<script>
		  var _comscore = _comscore || [];
		  _comscore.push({ c1: "2", c2: "16833363" });
		  (function() {
			var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
			s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
			el.parentNode.insertBefore(s, el);
		  })();
		</script>
		<noscript>
		  <img src="https://sb.scorecardresearch.com/p?c1=2&c2=16833363&cv=2.0&cj=1" />
		</noscript>
		<!-- End comScore Tag -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-92816116-1', 'auto'); 
		  ga('send', 'pageview');
		setTimeout("ga('send','event','adjusted bounce rate','page visit 30 seconds or more')",30000);
		</script>
	</head>
	<body>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mt-3">
						<img src="banner1.jpg" class="img-fluid banner">
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mt-3">
						<div class="main-content">
							<div class="b-main"></div>
							<h2 class="font-weight-bold">Home Remedy for Immunity Contest</h2>
							<p>Do you have your grandmother's old kashayam recipe that works wonders?</p>
							<p>Have you developed a quick fix using kitchen essentials that has kept you going during COVID?</p>
							<p>If you have, then all you have to do is tell us your secret to great immunity and walk away with exciting prizes.</p>
							<p>Nattura BioCare <a href="https://www.natturabio.in/" target="_BLANK" style="color:blue;">(www.natturabio.in)</a> is offering Immune Health Kit worth Rs.1500 — for <b>TOP 10</b> selected home remedies!</p>
							<p>What are you waiting for?</p>
						</div>
					</div>
					<?php if($response==0): ?>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
						<div class="alert alert-danger alert-dismissible fade show">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Danger!</strong> Please enter all required fields.
						</div>
					</div>
					<?php endif; ?>
					<?php if($response==2): ?>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
						<div class="alert alert-success alert-dismissible fade show">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Success!</strong> From updated Successfully.
						</div>
					</div>
					<?php endif; ?>
					<form method="post" action="" id="userform">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
						<div class="main-content">
							<div class="form-group">
								<label>Email <sup>*</sup></label>
								<input type="email" name="email" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
						<div class="main-content">
							<div class="form-group">
								<label>Name <sup>*</sup></label>
								<input type="text" name="name" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
						<div class="main-content">
							<div class="form-group">
								<label>Phone number <sup>*</sup></label>
								<input type="text" name="phone" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
						<div class="main-content">
							<div class="form-group">
								<label>Your home remedy for immunity <sup>*</sup></label>
								<input type="text" name="question" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-primary" value="submit">
						</div>
					</div>
					</form>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
						<p class="text-center" style="color: rgba(0,0,0,0.66);">Copyright - edexlive.com <?php echo date('Y'); ?></p>
					</div>
				</div>
			</div>
		</section>
		<script>
		var response = "<?php echo $response; ?>";
		$(document).ready(function(e){
			if(response=="2"){
				setTimeout(function(){ window.location.href="https://www.natturabio.in/pages/b2stu"; }, 1000);
			}
		});
		</script>
	</body>
</html>
