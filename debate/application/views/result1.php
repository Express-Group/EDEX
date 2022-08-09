 <!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo ASSETURL; ?>bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="<?php echo ASSETURL; ?>bootstrap4/js/jquery.min.js"></script>
	<script src="<?php echo ASSETURL; ?>bootstrap4/js/popper.min.js"></script>
	<script src="<?php echo ASSETURL; ?>bootstrap4/js/bootstrap.min.js"></script>
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
	<?php echo file_get_contents('/var/www/html/edex_app/debate/assets/css/custom.css'); ?>
	body{background:url(https://www.edexlive.com/debate/assets/img/backgrounds/bg3.jpg);}
	@font-face{font-family: OPTIBodoniAntiqua;src: url(https://www.edexlive.com/debate/assets/fonts/OPTIBodoniAntiqua-Italic.otf);}
	.debate{float:left;width:100%;}
	.header img.pr-5{width: 246px;}
	.debate-gif{width: 168px;}
	.header .menus{margin-top: 1%;}
	.header hr{bottom: 14.5%;}
	.header{padding-bottom: 0%;box-shadow: 1px 2px 9px #0009;}
	.session{width:100%;float:left;}
	.session iframe{width: 100%;height: 500px;border: 15px solid #FFF;border-radius: 8px;box-shadow: 1px 3px 2px #0000004a;}
	.participant-box img{width: 150px;border: 6px solid #fcc02e;box-shadow: 0px 2px 2px #00000075;}
	.participant-box , .participant-box-text{float:left;width:100%;position:relative;}
	.participant-box-text{padding-top:5%;margin-bottom: 7%;}
	.participant-box-text p{font-weight: 500;color: #000;min-height: 75px;}
	.participant-box-text .btn{padding: .375rem 2.75rem;background-color: #fcc02e !important;border-color: #fcc02e !important;color: #000;font-weight: 700;box-shadow: 0px 2px 2px #00000075;}
	.participant-box span{position: absolute;bottom: -9px;width: 29%;font-size: 13px;left: 34%;background: #287dc0;    color: #fff;border: 3px solid #FFF;padding: 2px 6px 2px;border-radius: 12px;}
	.custom-nav{font-family: 'Bebas Neue', cursive;font-size: 28px;background: #264e82;display: flex;justify-content: center;float:left;width:100%;border-top-left-radius: 8px;border-top-right-radius: 8px;}
	.custom-nav a{color:#fff;}
	.custom-nav .nav-link{border-top-left-radius: 0;border-top-right-radius: 0;}
	.custom-nav1{width:100%;float:left;background:#fff;border-bottom-left-radius: 8px;border-bottom-right-radius: 8px;box-shadow: 0px 5px 5px #00000042;}
	.debate-list{float: left; width: 100%; background: #ffffff9e;padding: 2%;border-radius: 8px;box-shadow: 0px 1px 5px 1px #0000005c;position: relative;}
	.debate-list img{border: 1px solid #5552524a;border-radius: 8px;}
	.debate-list h5{font-weight: 700;text-align: center;}
	.debate-list h5 a{color: #555252;text-decoration:none;}
	.debate-list p{font-size: 13px;color: #908d8d;text-align: center;}
	.fg{border:none !important;width: 57px;position: absolute; top: -50px;left: 14px}
	.fg1{border:none !important;width: 57px;position: absolute; top: -50px;right: 14px;left:unset;}
	.result-box{float:left;width:100%;background:#fff;padding: 2%;border-radius: 8px;box-shadow: 2px 3px 4px 0px #0000007a}
	.result-box h1{font-family: 'Bebas Neue', cursive;color: #264e82;}
	.result-box .winner h2 , .result-box .runner h2{color: #fff;font-weight: 700;text-align: center;}
	.result-box .winner{background: green;border-radius:8px;color:#fff;padding-bottom: 1rem;}
	.result-box .runner{background: #eb9a07;border-radius:8px;color:#fff;padding-bottom: 1rem;}
	.result-box .award1{background: #07458c;}
	.result-box .award2{background: #078c5f;}
	.result-box .award3{background: #8c2a07;}
	[class^=firework-] {
  position: absolute;
  width: 0.1rem;
  height: 0.1rem;
  border-radius: 50%;
}

.firework-1 {
  -webkit-animation: firework-lg 1.2s both infinite;
          animation: firework-lg 1.2s both infinite;
  -webkit-animation-delay: 1.5s;
          animation-delay: 1.5s;
  top: 65%;
  left: 25%;
}

.firework-2 {
  -webkit-animation: firework-md 1.2s both infinite;
          animation: firework-md 1.2s both infinite;
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
  top: 35%;
  left: 70%;
}

.firework-3 {
  -webkit-animation: firework-sm 1.2s both infinite;
          animation: firework-sm 1.2s both infinite;
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
  top: 85%;
  left: 15%;
}

.firework-4 {
  -webkit-animation: firework-md 1.2s both infinite;
          animation: firework-md 1.2s both infinite;
  -webkit-animation-delay: 1.5s;
          animation-delay: 1.5s;
  top: 90%;
  left: 20%;
}

.firework-5 {
  -webkit-animation: firework-lg 1.2s both infinite;
          animation: firework-lg 1.2s both infinite;
  -webkit-animation-delay: 1.3s;
          animation-delay: 1.3s;
  top: 90%;
  left: 75%;
}

.firework-6 {
  -webkit-animation: firework-sm 1.2s both infinite;
          animation: firework-sm 1.2s both infinite;
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
  top: 75%;
  left: 80%;
}

.firework-7 {
  -webkit-animation: firework-lg 1.2s both infinite;
          animation: firework-lg 1.2s both infinite;
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
  top: 70%;
  left: 60%;
}

.firework-8 {
  -webkit-animation: firework-md 1.2s both infinite;
          animation: firework-md 1.2s both infinite;
  -webkit-animation-delay: 1.5s;
          animation-delay: 1.5s;
  top: 35%;
  left: 85%;
}

.firework-9 {
  -webkit-animation: firework-md 1.2s both infinite;
          animation: firework-md 1.2s both infinite;
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
  top: 90%;
  left: 35%;
}

.firework-10 {
  -webkit-animation: firework-sm 1.2s both infinite;
          animation: firework-sm 1.2s both infinite;
  -webkit-animation-delay: 1.2s;
          animation-delay: 1.2s;
  top: 35%;
  left: 15%;
}

.firework-11 {
  -webkit-animation: firework-sm 1.2s both infinite;
          animation: firework-sm 1.2s both infinite;
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
  top: 55%;
  left: 15%;
}

.firework-12 {
  -webkit-animation: firework-sm 1.2s both infinite;
          animation: firework-sm 1.2s both infinite;
  -webkit-animation-delay: 1.3s;
          animation-delay: 1.3s;
  top: 45%;
  left: 40%;
}

.firework-13 {
  -webkit-animation: firework-lg 1.2s both infinite;
          animation: firework-lg 1.2s both infinite;
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
  top: 50%;
  left: 55%;
}

.firework-14 {
  -webkit-animation: firework-md 1.2s both infinite;
          animation: firework-md 1.2s both infinite;
  -webkit-animation-delay: 1.4s;
          animation-delay: 1.4s;
  top: 60%;
  left: 50%;
}

.firework-15 {
  -webkit-animation: firework-sm 1.2s both infinite;
          animation: firework-sm 1.2s both infinite;
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
  top: 85%;
  left: 20%;
}

@-webkit-keyframes firework-sm {
  0%, 100% {
    opacity: 0;
  }
  10%, 70% {
    opacity: 1;
  }
  100% {
    box-shadow: -0.5rem 0rem 0 #fff, 0.5rem 0rem 0 #fff, 0rem -0.5rem 0 #fff, 0rem 0.5rem 0 #fff, 0.35rem -0.35rem 0 #fff, 0.35rem 0.35rem 0 #fff, -0.35rem -0.35rem 0 #fff, -0.35rem 0.35rem 0 #fff;
  }
}

@keyframes firework-sm {
  0%, 100% {
    opacity: 0;
  }
  10%, 70% {
    opacity: 1;
  }
  100% {
    box-shadow: -0.5rem 0rem 0 #fff, 0.5rem 0rem 0 #fff, 0rem -0.5rem 0 #fff, 0rem 0.5rem 0 #fff, 0.35rem -0.35rem 0 #fff, 0.35rem 0.35rem 0 #fff, -0.35rem -0.35rem 0 #fff, -0.35rem 0.35rem 0 #fff;
  }
}
@-webkit-keyframes firework-md {
  0%, 100% {
    opacity: 0;
  }
  10%, 70% {
    opacity: 1;
  }
  100% {
    box-shadow: -0.7rem 0rem 0 #fff, 0.7rem 0rem 0 #fff, 0rem -0.7rem 0 #fff, 0rem 0.7rem 0 #fff, 0.49rem -0.49rem 0 #fff, 0.49rem 0.49rem 0 #fff, -0.49rem -0.49rem 0 #fff, -0.49rem 0.49rem 0 #fff;
  }
}
@keyframes firework-md {
  0%, 100% {
    opacity: 0;
  }
  10%, 70% {
    opacity: 1;
  }
  100% {
    box-shadow: -0.7rem 0rem 0 #fff, 0.7rem 0rem 0 #fff, 0rem -0.7rem 0 #fff, 0rem 0.7rem 0 #fff, 0.49rem -0.49rem 0 #fff, 0.49rem 0.49rem 0 #fff, -0.49rem -0.49rem 0 #fff, -0.49rem 0.49rem 0 #fff;
  }
}
@-webkit-keyframes firework-lg {
  0%, 100% {
    opacity: 0;
  }
  10%, 70% {
    opacity: 1;
  }
  100% {
    box-shadow: -0.9rem 0rem 0 #fff, 0.9rem 0rem 0 #fff, 0rem -0.9rem 0 #fff, 0rem 0.9rem 0 #fff, 0.63rem -0.63rem 0 #fff, 0.63rem 0.63rem 0 #fff, -0.63rem -0.63rem 0 #fff, -0.63rem 0.63rem 0 #fff;
  }
}
@keyframes firework-lg {
  0%, 100% {
    opacity: 0;
  }
  10%, 70% {
    opacity: 1;
  }
  100% {
    box-shadow: -0.9rem 0rem 0 #fff, 0.9rem 0rem 0 #fff, 0rem -0.9rem 0 #fff, 0rem 0.9rem 0 #fff, 0.63rem -0.63rem 0 #fff, 0.63rem 0.63rem 0 #fff, -0.63rem -0.63rem 0 #fff, -0.63rem 0.63rem 0 #fff;
  }
}
	@media only screen and (max-width: 768px){
		.title{font-size: 2rem;}
		.session iframe{height: 272px;}
		.header{position: fixed;z-index: 9;background:url(https://www.edexlive.com/debate/assets/img/backgrounds/bg3.jpg);}
		.header .text-right{padding-top: 2% !important;}
		.debate{margin-top: 18%;}
		.mobile-dropdown i.dropdown-toggle{font-size: 2rem;}
		.debate-gif{width: 103px;}
		.mt-mob-5{margin-top: 1rem!important;}
		.debate-list p{font-size: 14px;}
		.result-box .col-md-4 div{margin-bottom:15px;}
		.mb-mob-5{margin-bottom:0 !important;}
		.result-box h1{font-size: 1.6rem;margin-top: 15px;}
	}
	</style>
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
	
	<button class="scroll-up" id="scroll-up" onclick="topFunction()" title="Go to Top"><i class="fas fa-caret-up"></i></button>
	<!--header section-->
	<section class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-md-3 col-sm-3 col-xs-3 col-2 pt-3 pl-8">
					<div class="dropdown mobile-dropdown">
						<i class="fa fa-bars dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></i>
						<div class="dropdown-menu" style="">
							<a class="dropdown-item menu-register" href="<?php echo base_url('index?q=header');?>"><i class="fa fa-caret-right"></i> Home</a>
							<!--<a class="dropdown-item menu-register" href="<?php echo base_url('index?q=register');?>"><i class="fa fa-caret-right"></i> Register</a>
							<a class="dropdown-item menu-rules" href="<?php echo base_url('index?q=about');?>"><i class="fa fa-caret-right"></i> Rules &amp; Regulations</a>-->
							<a class="dropdown-item" href="<?php echo base_url('senior');?>"><i class="fa fa-caret-right"></i> Senior Videos</a>
							<a class="dropdown-item" href="<?php echo base_url('junior');?>"><i class="fa fa-caret-right"></i> Junior Videos</a>
							<a class="dropdown-item" href="<?php echo base_url('index?q=sch');?>"><i class="fa fa-caret-right"></i> Schedule</a>
							<a class="dropdown-item menu-contact" href="<?php echo base_url('index?q=con');?>"><i class="fa fa-caret-right"></i> Contact Us</a>
							<a class="dropdown-item" href="<?php echo base_url('result/junior');?>"><i class="fa fa-caret-right"></i> Result </a>
							<a class="dropdown-item" href="<?php echo base_url('faq');?>"><i class="fa fa-caret-right"></i> FAQ</a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-md-6 col-sm-6 col-xs-6 col-5 text-center">
					<img src="<?php echo ASSETURL; ?>img/logo/debate-logo-min.gif" class="img-fluid debate-gif">
				</div>
				<div class="col-xl-3 col-md-3 col-sm-3 col-xs-3 col-5 pt-2 text-right">
					<img src="<?php echo ASSETURL; ?>img/logo/edex-works-logo.png" class="img-fluid pr-5" alt="Edex_works">
				</div>
			</div>
			<!--<div class="row d-none d-lg-block d-xl-block d-md-block">
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12 text-center">
					<div class="menus">
						<a class="menu-register" href="<?php echo base_url('index?q=register');?>">Register</a>
						<a class="menu-rules" href="<?php echo base_url('index?q=about');?>">Rules &amp; Regulations</a>
						<a class="menu-contact" href="<?php echo base_url('index?q=contact-us');?>">Contact Us</a>
						<a href="<?php echo base_url('faq');?>" style="margin-right: 0;">FAQ</a>
					</div>
				</div>
			</div>-->
		</div>
		<!--<hr class="d-none d-lg-block d-xl-block d-md-block">-->
	</section>
	<!--header section ends-->
	<section class="debate">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-12 mt-5 mt-mob-5">
					<h1 class="text-center title"><?php echo ucfirst($this->uri->segment(2)); ?> Debate Results</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-12 mt-5">
					<!-- JD 1-->
					<div class="result-box mb-5">
						<h1 class="text-center mb-4">Homework should be banned in every school in India | JD1</h1>
						<div class="row mb-5 mb-mob-5">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 offset-xl-2 offset-lg-2 offset-md-2 text-center">
								<div class="winner hgh">
									<h2 class="pt-3">WINNER</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/Advait.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Advait Anand</h2>
									<p>CLASS : VII</p>
									<p>Padma Seshadri Bala Bhavan Senior Secondary School, T Nagar, Chennai</p>
									<?php
									$template ='';
									for($i=1;$i<=15;$i++){
										$template .='<div class="firework-'.$i.'"></div>';
									}
									echo $template;
									?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner hgh">
									<h2 class="pt-3">RUNNER -UP</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-03-23_at_12.02.16.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Radha Unmesh Mulay</h2>
									<p>CLASS : VII</p>
									<p>CHIREC International School</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award1 hgh">
									<h2 class="pt-3">THE FINEST POINT</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG-20210308-WA0036.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">			
									<h2>Khushi Jain</h2>
									<p>CLASS : VII</p>
									<p>Sushila Birla Girls' School, Kolkata</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award2 hgh">
									<h2 class="pt-3">COUNTER STRIKE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/Advait.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Advait Anand</h2>
									<p>CLASS : VII</p>
									<p>Padma Seshadri Bala Bhavan Senior Secondary School, T Nagar, Chennai</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner award3 hgh">
									<h2 class="pt-3">LIGHTER SIDE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-03-23_at_12.02.16.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Radha Unmesh Mulay</h2>
									<p>CLASS : VII</p>
									<p>CHIREC International School</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- JD 1 ENDS-->
					
					<!-- JD 2-->
					<div class="result-box mb-5">
						<h1 class="text-center mb-4">Indian history should be a compulsory core subject from first grade | JD2</h1>
						<div class="row mb-5 mb-mob-5">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 offset-xl-2 offset-lg-2 offset-md-2 text-center">
								<div class="winner hgh">
									<h2 class="pt-3">WINNER</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-03-09_at_11.34.06_PM.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Tehniyat Nabi</h2>
									<p>CLASS : VI</p>
									<p>Stepping Stones High School, Aurangabad</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner hgh">
									<h2 class="pt-3">RUNNER_UP</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG-20210309-WA0013.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Abhinav Vinay Menon</h2>
									<p>CLASS : VI</p>
									<p>Chinmaya Vidyalaya, Vaduthala</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award1 hgh">
									<h2 class="pt-3">THE FINEST POINT</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-03-09_at_11.34.06_PM.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Tehniyat Nabi</h2>
									<p>CLASS : VI</p>
									<p>Stepping Stones High School, Aurangabad</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award2 hgh">
									<h2 class="pt-3">COUNTER STRIKE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG_20200428_095620_2.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Kshrugal B</h2>
									<p>CLASS : VII</p>
									<p>Birla High School</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner award3 hgh">
									<h2 class="pt-3">LIGHTER SIDE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG-20210309-WA0013.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Abhinav Vinay Menon</h2>
									<p>CLASS : VI</p>
									<p>Chinmaya Vidyalaya, Vaduthala</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- JD 2 ENDS-->
					<!-- JD 3-->
					<div class="result-box mb-5">
						<h1 class="text-center mb-4">Gaming that involves warfare should be banned in India | JD3</h1>
						<div class="row mb-5 mb-mob-5">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 offset-xl-2 offset-lg-2 offset-md-2 text-center">
								<div class="winner hgh">
									<h2 class="pt-3">WINNER</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/img8.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Shreeja Mallick</h2>
									<p>CLASS : VII</p>
									<p>Shiv Nadar School</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner hgh">
									<h2 class="pt-3">RUNNER_UP</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/Annie.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Annie Josephine Fenol</h2>
									<p>CLASS : VII</p>
									<p>Bhavan's Vidya Mandir, Kochi</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award1 hgh">
									<h2 class="pt-3">THE FINEST POINT</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/img8.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Shreeja Mallick</h2>
									<p>CLASS : VII</p>
									<p>Shiv Nadar School</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award2 hgh">
									<h2 class="pt-3">COUNTER STRIKE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/sanchita.PNG" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Sanchita Suri</h2>
									<p>CLASS : VI</p>
									<p>The Choice School, Thiruvalla</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner award3 hgh">
									<h2 class="pt-3">LIGHTER SIDE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/Annie.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Annie Josephine Fenol</h2>
									<p>CLASS : VII</p>
									<p>Bhavan's Vidya Mandir, Kochi</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- JD 3 ENDS-->
					<!-- JD 4-->
					<div class="result-box mb-5">
						<h1 class="text-center mb-4">We still need to wear school uniforms in India | JD4</h1>
						<div class="row mb-5 mb-mob-5">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 offset-xl-2 offset-lg-2 offset-md-2 text-center">
								<div class="winner hgh">
									<h2 class="pt-3">WINNER</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/michelle.jpg" class="rounded-circle mt-4 mb-4" alt="Michelle Theophine">
									<h2>Michelle Theophine</h2>
									<p>CLASS : V</p>
									<p>Rajagiri Public School, Kalamassery</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner hgh">
									<h2 class="pt-3">RUNNER_UP</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/70e07814-2d62-4285-b875-ec80123276691.JPG" class="rounded-circle mt-4 mb-4" alt="Shaurya Swaraan">
									<h2>Shaurya Swaraan</h2>
									<p>CLASS : VII</p>
									<p>Sai International School</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award1 hgh">
									<h2 class="pt-3">THE FINEST POINT</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/michelle.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Michelle Theophine</h2>
									<p>CLASS : V</p>
									<p>Rajagiri Public School, Kalamassery</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award2 hgh">
									<h2 class="pt-3">COUNTER STRIKE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG_20190716_100031.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Aditya A Gaikwad</h2>
									<p>CLASS : VII</p>
									<p>RM Shah Public School, Karnataka</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner award3 hgh">
									<h2 class="pt-3">LIGHTER SIDE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/70e07814-2d62-4285-b875-ec80123276691.JPG" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Shaurya Swaraan</h2>
									<p>CLASS : VII</p>
									<p>Sai International School</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- JD 4 ENDS-->
					<!-- JD 5-->
					<div class="result-box mb-5">
						<h1 class="text-center mb-4">You learn more on the internet than from a visit to your grandmother's place | JD5</h1>
						<div class="row mb-5 mb-mob-5">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 offset-xl-2 offset-lg-2 offset-md-2 text-center">
								<div class="winner hgh">
									<h2 class="pt-3">WINNER</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/Abhijit_Majhi_Profile_Image-1.jpg" class="rounded-circle mt-4 mb-4" alt="Abhijit Majhi">
									<h2>Abhijit Majhi</h2>
									<p>CLASS : VII</p>
									<p>De Paul School, Berhampur</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner hgh">
									<h2 class="pt-3">RUNNER_UP</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/Vasu1.png" class="rounded-circle mt-4 mb-4" alt="Vasundra S">
									<h2>Vasundra S</h2>
									<p>CLASS : V</p>
									<p>Edubba School, Chennai</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award1 hgh">
									<h2 class="pt-3">THE FINEST POINT</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-04-13_at_23.45.43.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Rakesh C P</h2>
									<p>CLASS : VII</p>
									<p>BGS World School, Bengaluru</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award2 hgh">
									<h2 class="pt-3">COUNTER STRIKE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/Rithwik-Photo-ID-1.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Rithvik Aditya Shenoy</h2>
									<p>CLASS : VI</p>
									<p>The Choice School, Thiruvalla</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner award3 hgh">
									<h2 class="pt-3">LIGHTER SIDE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-03-26_at_13.20.11.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Jeevana Karthikeyan</h2>
									<p>CLASS : VII</p>
									<p>Amrita Vidyalayam</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- JD 5 ENDS-->
					<!-- JD 6-->
					<div class="result-box mb-5">
						<h1 class="text-center mb-4">Instagram's minimum age should be lowered to 10 | JD6</h1>
						<div class="row mb-5 mb-mob-5">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 offset-xl-2 offset-lg-2 offset-md-2 text-center">
								<div class="winner hgh">
									<h2 class="pt-3">WINNER</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/676DD86A-F335-4DA7-BC26-EA85E9BC7234.jpeg" class="rounded-circle mt-4 mb-4" alt="Charuhasini Chaitra Madasu">
									<h2>Charuhasini Chaitra Madasu</h2>
									<p>CLASS : VII</p>
									<p>Meridian School</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner hgh">
									<h2 class="pt-3">RUNNER_UP</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG_20201217_150522.jpg" class="rounded-circle mt-4 mb-4" alt="Anisha Dutta">
									<h2>Anisha Dutta</h2>
									<p>CLASS : V</p>
									<p>Delhi Public School, Ruby Park, Kolkata</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award1 hgh">
									<h2 class="pt-3">THE FINEST POINT</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/676DD86A-F335-4DA7-BC26-EA85E9BC7234.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Charuhasini Chaitra Madasu</h2>
									<p>CLASS : VII</p>
									<p>Meridian School</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award2 hgh">
									<h2 class="pt-3">COUNTER STRIKE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-02-28_at_20.36.50.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Joanna Teresa Antony</h2>
									<p>CLASS : VII</p>
									<p>Army Public School, Bolarum</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner award3 hgh">
									<h2 class="pt-3">LIGHTER SIDE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG_20201217_150522.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Anisha Dutta</h2>
									<p>CLASS : V</p>
									<p>Delhi Public School, Ruby Park, Kolkata</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- JD 6 ENDS-->
					<!-- JD 7-->
					<div class="result-box mb-5">
						<h1 class="text-center mb-4">We should replace handwriting with typing in schools | JD7</h1>
						<div class="row mb-5 mb-mob-5">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 offset-xl-2 offset-lg-2 offset-md-2 text-center">
								<div class="winner hgh">
									<h2 class="pt-3">WINNER</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/ANJALI_MENON_PASSPORT_SIZE_PHOTO.jpg" class="rounded-circle mt-4 mb-4" alt="Charuhasini Chaitra Madasu">
									<h2>Anjali Menon</h2>
									<p>CLASS : VI</p>
									<p>Blooming Buds Bethania English School, Vellithuruthi</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner hgh">
									<h2 class="pt-3">RUNNER_UP</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-04-15_at_09.12.08_(1).jpeg" class="rounded-circle mt-4 mb-4" alt="Anisha Dutta">
									<h2>Aamir Ahmed</h2>
									<p>CLASS : VII</p>
									<p>Bodhi School, Trivandrum</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award1 hgh">
									<h2 class="pt-3">THE FINEST POINT</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG_20210302_100905.jpg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Sai Sharan B</h2>
									<p>CLASS : VII</p>
									<p>Gitanjali Senior School</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award2 hgh">
									<h2 class="pt-3">COUNTER STRIKE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-04-15_at_09.12.08_(1).jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Aamir Ahmed</h2>
									<p>CLASS : VII</p>
									<p>Bodhi School, Trivandrum</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner award3 hgh">
									<h2 class="pt-3">LIGHTER SIDE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-04-15_at_09.12.08.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Vivaan Mathur</h2>
									<p>CLASS : VI</p>
									<p>Genesis Global School</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- JD 7 ENDS-->
					<!-- JD 8-->
					<div class="result-box mb-5">
						<h1 class="text-center mb-4">Cricket should replace hockey as our national game | JD8</h1>
						<div class="row mb-5 mb-mob-5">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 offset-xl-2 offset-lg-2 offset-md-2 text-center">
								<div class="winner hgh">
									<h2 class="pt-3">WINNER</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/MINERVA_SIDDHI.jpeg" class="rounded-circle mt-4 mb-4" alt="Charuhasini Chaitra Madasu">
									<h2>Minerva Siddhi</h2>
									<p>CLASS : VII</p>
									<p>DAV Public School CSPur</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner hgh">
									<h2 class="pt-3">RUNNER_UP</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-03-23_at_12.12.49.jpeg" class="rounded-circle mt-4 mb-4" alt="Anisha Dutta">
									<h2>Aarit Kundu</h2>
									<p>CLASS : VII </p>
									<p>National Public School, Kalkere</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award1 hgh">
									<h2 class="pt-3">THE FINEST POINT</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/MINERVA_SIDDHI.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Minerva Siddhi</h2>
									<p>CLASS : VII</p>
									<p>DAV Public School CSPur</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award2 hgh">
									<h2 class="pt-3">COUNTER STRIKE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-04-11_at_22.58.50.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Vimarsh Kannan</h2>
									<p>CLASS : VII</p>
									<p>Loyola School</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner award3 hgh">
									<h2 class="pt-3">LIGHTER SIDE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-04-11_at_22.59.25.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">
									<h2>Samaira Chitlangia</h2>
									<p>CLASS : V</p>
									<p>La Martiniere for Girls, Kolkata</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- JD 8 ENDS-->
				</div>
			</div>
		</div>
	</section>
	<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 col-xs-12">
				<div class="about-uc">
					<h6>ABOUT US</h6>
					<p style="font-size: 12px;">The New Indian Express group is one of the most influential and reputed media houses founded during the pre-independence era when freedom of expression was severely curtailed. True to the traits of journalism the group has in the past 85 years stood up to voice dissent by speaking truth to the people.</p>
				</div>
			</div>
			<div class="col-xl-4 col-md-4 col-lg-4 col-sm-4 col-xs-6 col-6">
				<h6 class="text-center">FOLLOW US</h6>
				<div class="social-icons">
					<a><img src="<?php echo ASSETURL;?>img/fb.png"></a>
					<a><img src="<?php echo ASSETURL;?>img/twitter.png"></a>
					<a><img src="<?php echo ASSETURL;?>img/youtube.png"></a>
				</div>
				<p style="font-size: 12px;" class="text-center">Copyright - Edexlive <?php echo date('Y'); ?></p>
			</div>
			<div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-xs-6 col-6">
				<img src="<?php echo ASSETURL;?>img/group.jpg">
			</div>
		</div>
	</div>
</section>
		<script type="text/javascript">
		$(document).ready(function(e){
			$('.result-box').each(function(index){
				var row1 = $(this).find('.row').eq(0);
				var row2 = $(this).find('.row').eq(1);
				var div = Math.max($($(row1).find('.col-xl-4').eq(0)).find('.hgh').height() , $($(row1).find('.col-xl-4').eq(1)).find('.hgh').height());
				$($(row1).find('.col-xl-4').eq(0)).find('.hgh').css('height' , div);
				$($(row1).find('.col-xl-4').eq(1)).find('.hgh').css('height' , div);
				var div1 = Math.max($($(row2).find('.col-xl-4').eq(0)).find('.hgh').height() , $($(row2).find('.col-xl-4').eq(1)).find('.hgh').height() , $($(row2).find('.col-xl-4').eq(2)).find('.hgh').height());
				$($(row2).find('.col-xl-4').eq(0)).find('.hgh').css('height' , div1);
				$($(row2).find('.col-xl-4').eq(1)).find('.hgh').css('height' , div1);
				$($(row2).find('.col-xl-4').eq(2)).find('.hgh').css('height' , div1);
			});
		});
		</script>
		</body>
	</head>
</html>