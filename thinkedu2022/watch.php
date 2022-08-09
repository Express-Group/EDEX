<?php
session_start();
if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
	header('Location: login.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Watch | ThinkEdu Conclave 2022</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
			body{background: #3366cc url(images/thinkedu-2017-bg.jpg) repeat 50% 0;position:relative;}
			section,footer{width:100%;float:left;}
			.login-wrapper{width:100%;float:left;background:#fbfbfb;padding:2%;box-shadow: 6px -1px 30px 20px rgb(0 0 0 / 32%);border-radius:5px;}
			.header{background: url(images/header-bg.png) repeat-x 0 0;font-family: 'Roboto Condensed', sans-serif;}
			.header .nav-link{text-transform: uppercase;padding: 0.5rem 0.5rem;color: #585656;font-weight:700;}
			.header .nav-link:hover{color: #0a4ca0;}
			.head1{color: #444;font-weight: 400;font-size: 1rem;}
			.head2{color: #0b4ca0;font-weight: 700;font-size: 3rem;text-transform: uppercase;text-shadow: 1px 3px 3px #0b4ca042;}
			.head3{color: #0b4ca0;font-weight: 700;font-size: 1.8rem;text-transform: uppercase;text-shadow: 1px 3px 3px #0b4ca042;margin: 0;}
			.form-control{border: 2px solid #225ca9;height: calc(2.5em + 0.75rem + 2px);background: #fff;}
			.form-group .btn-primary{border-color: #225ca9;background-color: #225ca9;height: calc(2.5em + 0.75rem + 2px);width:100%;}
			footer{background:url(images/footer-black-band.png) repeat-x 0 0;left:0;bottom:0;padding: 1% 0;background-color:#110f0f;margin-top:3%;}
			footer ul{list-style:none;margin:0;}
			footer ul li{float: left;margin-right: 11px;border-right:1px solid #6b6b6b;padding-right: 11px;}
			footer ul li a{color:#ffffffb0;}
			footer p{color: #ffffffb0;margin: 0;font-size: .8rem;}
			.author{width: 100%;margin: 0;margin-bottom: 0;text-align: right;margin-top: -8px;padding-right: 9px;   color: #ea262a;text-transform: uppercase;font-weight: 700;}
			/*.iframe-wrapper{float: none;clear: both;width: 100%;position: relative;padding-bottom: 56.25%;   padding-top: 25px;height: 0;}
			.iframe-wrapper iframe{border: 4px solid #fff;border-radius: 8px;position: absolute;top: 0;left: 0;width: 100%;height: 100%;} */
			.youtube-container{width: 50%;aspect-ratio: 16/9;width: 100%;overflow: hidden;}
			.youtube-container iframe{width: 300%;height: 100%;margin-left: -100%;pointer-events:none;}
			.watch-live{background: #ea262a;color: #fff;font-weight: 700;padding: 5px 14px 6px;font-size: .7rem;   border-radius: 28px;}
			.watch-live span{animation: blinker 1s linear infinite;}
			.live{margin-top: 0px;display: block;font-size: 1.3rem;font-weight: 700;color: #3f3d3d;}
			.ctls{background-color: #ea262a !important;border-color: #ea262a !important;padding: 4px 12px 5px; font-size: 12px;line-height: 1;margin-right: 1px;border-radius: 3.25rem;outline:none;}
			.ctls i{padding-top: 2px;float: left;margin-right: 6px;}
			@keyframes blinker{50%{opacity: 0;}}
			@media only screen and (max-width: 768px){
				.header img{width: 82%;}
				.header ul{padding-bottom: 2rem;text-align: center !important; float:left !important;margin-top: 0.6rem !important;}
				.header .nav-link{padding: 0.3rem 0.3rem;font-size:.90rem;}
				.header .col-xl-10{padding:0;}
				.main{margin-top: 17%;}
				.head1{font-size: 1rem;}
				.head2 ,.head3{font-size: 1.5rem;}
				.author{color: #ffcc03;}
				.text-sm-center1{text-align:center !important;margin-bottom:10px;}
				.text-sm-center{text-align:center !important;}
				footer{position:fixed;left:0;bottom:0;}
				.login-wrapper{padding: 2% 2% 6%;}
				.live{font-size: 1rem;margin-top: 5px;}
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
							<li class="nav-item">
								<a class="nav-link" href="logout.php">logout</a>
							</li>
						</ul>
						<p class="float-right author">Welcome <?php echo $_SESSION['name']; ?></p>
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
								<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12 text-sm-center1">
									<h3 class="head3">ThinkEdu Conclave</h3>
									<h3 class="head1" style="color:#7c7d7e;">A Decade of Thought Leadership in Education</h3>
								</div>
								<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 text-right text-sm-center1">
									<span class="watch-live"><span><i class="fa fa-circle" aria-hidden="true"></i> WATCH LIVE</span></span>
									<span class="live">CURRENT USERS : 00</span>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="youtube-container">
										<iframe class="yt_player_iframe" id="iframe" src="https://www.youtube.com/embed/TWxMtYCn1YI?autoplay=1&mute=0&loop=1&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="Video Player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
								</div>
								<div class="col-12">
									<h6 style="margin-top: 15px;color: #0b4ca0;font-weight: 700;">CONTROLS</h6>
									<button class="video-button ctls btn btn-primary" data-role="play"><i class="fa fa-play" aria-hidden="true"></i> play</button>
									<button class="mute-button ctls btn btn-primary" data-role="mute"><i style="padding-top:0;" class="fa fa-volume-off"></i> mute</button>
									<button class="stop-button ctls btn btn-primary"><i style="padding-top: 1px;" class="fa fa-stop" aria-hidden="true"></i> Stop</button>
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
	</body>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script>
	document.addEventListener('contextmenu', event => event.preventDefault());
	$(document).ready(function(e){
		$('.live').load("live.php?v=1");
		setInterval(function () { $('.live').load("live.php?v=1");}, 10000);
	});
	$('.video-button').on('click' , function(e){
		var role = $(this).data('role');
		(role=='play') ? $(this).data('role' , 'pause').html('<i class="fa fa-pause" aria-hidden="true"></i> pause') : $(this).data('role' , 'play').html('<i class="fa fa-play" aria-hidden="true"></i> play');
		$('.yt_player_iframe').each(function(){
			if(role=='play'){
				this.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
			}else{
				this.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
			}
		});
	});
	$('.mute-button').on('click' , function(e){
		var role = $(this).data('role');
		(role=='mute') ? $(this).data('role' , 'unmute').html('<i style="padding-top:0;" class="fa fa-volume-up aria-hidden="true"></i> unmute') : $(this).data('role' , 'mute').html('<i style="padding-top:0;" class="fa fa-volume-off" aria-hidden="true"></i> mute');
		$('.yt_player_iframe').each(function(){
			if(role=='mute'){
				this.contentWindow.postMessage('{"event":"command","func":"mute","args":""}', '*');
			}else{
				this.contentWindow.postMessage('{"event":"command","func":"unMute","args":""}', '*');
			}
		});
	});
	$('.stop-button').on('click' , function(e){
		$('.yt_player_iframe').each(function(){
			this.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
		});
		$('.video-button').data('role' , 'play').html('<i class="fa fa-play" aria-hidden="true"></i> play');
	});
	</script>
</html>
