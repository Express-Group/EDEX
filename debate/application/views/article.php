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
	.participant-box-text p{font-weight: 500;color: #000;/* min-height: 75px; */}
	.participant-box-text .btn{padding: .375rem 2.75rem;background-color: #fcc02e !important;border-color: #fcc02e !important;color: #000;font-weight: 700;box-shadow: 0px 2px 2px #00000075;}
	.participant-box span{position: absolute;bottom: -9px;width: 29%;font-size: 13px;left: 34%;background: #287dc0;    color: #fff;border: 3px solid #FFF;padding: 2px 6px 2px;border-radius: 12px;}
	.custom-nav{font-family: 'Bebas Neue', cursive;font-size: 28px;background: #264e82;display: flex;justify-content: center;float:left;width:100%;border-top-left-radius: 8px;border-top-right-radius: 8px;}
	.custom-nav a{color:#fff;}
	.custom-nav .nav-link{border-top-left-radius: 0;border-top-right-radius: 0;}
	.custom-nav1{width:100%;float:left;background:#fff;border-bottom-left-radius: 8px;border-bottom-right-radius: 8px;box-shadow: 0px 5px 5px #00000042;}
	.icon-bar{position: fixed;top: 50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);	transform: translateY(-50%);z-index:1;}
	.icon-bar a{display: block;text-align: center;padding: 16px;transition: all 0.3s ease;color: white;font-size: 20px;
	cursor:pointer;}
	.icon-bar a i{color:white;}
	.icon-bar a:hover{background-color: #000;}
	.facebook{background: #3B5998;color: white;}
	.twitter{background: #55ACEE;color: white;}
	.google{background: #0088cc;color: white;}
	.linkedin{background: #25D366;color: white;}
	.judge-inner{background: #fff;float: left;padding: 4%;/* height: 216px;overflow-y: scroll; */align-items: center;display: flex;}
	.judge-inner img{width: 150px;height:150px;object-fit: cover;border-radius: 50%;border: 6px solid #fcc02e;box-shadow: 0px 2px 2px #00000075;float:left;}
	.judge-inner div{width: calc(100% - 165px);float: left;padding-left: 15px;}
	.judge-inner h4{font-weight: 700;color: #264e82;text-transform: uppercase;font-size: 1.3rem;}
	@media only screen and (max-width: 768px){
		.title{font-size: 2rem;}
		.session iframe{height: 272px;}
		.header{position: fixed;z-index: 9;background:url(https://www.edexlive.com/debate/assets/img/backgrounds/bg3.jpg);}
		.header .text-right{padding-top: 2% !important;}
		.debate{margin-top: 18%;}
		.mobile-dropdown i.dropdown-toggle{font-size: 2rem;}
		.debate-gif{width: 103px;}
		.icon-bar a{font-size: 14px;padding: 9px;}
		.mt-mob-5{margin-top: 1rem!important;}
		.judge-inner img{width: 100px;height: 100px;}
		.judge-inner div{width: calc(100% - 100px);}
		.judge-inner h4{font-size: 18px;}
		.judge-inner p{font-size: 13px;}
		.judge-inner{/* height: 124px; */margin-bottom: 12px;align-items: center;display: flex;}
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
	<div class="icon-bar">
		<a onclick="share('<?php echo current_url(); ?>','<?php echo $details['topic']; ?>' ,'fb')" target="_BLANK" class="facebook"><i class="fa fa-facebook"></i></a> 
		<a onclick="share('<?php echo current_url(); ?>','<?php echo $details['topic']; ?>' ,'tw')" target="_BLANK" class="twitter"><i class="fa fa-twitter"></i></a> 
		<a onclick="share('<?php echo current_url(); ?>','<?php echo $details['topic']; ?>' ,'wa')" target="_BLANK" class="linkedin"><i class="fa fa-whatsapp"></i></a>
		<a onclick="share('<?php echo current_url(); ?>','<?php echo $details['topic']; ?>' ,'tg')" target="_BLANK" class="google"><i class="fa fa-telegram"></i></a> 
	</div> 
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
							<a class="dropdown-item"  href="<?php echo base_url('index?q=sch');?>"><i class="fa fa-caret-right"></i> Schedule</a> 
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
					<h1 class="text-center title"><?php echo $details['topic']; ?></h1>
					<?php
					foreach($sessions as $session){
						//$bestOf = ($session->best_of!='') ? json_decode($session->best_of , true) : [];
						$bestOf = [];
						echo '<div class="session">';
						echo $session->video_embed;
						echo '<div class="row mt-3">
				<div class="col-12 text-center">
					<img src="'.base_url('assets/img/bookworm.jpg').'" class="img-fluid" style="box-shadow: 0px 5px 5px #00000042;">
				</div>
			</div>';
						echo '<div class="row mt-3">';
						if($details['internal_judge']!=''){
							echo '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 internal"><div class="judge-inner">';
							echo '<img src="'.base_url('assets/img/judges/'.$details['internal_judge_img']).'">';
							echo '<div>';
							echo '<h5 class="" style="font-weight: 700;color: red;font-family: \'Bebas Neue\', cursive;">INTERNAL JUDGE</h5>';
							echo $details['internal_judge'];
							echo '</div>';
							echo '</div>';
							echo '</div>';
						}
						if($details['external_judge']!=''){
							echo '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 external"><div class="judge-inner">';
							echo '<img src="'.base_url('assets/img/judges/'.$details['external_judge_img']).'">';
							echo '<div>';
							echo '<h5 class="" style="font-weight: 700;color: red;font-family: \'Bebas Neue\', cursive;">EXTERNAL JUDGE</h5>';
							echo $details['external_judge'];
							echo '</div>';
							echo '</div>';
							echo '</div>';
						}
						echo '</div>';
						echo '<div class="row mt-4">';
							echo '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">';
							echo '<h5 style="color: #264e82;text-transform: uppercase;font-weight: 700;" class="text-center">Voting will be live when the session streams. Thank you for your patience!</h5>';
							echo '</div>';
						echo '</div>';
						
			
						echo '<ul class="nav nav-tabs mt-3 custom-nav" role="tablist">';
						echo '<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#votefor-'.$session->sid.'">Vote For</a></li>';
						for($i=0;$i<count($bestOf);$i++){
							$navid = str_replace(' ','_',$bestOf[$i]);
							echo '<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bestof-'.$navid.'">'.$bestOf[$i].'</a></li>';
						}
						echo '</ul>';
						echo '<div class="tab-content custom-nav1 mb-5 pt-4">';
							echo '<div id="votefor-'.$session->sid.'" class="container tab-pane active">';
								//echo '<h1 class="text-center title mt-2" style="font-size: 3rem;">Vote For</h1>';
								echo '<div class="vote-for">';
								$v =1;
								foreach($participants as $participant){
									$countlist = bestof($session->sid , $details['debate_id'] , $participant->pid ,0);
									if($participant->user_image!=''){
										$image = base_url('assets/img/participants/'.$participant->user_image);
									}else{
										$image = 'https://www.w3schools.com/howto/img_avatar.png';
									}
									$num = 0;
									foreach($countlist as $count){
										if($count->title=='votefor'){
											 $num = (int) $count->vote;
										}
									}
									if($v==1){
										echo '<div class="row">';
									}
									echo '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-12">';
									echo '<div class="participant-box text-center">';
									echo '<img style="width: 150px;height:150px;object-fit: cover;" src="'.$image.'" class="rounded-circle" alt="'.$participant->name.'">';
									echo '<span><b>'.$num.'</b> Votes</span>';
									echo '</div>';
									echo '<div class="participant-box-text text-center">';
									echo '<h4 style="color:#287dc0;font-weight:700;">'.$participant->name.'</h4>';
									echo '<h6>CLASS : '.$participant->class.'</h6>';
									echo '<p>'.$participant->school_name.'</p>';
									$cookieName = $session->sid.$details['debate_id'].$participant->pid.'0votefor';
									$cookieName1 = $cookieName.'value';
									if($details['voting_status']==0){
										echo '<button data-type="0" data-bestof="votefor" data-pid="'.$participant->pid.'" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-count="'.$num.'"  class="btn btn-primary" style="opacity: 0.5;cursor: move;pointer-events: none;">Vote</button>';
									}else{
										if(isset($_COOKIE[$cookieName]) && $_COOKIE[$cookieName]=='true' && isset($_COOKIE[$cookieName1]) && $_COOKIE[$cookieName1]=='votefor'){ 
											echo '<button data-type="0" data-bestof="votefor" data-pid="'.$participant->pid.'" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-count="'.$num.'"  class="btn btn-primary" style="opacity: 0.5;cursor: move;pointer-events: none;">Vote</button>';
										}else{
											echo '<button data-type="0" data-bestof="votefor" data-pid="'.$participant->pid.'" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-count="'.$num.'"  class="btn btn-primary vote">Vote</button>';
										}
									}
									echo '</div>';
									echo '</div>';
									if($v==4){
										echo '</div>';
										$v=1;
									}else{
										$v++;
									}
								}
								if($v!=1){
									echo '</div>';
								}
								echo '</div>';
								
							echo '</div>';
							for($i=0;$i<count($bestOf);$i++){
							$navid = str_replace(' ','_',$bestOf[$i]);
							echo '<div id="bestof-'.$navid.'" class="container tab-pane fade">';
							echo '<div class="best-of">';
							echo '<h1 class="text-center title mt-2" style="font-size: 3rem;">Best of '.$bestOf[$i].'</h1>';
							$v =1;
							foreach($participants as $participant){
								$countlist = bestof($session->sid , $details['debate_id'] , $participant->pid ,1);
								$num = 0;
								foreach($countlist as $count){
									if($count->title==$bestOf[$i]){
										$num = (int) $count->vote;
									}
								}
								if($v==1){
									echo '<div class="row">';
								}
								echo '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-12">';
								echo '<div class="participant-box text-center">';
								echo '<img style="width: 150px;" src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" alt="'.$participant->name.'">';
								echo '<span><b>'.$num.'</b> Votes</span>';
								echo '</div>';
								echo '<div class="participant-box-text text-center">';
								echo '<h4 style="color:#287dc0;font-weight:700;">'.$participant->name.'</h4>';
								echo '<p>'.$participant->school_name.'</p>';
								$cookieName = $session->sid.$details['debate_id'].$participant->pid.'1'.str_replace(' ','_',$bestOf[$i]);
								$cookieName1 = $cookieName.'value';
								if($participant->pid==233){
									echo '<button data-type="1" data-bestof="'.$bestOf[$i].'" data-pid="'.$participant->pid.'" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-count="'.$num.'" class="btn btn-primary" style="opacity: 0.5;cursor: move;pointer-events: none;">Vote</button>';
								}else{ 
									if(isset($_COOKIE[$cookieName]) && $_COOKIE[$cookieName]=='true' && isset($_COOKIE[$cookieName1]) && $_COOKIE[$cookieName1]==$bestOf[$i]){
										echo '<button data-type="1" data-bestof="'.$bestOf[$i].'" data-pid="'.$participant->pid.'" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-count="'.$num.'" class="btn btn-primary" style="opacity: 0.5;cursor: move;pointer-events: none;">Vote</button>';
									}else{
										echo '<button data-type="1" data-bestof="'.$bestOf[$i].'" data-pid="'.$participant->pid.'" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-count="'.$num.'" class="btn btn-primary vote">Vote</button>';
									}
								}
								echo '</div>';
								echo '</div>';
								if($v==4){
									echo '</div>';
									$v=1;
								}else{
									$v++;
								}
							}
							if($v!=1){
								echo '</div>';
							}
							echo '</div>';
							echo '</div>';
						}
						echo '</div>';
						
						/* echo '<h1 class="text-center title mt-5">Vote For</h1>';
						echo '<div class="vote-for">';
						$v =1;
						foreach($participants as $participant){
							$countlist = bestof($session->sid , $details['debate_id'] , $participant->pid ,0);
							$num = 0;
							foreach($countlist as $count){
								if($count->title=='votefor'){
									 $num = (int) $count->vote;
								}
							}
							if($v==1){
								echo '<div class="row">';
							}
							echo '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-12">';
							echo '<div class="participant-box text-center">';
							echo '<img style="width: 150px;" src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" alt="'.$participant->name.'">';
							echo '<span><b>'.$num.'</b> Votes</span>';
							echo '</div>';
							echo '<div class="participant-box-text text-center">';
							echo '<h4 style="color:#287dc0;font-weight:700;">'.$participant->name.'</h4>';
							echo '<p>'.$participant->school_name.'</p>';
							$cookieName = $session->sid.$details['debate_id'].$participant->pid.'0votefor';
							$cookieName1 = $cookieName.'value';
							if(isset($_COOKIE[$cookieName]) && $_COOKIE[$cookieName]=='true' && isset($_COOKIE[$cookieName1]) && $_COOKIE[$cookieName1]=='votefor'){
								echo '<button data-type="0" data-bestof="votefor" data-pid="'.$participant->pid.'" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-count="'.$num.'"  class="btn btn-primary" style="opacity: 0.5;cursor: move;pointer-events: none;">Vote</button>';
							}else{
								echo '<button data-type="0" data-bestof="votefor" data-pid="'.$participant->pid.'" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-count="'.$num.'"  class="btn btn-primary vote">Vote</button>';
							}
							echo '</div>';
							echo '</div>';
							if($v==4){
								echo '</div>';
								$v=1;
							}else{
								$v++;
							}
						}
						if($v!=1){
							echo '</div>';
						}
						echo '</div>'; */
						/* for($i=0;$i<count($bestOf);$i++){
							echo '<div class="best-of">';
							echo '<h1 class="text-center title mt-5">Best of '.$bestOf[$i].'</h1>';
							$v =1;
							foreach($participants as $participant){
								$countlist = bestof($session->sid , $details['debate_id'] , $participant->pid ,1);
								$num = 0;
								foreach($countlist as $count){
									if($count->title==$bestOf[$i]){
										$num = (int) $count->vote;
									}
								}
								if($v==1){
									echo '<div class="row">';
								}
								echo '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-12">';
								echo '<div class="participant-box text-center">';
								echo '<img style="width: 150px;" src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" alt="'.$participant->name.'">';
								echo '<span><b>'.$num.'</b> Votes</span>';
								echo '</div>';
								echo '<div class="participant-box-text text-center">';
								echo '<h4 style="color:#287dc0;font-weight:700;">'.$participant->name.'</h4>';
								echo '<p>'.$participant->school_name.'</p>';
								$cookieName = $session->sid.$details['debate_id'].$participant->pid.'1'.str_replace(' ','_',$bestOf[$i]);
								$cookieName1 = $cookieName.'value';
								if(isset($_COOKIE[$cookieName]) && $_COOKIE[$cookieName]=='true' && isset($_COOKIE[$cookieName1]) && $_COOKIE[$cookieName1]==$bestOf[$i]){
									echo '<button data-type="1" data-bestof="'.$bestOf[$i].'" data-pid="'.$participant->pid.'" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-count="'.$num.'" class="btn btn-primary" style="opacity: 0.5;cursor: move;pointer-events: none;">Vote</button>';
								}else{
									echo '<button data-type="1" data-bestof="'.$bestOf[$i].'" data-pid="'.$participant->pid.'" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-count="'.$num.'" class="btn btn-primary vote">Vote</button>';
								}
								echo '</div>';
								echo '</div>';
								if($v==4){
									echo '</div>';
									$v=1;
								}else{
									$v++;
								}
							}
							if($v!=1){
								echo '</div>';
							}
							echo '</div>';
						} */
						echo '</div>';
					}
					?>
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
		<script>
		$(document).ready(function(e){
			$('.vote').on('click' , function(e){
				$(this).off();
				var sid = $(this).data('sid');
				var debate_id = $(this).data('debate_id');
				var bestof = $(this).data('bestof');
				var count = $(this).data('count');
				var pid = $(this).data('pid');
				var type = $(this).data('type');
				var span = $(this);
				$.ajax({
					type:'post',
					cache:false,
					url :'<?php echo base_url("vote"); ?>',
					data:{'sid' : sid , 'debate_id' : debate_id , 'bestof' : bestof , 'count' : count , 'pid' : pid , 'type' : type},
					success:function(data){
						if(data!=0){
							var main = span.parent().prev().find('b').html(data);
							span.css({'opacity':'0.5' , 'cursor' : 'move' , 'pointer-events' :'none'});
							span.removeClass('vote');
						}
					},
					error:function(err ,errmsg){
						console.log(err);
						console.log(errmsg);
					}
				})
			});
			var div = Math.max($('.internal').find('.judge-inner').height() , $('.external').find('.judge-inner').height());
			$('.judge-inner').css('height' , div + 15); 
		});
		</script>
		<script>
		function share($url , $title , $type='fb'){
			if($type=='tw'){
				var popupWidth 	= 550;
				var popupHeight = 420;
				var shareUrl = 'https://twitter.com/intent/tweet?original_referer=' + encodeURIComponent($url) +'&text=' + encodeURIComponent($title)+'&url=' + encodeURIComponent($url);
				var left = (screen.width/2)-(popupWidth/2);
				var top = (screen.height/2)-(popupHeight/2);
			}
			if($type=='fb'){
				var popupWidth 	= 670;
				var popupHeight = 340;
				var shareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' +$url;
				var left = (screen.width/2)-(popupWidth/2);
				var top = (screen.height/2)-(popupHeight/2);
			}
			if($type=='wa'){
				var popupWidth 	= 550;
				var popupHeight = 420;
				var shareUrl = "whatsapp://send?text="+$title +" - "+encodeURIComponent($url);
				var left = (screen.width/2)-(popupWidth/2);
				var top = (screen.height/2)-(popupHeight/2);
			}
			if($type=='tg'){
				var popupWidth 	= 550;
				var popupHeight = 420;
				var shareUrl = "tg://msg?text="+$title +" - "+encodeURIComponent($url);
				var left = (screen.width/2)-(popupWidth/2);
				var top = (screen.height/2)-(popupHeight/2);
			}
			popupWindow = window.open(shareUrl,'popUpWindow','height=' + popupHeight + ',width=' + popupWidth + ',left=' + left + ',top=' + top + ',resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes');
		}
		</script>
		</body>
	</head>
</html>