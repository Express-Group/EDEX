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
							<a class="dropdown-item" href="<?php echo base_url('result/junior');?>"><i class="fa fa-caret-right"></i> Junior Result </a>
							<a class="dropdown-item" href="<?php echo base_url('result/senior');?>"><i class="fa fa-caret-right"></i> Senior Result </a>
							<a class="dropdown-item" href="<?php echo base_url('result/final');?>"><i class="fa fa-caret-right"></i> Final Result </a>
							<a class="dropdown-item menu-contact" href="<?php echo base_url('index?q=con');?>"><i class="fa fa-caret-right"></i> Contact Us</a>
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
					<h1 class="text-center title"><?php echo ucfirst($this->uri->segment(2)); ?> Debate Result</h1>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-12 mt-5">
					
					<div class="result-box mb-5">
						<h1 class="text-center mb-4">Junior Debate</h1>
						<div class="row mb-5 mb-mob-5">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 offset-xl-2 offset-lg-2 offset-md-2 text-center">
								<div class="winner hgh">
									<h2 class="pt-3">WINNER</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/Advait.jpg" class="rounded-circle mt-4 mb-4" alt="">
									<h2>Advait Anand</h2>
									<p>CLASS : VII</p>
									<p>	Padma Seshadri Bala Bhavan Senior Secondary School, T Nagar, Chennai</p>
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
									<h2 class="pt-3">RUNNER-UP</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/676DD86A-F335-4DA7-BC26-EA85E9BC7234.jpeg" class="rounded-circle mt-4 mb-4" alt="Charuhasini Chaitra Madasu">
									<h2>Charuhasini Chaitra Madasu</h2>
									<p>CLASS : VII </p>
									<p>Meridian School</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award1 hgh">
									<h2 class="pt-3">THE FINEST POINT</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-04-06_at_00.20.50.jpeg" class="rounded-circle mt-4 mb-4" alt="Khai Jun Divakar">			
									<h2>Khai Jun Divakar</h2>
									<p>CLASS : VI </p>
									<p>The Choice School, Thiruvalla</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award2 hgh">
									<h2 class="pt-3">COUNTER STRIKE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG_20190716_100031.jpg" class="rounded-circle mt-4 mb-4" alt="Aditya A Gaikwad">
									<h2>Aditya A Gaikwad</h2>
									<p>CLASS : VII</p>
									<p>RM Shah Public School, Karnataka</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner award3 hgh">
									<h2 class="pt-3">LIGHTER SIDE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/Advait.jpg" class="rounded-circle mt-4 mb-4" alt="Advait Anand">
									<h2>Advait Anand</h2>
									<p>CLASS : VII</p>
									<p>	Padma Seshadri Bala Bhavan Senior Secondary School, T Nagar, Chennai</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- JD 1 ENDS -->
					
					
					<div class="result-box mb-5">
						<h1 class="text-center mb-4">Senior Debate</h1>
						<div class="row mb-5 mb-mob-5">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 offset-xl-2 offset-lg-2 offset-md-2 text-center">
								<div class="winner hgh">
									<h2 class="pt-3">WINNER</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG-7368.JPG" class="rounded-circle mt-4 mb-4" alt="Arush Sarma">
									<h2>Arush Sarma</h2>
									<p>CLASS : IX</p>
									<p>Sai International School</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner hgh">
									<h2 class="pt-3">RUNNER-UP</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/WhatsApp_Image_2021-04-10_at_20.07.19.jpeg" class="rounded-circle mt-4 mb-4" alt="Jay Min Divakar">
									<h2>Jay Min Divakar</h2>
									<p>CLASS : VIII</p>
									<p>Gems Modern Academy, Kochi</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award1 hgh">
									<h2 class="pt-3">THE FINEST POINT</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG-7368.JPG" class="rounded-circle mt-4 mb-4" alt="Arush Sarma">
									<h2>Arush Sarma</h2>
									<p>CLASS : IX</p>
									<p>Sai International School</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="winner award2 hgh">
									<h2 class="pt-3">COUNTER STRIKE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/Aryan.jpg" class="rounded-circle mt-4 mb-4" alt="Aryan Hotta">
									<h2>Aryan Hotta</h2>
									<p>CLASS : X</p>
									<p>DAV Vedanta International School, Lanjigarh</p>
									<?php echo $template; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-xs-4 col-12 text-center">
								<div class="runner award3 hgh">
									<h2 class="pt-3">LIGHTER SIDE</h2>
									<img style="width: 200px;height:200px;object-fit: cover;border: 4px solid #fff;" src="https://www.edexlive.com/debate/assets/img/participants/IMG-20201229-WA0029.jpg" class="rounded-circle mt-4 mb-4" alt="Prathyusha Udupa">
									<h2>Prathyusha Udupa</h2>
									<p>CLASS : IX</p>
									<p>Poorna Prajna Education Centre, Sadashiva Nagar, Bengaluru</p>
									<?php echo $template; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- JD 2 ENDS-->
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