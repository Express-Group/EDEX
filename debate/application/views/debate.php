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
	.iframe-final{width:100%;border-radius:8px;border:10px solid #fff;height: 795px;}
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
		.iframe-final{height:415px;}
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
				<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-12 mt-4 mt-mob-5">
					<h1 class="text-center title"><?php echo ucfirst($this->uri->segment(1)); ?> Debate</h1>
				</div>
			</div>
			<div class="row mt-0 mb-5">
				<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-12 mb-5">
					<iframe class="iframe-final" width="560" height="315" src="<?php echo $iframeUrl; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
				<?php
				$i=1;
				$count=0;
				foreach($list as $debate){
					//print_r($debate);
					if($i==1){
						echo '<div class="row">';
					}
					$class = ($count%2==0) ? 'fg1' :'fg';
					$url = str_replace(' ','-' ,strtolower(preg_replace('/[^\da-z ]/i', '', $debate->topic)));
					$url = 'debate/'.$debate->debate_id.'/'.$url;
					echo '<div class="col-xl-4 col-lg-4 col-md-4 col-xs-12 col-12 mb-4">';
					echo '<div class="debate-list">';
					echo '<a href="'.base_url($url).'" target="_BLANK" title="'.$debate->topic.'"><img src="'.base_url('assets/img/debate/'.$debate->debate_image).'" class="img-fluid"></a>';
					echo '<h5 class="mt-2"><a title="'.$debate->topic.'" href="'.base_url($url).'" target="_BLANK">'.$debate->topic.'</a></h5>';
					echo '<hr>';
					echo '<p class="mt-2">'.$debate->description.'</p>';
					echo '<img src="https://www.edexlive.com/debate/assets/img/characters/video-min.gif" class="animation-img '.$class.'">';
					echo '</div>';
					echo '</div>';
					if($i==3){
						$i=1;
						echo '</div>';
					}else{
						$i++;
					}
					$count++;
				}
				if($i!=1){
					echo '</div>';
				}
?>				
				
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
		</body>
	</head>
</html>