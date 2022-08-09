<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo ASSETURL; ?>bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo ASSETURL; ?>fontawesome/css/all.min.css">
	<script src="<?php echo ASSETURL; ?>bootstrap4/js/jquery.min.js"></script>
	<script src="<?php echo ASSETURL; ?>bootstrap4/js/popper.min.js"></script>
	<script src="<?php echo ASSETURL; ?>bootstrap4/js/bootstrap.min.js"></script>
	<style>
	<?php echo file_get_contents('/var/www/html/edex_app/debate/assets/css/custom.css'); ?>
	</style>
</head>
<body>
	<button class="scroll-up" id="scroll-up" onclick="topFunction()" title="Go to Top"><i class="fas fa-caret-up"></i></button>
	<!--header section-->
	<section class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-md-3 col-sm-3 col-xs-3 col-3 pt-5 pl-8">
					<div class="dropdown mobile-dropdown">
						<i class="fas fa-bars dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></i>
						<div class="dropdown-menu" style="">
							<a class="dropdown-item menu-register" href=""><i class="fa fa-caret-right"></i> Register</a>
							<a class="dropdown-item menu-rules" href=""><i class="fa fa-caret-right"></i> Rules &amp; Regulations</a>
							<a class="dropdown-item menu-contact" href=""><i class="fa fa-caret-right"></i> Contact Us</a>
							<a class="dropdown-item" href="<?php echo base_url('faq');?>"><i class="fa fa-caret-right"></i> FAQ</a>
						</div>
					</div>
				</div>
				<div class="col-xl-9 col-md-9 col-sm-9 col-xs-9 col-9 pt-4 text-right">
					<img src="<?php echo ASSETURL; ?>img/logo/edex-works-logo.png" class="img-fluid pr-5" alt="Edex_works">
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12 text-center pt-5">
					<img src="<?php echo ASSETURL; ?>img/logo/debate-logo-min.gif" class="img-fluid">
					<h3 class="text-center header-h3">India's Biggest Inter-School Virtual Debate Competition</h3>
				</div>
			</div>
			<div class="row d-none d-lg-block d-xl-block d-md-block">
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12 text-center">
					<div class="menus">
						<a class="menu-register" href="">Register</a>
						<a class="menu-rules" href="">Rules &amp; Regulations</a>
						<a class="menu-contact" href="">Contact Us</a>
						<a href="<?php echo base_url('faq');?>" style="margin-right: 0;">FAQ</a>
					</div>
				</div>
			</div>
		</div>
		<hr class="d-none d-lg-block d-xl-block d-md-block">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/bulb2-min.gif" class="animation-img bulb">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/question-mark-min.gif" class="animation-img question-mark">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/speaker-min.gif" class="animation-img speaker">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/cap-min.gif" class="animation-img cap">
		<img src="<?php echo ASSETURL; ?>img/characters/character1.gif" class="animation-img boy">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/podium-min.gif" class="animation-img podium">
	</section>
	<!--header section ends-->
	<!--video section-->
	<section class="video">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12 text-center mt-7">
					<div class="video-wrapper">
						<video controls style="width:100%;" controlsList="nodownload" poster="<?php echo ASSETURL; ?>img/backgrounds/poster-min.png">
							<source src="assets/videos/reference.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</div>
		<img src="<?php echo ASSETURL; ?>img/characters/video-min.gif" class="animation-img video-gif">
	</section>
	<!--video section ends-->
	<!--about section-->
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12 text-center mt-7">
					<h1 class="text-center title">Let's Debate</h1>
					<!--<div class="text" style="display:none;">
						<p class="content"></p>
						<div class="dash"></div>
					</div>
					<div class="text" style="display:none;">
						<p class="content1" style="display: inline;"></p>
						<div class="dash"></div>
					</div>-->
					<p class="text-center contact-title">A debate isn't an argument. There's so much more to it. At a time when the debating culture in India is tending more towards noisy shouting matches and is heavily slanted towards who's the most aggressive speaker of them all,The New Indian Express and Edex Live are proud to bring to you Let's Debate - a virtual school-level debating competition that will strive to bring decency back to the art of debate.</p>
					<p class="text-center contact-title">So if you're someone who's keen on making a point, have great ideas and believe in the power of the spoken word, then Let's Debate is THE place for you. This competition is open to school students from across India and the entire process will be virtual. The winners will walk away with some serious bragging rights, will get airplay across our social media channels and get featured in Edex and The New Indian Express.</p>
					
					<p class="text-center hide-p">With a lot of stress laid on the Oxford style of debating, we will hold debate orientation sessions for all participants, hammer out all your queries and get you in top shape for the actual debate. Popular speakers from across the country will serve as the Debate Masters for each debate. After it is recorded on a video-conferencing platform, it will be produced and aired. The winner of each debate will feature in a grand finale and the top two winners will walk away with bragging rights and a host of exciting prizes.</p>
					<p class="text-center hide-p">What are you waiting for? Come on. Let's Debate!</p>
					<p class="text-center hide-s" style="color: #264e82;"><span>Read More <i class="fas fa-chevron-down"></i></span></p>
				</div>
			</div>
		</div>
		<img src="<?php echo ASSETURL; ?>img/characters/Lets-debate-min.gif" class="animation-img lets-debate">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/calculator-min.gif" class="animation-img calculator">
		<img data-img="<?php echo ASSETURL; ?>img/characters/character4.png" data-gif="<?php echo ASSETURL; ?>img/characters/character4.gif" src="<?php echo ASSETURL; ?>img/characters/character4.gif" class="animation-img character4 animate"> 
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/voice-min.gif" class="animation-img voice">
	</section>
	<!--about section ends-->
	<!--who can apply section-->
	<!--<section class="who-can-take-part">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12 mt-5 text-center">
					<h1 class="text-center title">Who Can Take Part?</h1>
					<i class="light-switch icon-lightbulb"></i>
					<p class="bouncer">Let's Debate will be held for school students from two categories:</p>
				</div>
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12 mt-4">
					<ul>
						<li><i class="fas fa-check"></i> <p class="bouncer" style="display: inline-block;"> Grade V-VII</p></li>
						<li><i class="fas fa-check"></i> <p class="bouncer" style="display: inline-block;"> Grade VIII-X</p></li>
					</ul>
				</div>
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12">
					<p class="bouncer">Since this is an inter-school debate contest, all entries will HAVE TO BE proposed or nominated by your school. The registration process is incredibly simple and you can do it right here.</p>
				</div>
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12">
					<p><i class="bouncer">You will also be consenting to standard production and broadcasting norms when you register.</i></p>
				</div>
			</div>
		</div>
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/women2-min.gif" class="animation-img women2">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/mic-min.gif" class="animation-img mic">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/bulb2-min.gif" class="animation-img bulb1">
	</section>-->
	<section class="who-can-take-part">
		<div class="container">
			<!--<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12 mt-5 text-center">
					<h1 class="text-center title">Who Can Take Part?</h1>
				</div>
			</div>-->
			<div class="row">
				<div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 col-6 mt-5">
					<div class="wctp-container" data-id="pop1">
						<img src="assets/img/backgrounds/gifs/w1-min.gif" class="img-fluid">
						<p style="background: #0aafb4">With Whom?</p>
					</div>
				</div>
				<div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 col-6 mt-5">
					<div class="wctp-container" data-id="pop2">
						<img src="assets/img/backgrounds/gifs/w2-min.gif" class="img-fluid">
						<p style="background: #4d9ca4">Tick Tock?</p>
					</div>
				</div>
				<div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 col-6 mt-5">
					<div class="wctp-container" data-id="pop3">
						<img src="assets/img/backgrounds/gifs/w3-min.gif" class="img-fluid">
						<p style="background: #cdcdac">How To?</p>
					</div>
				</div>
				<div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 col-6 mt-5">
					<div class="wctp-container" data-id="pop4">
						<img src="assets/img/backgrounds/gifs/w4-min.gif" class="img-fluid">
						<p style="background: #0f1a26;">Brownie Points?</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--who can apply section ends-->
	<!--register section-->
	<section class="register">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-md-8 col-sm-8 col-xs-8 col-12 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2 mt-5">
					<h1 class="text-center title">Register Now</h1>
					<form method="post" action="<?php echo base_url('index'); ?>" enctype="multipart/form-data" id="register_now">
					<!--<div class="form-group text-center img-container">
						<div class="col-sm-4 imgUp" style="display:inline-block;">
							<div class="imagePreview"></div>
							<label class="btn btn-primary">
								Upload Image <sup>*</sup><input name="user_image" type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
							</label>
						</div>
						<div class="col-sm-4 imgUp" style="display:inline-block;">
							<div class="imagePreview"></div>
							<label class="btn btn-primary">
								Upload Register ID <sup>*</sup><input name="id_image" type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
							</label>
						</div>
						<?php //echo form_error('user_image' ,'<p class="error" style="text-align:left;margin:0;">*','</p>'); ?>
						<?php //echo form_error('id_image' ,'<p class="error" style="text-align:left;margin:0;">*','</p>'); ?>
					</div>-->
					<div class="form-group">
						<label>School <sup>*</sup></label>
						<input class="form-control" id="school" name="school" type="text" value="<?php echo set_value('school'); ?>">
						<?php echo form_error('school' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Name <sup>*</sup></label>
						<input class="form-control" id="name" name="name" type="text" value="<?php echo set_value('name'); ?>">
						<?php echo form_error('name' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group gender">
						<div class="form-check-inline">
							<label class="form-check-label" for="radio1">
								<input type="radio" class="form-check-input" id="radio1" name="gender" value="1" <?php echo  set_radio('gender', '1'); ?> >Male
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label" for="radio2">
								<input type="radio" class="form-check-input" id="radio2" name="gender" value="0" <?php echo  set_radio('gender', '0'); ?>>Female
							</label>
						</div>
						<?php echo form_error('gender' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Date Of Birth <sup>*</sup></label>
						<input type="date" class="form-control" name="dob" value="<?php echo set_value('dob'); ?>"> 
						<?php echo form_error('dob' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Class <sup>*</sup></label>
						<input type="text" class="form-control" name="class" value="<?php echo set_value('class'); ?>"> 
						<?php echo form_error('class' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>About Me <sup>*</sup></label>
						<textarea class="form-control" name="about_me"><?php echo set_value('about_me'); ?></textarea>
						<?php echo form_error('about_me' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Profile Image <sup>*</sup></label>
						<input class="form-control" id="user_image" name="user_image" type="file">
					</div>
					<div class="form-group">
						<label>Upload School ID <sup>*</sup></label>
						<input class="form-control" id="id_image" name="id_image" type="file">
					</div>
					<div class="form-group">
						<label>Debate Topic<sup>*</sup></label>
						<select class="form-control" name="debate">
							<option value="">Please Select Any One</option>
							<?php
							foreach($debateList as $list){
								$sechuldeDate = date('jS M Y h:i A' , strtotime($list->schedule_date));
								echo '<option '.set_select('debate', $list->debate_id).' value="'.$list->debate_id.'">'.$list->topic.' ('.$sechuldeDate.')</option>';
							}
							?>
						</select>
						<?php echo form_error('debate' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Phone Number <sup>*</sup></label>
						<input class="form-control" name="phone" type="number" value="<?php echo set_value('phone'); ?>">
						<?php echo form_error('phone' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Email Address <sup>*</sup></label>
						<input class="form-control" name="email" type="email" value="<?php echo set_value('email'); ?>">
						<?php echo form_error('email' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
				</div>
			</div>
		</div>
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/rotation-min.gif" class="animation-img rotation">
		<img data-img="<?php echo ASSETURL; ?>img/characters/character5.png" data-gif="<?php echo ASSETURL; ?>img/characters/character5.gif" src="<?php echo ASSETURL; ?>img/characters/character5.png" class="animation-img character5 animate"> 
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/music-min.gif" class="animation-img music">
		<!--<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/women-min.gif" class="animation-img women">-->
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/computer.png" class="animation-img sun">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/globe.png" class="animation-img globe">
		<img data-img="<?php echo ASSETURL; ?>img/characters/character6.png" data-gif="<?php echo ASSETURL; ?>img/characters/character6.gif" src="<?php echo ASSETURL; ?>img/characters/character6.png" class="animation-img character6 animate"> 
	</section>
	<!--register section ends-->
	<!--contact us section-->
	<section class="contact-us mb-5">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-12 mt-5 text-center">
					<h1 class="text-center title">How does it work?</h1>
					<p class="text-center contact-title">Once you have registered, you will receive a mail/SMS confirmation from <a style="color: #264e82;" target="_BLANK" href="https://www.edexlive.com">www.edexlive.com</a> with your tracking ID. You will be intimated by mail about when your debate is scheduled and the Zoom link will be included. Join up and Let's Debate! Should you have any conflicting engagement/issue with the date allotted reach out to us at <a style="color: #264e82;" href="tel:+918939801211">+91 8939801211</a> over <i class="fab fa-whatsapp"></i></p>
				</div>
				<div class="col-xl-8 col-md-8 col-sm-8 col-xs-8 col-12 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2 mt-5">
					<div class="contact-container">
						<h4 class="text-center" style="font-weight: 600;">Need help? Reach Out!</h4>

						<p class="text-center mt-4 call"><i class="fas fa-phone"></i> +91735802990 &nbsp;&nbsp;&nbsp;<span style="color:rgba(0,0,0,.1);">|</span>&nbsp;&nbsp;&nbsp; <i class="fab fa-whatsapp"></i> +91 8939801211 </p>
						<hr>
						<h4 class="text-center mt-4 mb-2" style="font-weight: 600;">Ping us on our social media handles</h4>
						<div class="icons-social">
							<a href="https://twitter.com/xpress_edex" target="_BLANK" title="twitter"><img alt="twitter" title="twitter" src="<?php echo ASSETURL; ?>img/icons/twitter.png"></a>
							<a href="https://www.instagram.com/edexliveinsta/" target="_BLANK" title="instagram"><img alt="instagram" title="instagram" src="<?php echo ASSETURL; ?>img/icons/instagram.png"></a>
							<a href="https://www.linkedin.com/in/edex-live-11249b153/" target="_BLANK" title="linkedin"><img alt="linkedin" title="linkedin" src="<?php echo ASSETURL; ?>img/icons/linkedin.png"></a>
							<a href="https://www.facebook.com/edexnie/" target="_BLANK" title="facebook"><img alt="facebook" title="facebook" src="<?php echo ASSETURL; ?>img/icons/facebook.png"></a>
							<a href="https://www.youtube.com/channel/UCycKg_4JJxw_SMhdyXVnWgA" target="_BLANK" title="youtube"><img  alt="youtube" title="youtube" src="<?php echo ASSETURL; ?>img/icons/youtube.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/globe.png" class="animation-img letter">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/point-min.gif" class="animation-img point">
		<!--<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/women1-min.gif" class="animation-img women1">-->
		<img src="<?php echo ASSETURL; ?>img/characters/lets-forget-tiktok-min.gif" class="animation-img forget-tiktok1">
		<img src="<?php echo ASSETURL; ?>img/characters/hi1.gif" class="animation-img forget-tiktok">
		<img src="<?php echo ASSETURL; ?>img/backgrounds/gifs/question-mark-min.gif" class="animation-img question-mark1">
	</section>
	<!--contact us section ends-->
	<!--footer section ends-->
	<section class="footer mt-5">
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
						<a><img src="assets/img/fb.png"></a>
						<a><img src="assets/img/twitter.png"></a>
						<a><img src="assets/img/youtube.png"></a>
					</div>
					<p style="font-size: 12px;" class="text-center">Copyright - Edexlive 2021</p>
				</div>
				<div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-xs-6 col-6">
					<img src="assets/img/group.jpg">
				</div>
			</div>
		</div>
	</section>
	<!--footer section ends-->
	<!--modals section-->
	<div class="modal fade" id="error_modal">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-body">
					<p>Something went wrong.please try again.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="popup_modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="popup pop1 text-center">
						<h1 class="text-center title1">How many people will I be debating with?</h1>
						<p>Each preliminary debate will have eight participants. The matching and selection criteria will be done using an algorithm (cool way of saying 'we got an app') to avoid regional bias.</p>
					</div>
					<div class="popup pop2 text-center">
						<h1 class="text-center title1">How much time do we get to speak for?</h1>
						<p>Every speaker gets 4 minutes of initial presentation and 3 minutes of rebuttal. There will be no interruption, under any circumstances, when another speaker is speaking. You'll lose some serious points there. Remember, it's a debate. Not PUBG!</p>
					</div>
					<div class="popup pop3 text-center">
						<h1 class="text-center title1">How to apply?</h1>
						<p>Let's Debate will be held for school students from two categories:</p>
						<ul style="list-style:none;padding: 0;">
							<li style="margin-right: 5%;display: inline-block;"><i class="fas fa-check"></i> <p style="display: inline-block;"> Grade V-VII</p></li>
							<li style="display: inline-block;"><i class="fas fa-check"></i> <p style="display: inline-block;"> Grade VIII-X</p></li>
						</ul>
						<p>Since this is an inter-school debate contest, all entries will HAVE TO BE proposed or nominated by your school. The registration process is incredibly simple and you can do it right here.</p>
						<p><i>You will also be consenting to standard production and broadcasting norms when you register.</i></p>
					</div>
					<div class="popup pop4 text-center">
						<h1 class="text-center title1">What are we judged on?</h1>
						<p>Debaters will be marked on their content, style, presentation, adherence to norms of the debate as set down by the jury and body language. Humour is always an added bonus! After the debate airs, audience voting will be open for 48 hours and that, in conjunction with the judge's marks, will decide the top two winners. The eight top debaters will face off in the finale and the top two will walk away with the rolling trophy for their school.</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="otp_modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="otp-block">
						<h3 class="text-center title" style="font-size: 2rem;">Verify OTP</h3>
						<h4 class="text-center">Please enter the One-Time Password to verify your account</h4>
						<p class="text-center" style="color: #beb9b9;">A One-Time Password has been sent to your phone number and to your email address</p>
						<p class="text-center otp-error" style="color: red;display:none;">PLEASE ENTER VALID OTP</p>
						<div id="verify_otp" class="text-center">
							<input required name="otp1" type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
							<input required name="otp2" type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
							<input required name="otp3" type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
							<input required name="otp4" type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
						</div>
						<div class="form-group mt-3" style="margin-left: 5rem!important;">
							<input id="uid" type="hidden" value="">
							<input id="verify_btn" type="button" class="btn btn-primary" value="Verify" style="width: 79%;">
						</div>
					</div>
					<div class="success-block text-center" style="display:none;">
						<h2 style="color:green;" class="text-center">Hooray!</h2>
						<p style="color:green;" class="text-center">You've registered successfully. Now sit back, relax and watch your mail/SMS for intimation about when your debate is scheduled and what the next steps are</p>
						<button type="button" onclick="topFunction(1)" class="btn btn-primary mt-3" data-dismiss="modal" style="width: 30%;">Ok</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="second_modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body text-center">
					<h2 style="color:green;" class="text-center">You have already register for the event.</h2>
					<h2 style="color:green;" class="text-center">Admin will contact you soon.</h2>
					<button type="button" class="btn btn-primary mt-3" data-dismiss="modal" style="width: 30%;">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<!--modals section ends-->
	<!--scripts-->
	<script type="text/javascript">
		var scroll = document.getElementById("scroll-up");
		window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
		  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
			scroll.style.display = "block";
		  } else {
			scroll.style.display = "none";
		  }
		}
		function topFunction(type=1) {
			$('html,body').animate({scrollTop: $("body").offset().top},'slow');	
		}
		$(function() {
			$(document).on("change",".uploadFile", function() {
				var uploadFile = $(this);
				var files = !!this.files ? this.files : [];
				if (!files.length || !window.FileReader) return;
				if (/^image/.test( files[0].type)){
					var reader = new FileReader();
					reader.readAsDataURL(files[0]);
					reader.onloadend = function(){
						uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
					}
				}
			});
		});
	  $(document).ready(function(e){
		  <?php if($this->input->get('q')!=''): ?>
		  var pg = ".<?php echo $this->input->get('q'); ?>";
		  if(pg=='.register'){
			  $(pg).show();
		  }
		  $('html,body').animate({scrollTop: $(pg).offset().top},'slow');
		  <?php endif; ?>
		  $('.wctp-container').on('click' , function(e){
			  var show = $(this).data('id');
			  $('.popup').hide();
			  $('.'+show).show();
			  $('#popup_modal').modal({backdrop: "static"});
		  });
		  $(".animate").hover(function(){
			  var gif = $(this).data('gif');
			  $(this).attr('src' , gif);
		  }, function(){
				var img = $(this).data('img');
			   $(this).attr('src' , img);
		  });
		  $('.menu-register').on('click' , function(e){
			e.preventDefault();
			$(".register").show();
			$('html,body').animate({scrollTop: $(".register").offset().top},'slow');			
		  });
		  $('.menu-rules').on('click' , function(e){
			e.preventDefault(); 
			$('html,body').animate({scrollTop: $(".who-can-take-part").offset().top},'slow');
		  });
		  $('.menu-contact').on('click' , function(e){
			e.preventDefault(); 
			$('html,body').animate({scrollTop: $(".contact-us").offset().top},'slow');
		  });
		  $('#verify_btn').on('click' , function(e){
			  $('.otp-error').hide();
			  var otp1 = $("input[name='otp1']").val().trim();
			  var otp2 = $("input[name='otp2']").val().trim();
			  var otp3 = $("input[name='otp3']").val().trim();
			  var otp4 = $("input[name='otp4']").val().trim();
			  if(otp1!='' && otp2!='' && otp3!='' && otp4!=''){
				  $.ajax({
					 type:'post',
					 url: '<?php echo base_url("verify-otp"); ?>',
					 cache:false,
					 data:{'otp' :otp1+otp2+otp3+otp4 , 'uid' : $('#uid').val() },
					 success:function(data){
						 if(data==1){
							 $('#register_now').trigger("reset");
							 $('.otp-block').hide();
							 $('.success-block').show();
						 }else{
							$('.otp-error').show();   
						 }
						//alert(data);
					 },
					 error:function(err , errmsg){
						console.log(err); 
						console.log(errmsg); 
					 }
					 
				  });
			  }else{
				$('.otp-error').show();  
			  }
			  
		  });
		  $('.hide-s').on('click' ,function(){
			$('.hide-p').show();
			$(this).hide();
		  });
		  $('#register_now').on('submit', function (e){
			  var regex = new RegExp("^[a-zA-Z]+$");
			  var phoneregex = new RegExp("^[0-9]+$");
			  var emailregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			  $('p.error').remove();
			  e.preventDefault();
			  var error = true;
			  var name = $('input[name="name"]');
			  var dob = $('input[name="dob"]');
			  var school = $('input[name="school"]');
			  var class1 = $('input[name="class"]');
			  var phone = $('input[name="phone"]');
			  var email = $('input[name="email"]');
			  var user_image = $('input[name="user_image"]');
			  var id_image = $('input[name="id_image"]');
			  var debate = $('select[name="debate"]');
			  var about_me = $('textarea[name="about_me"]');
			  if(name.val().trim()==''){
				error = false;
				$('<p class="error">The field name is required.</p>').insertAfter(name);
			  }
			  if(!regex.test(name.val().trim())){
				error = false;
				$('<p class="error">The field name should contain only alphabet Chars.</p>').insertAfter(name);
			  }
			  if($("input[name='gender']:checked").length==0){
				error = false;
				$('.gender').append('<p class="error">The field gender is required.</p>');
			  }
			  if(dob.val().trim()==''){
				error = false;
				$('<p class="error">The field Date of Birth is required.</p>').insertAfter(dob);
			  }
			 /*  if(dob.val().trim()!=''){
				  var dob1 = new Date(dob.val().trim());
				  var diff_ms = Date.now() - dob1.getTime();
				  var age_dt = new Date(diff_ms);
				  var age = Math.abs(age_dt.getUTCFullYear() - 1970);
				  if(age>9 || age<17){
					error = false; 
					$('<p class="error">Your age should be in the limt of 10-16.</p>').insertAfter(dob);					
				  }
			  } */
			  if(school.val().trim()==''){
				error = false;
				$('<p class="error">The field school is required.</p>').insertAfter(school);
			  }
			  if(class1.val().trim()==''){
				error = false;
				$('<p class="error">The field class is required.</p>').insertAfter(class1);
			  }
			  if(about_me.val().trim()==''){
				error = false;
				$('<p class="error">The field about me is required.</p>').insertAfter(about_me);
			  }
			  if(debate.val().trim()==''){
				error = false;
				$('<p class="error">The field Debate topic is required.</p>').insertAfter(debate);
			  }
			  if(phone.val().trim()==''){
				error = false;
				$('<p class="error">The field phone is required.</p>').insertAfter(phone);
			  }
			  if(!phoneregex.test(phone.val().trim())){
				error = false;
				$('<p class="error">The field phone should contain only numbers.</p>').insertAfter(phone);
			  }
			  if(phone.val().trim().length!=10){
				  error = false;
				  $('<p class="error">The field phone should contain 10 chars.</p>').insertAfter(phone);
			  }
			  if(email.val().trim()==''){
				error = false;
				$('<p class="error">The field email is required.</p>').insertAfter(email);
			  }
			  if(!emailregex.test(email.val().trim())){
				error = false;
				$('<p class="error">Enter valid email address.</p>').insertAfter(email);
			  }
			  if(user_image.val().trim()==''){
				error = false;
				$('<p class="error">The field User Image is required.</p>').insertAfter(user_image);
			  }
			  if(id_image.val().trim()==''){
				error = false;
				$('<p class="error">The field Id Image is required.</p>').insertAfter(id_image);
			  }
			  if(error){
				   var formData = new FormData($('#register_now')[0]);
				  $.ajax({
					type: 'post',
					url: '<?php echo base_url("register-form"); ?>',
					data: formData,
					processData: false,
					contentType: false,
					success: function(result){
						if(result==0){
							$('#error_modal').modal({backdrop: "static"});	
						}else if(result==2){
							 $('#register_now').trigger("reset");
							$('#second_modal').modal({backdrop: "static"});	 
						 }else{
							$('#uid').val(result);
							$('#otp_modal').modal({backdrop: "static"});
						}
					},
					error: function(err,errcode){
						console.log(err);
						console.log(errcode);
					}					
				  });
			  }
		  });
		  var text = ["A debate isn't an argument. There's so much more to it. At a time when the debating culture in India is tending more towards noisy shouting matches and is heavily slanted towards who's the most aggressive speaker of them all,The New Indian Express and Edex Live are proud to bring to you Let's Debate - a virtual school-level debating competition that will strive to bring decency back to the art of debate." , "So if you're someone who's keen on making a point, have great ideas and believe in the power of the spoken word, then Let's Debate is THE place for you. This competition is open to school students from across India and the entire process will be virtual. The winners will walk away with some serious bragging rights, will get airplay across our social media channels and get featured in Edex and The New Indian Express."];
		  let app ={};
		  app.text = "";
		  app.index = 0;
		  app.chars = 0;
		  app.speed = 100;
		  app.repeat = 0;
		  app.count = 2;
		  app.container = ".text .content";
		  app.init = function(content ,ele){
			app.index = 0;
			app.chars = 0;
			app.speed = 30;
			app.repeat = 0;
			app.container = ele;
			$(app.container).parent().show();
			app.text = content;
			app.chars = app.text.length;
			this.write();
		  };
		  app.write = function(){
			 $(app.container).append(app.text[app.index]);
			 if(app.index < app.chars){
				 app.index++;
			 }
			 if(app.index==app.chars){
				 clearInterval(app.repeat);
				 $(app.container).next('.dash').hide();
				 if(app.count==3){
					 $('.hide-s').show();
				 }
				 if(app.count==2){
					 app.init(text[1] , ".text .content1");
					 app.count=3;
				 }
				 
			 }else{
				app.repeat = setTimeout(function(){ app.write(); }, app.speed); 
			 }
			  
		  }
		  app.init(text[0] , ".text .content");
	  });
	  
	  // Set bounce animation speed
var bounceSpeed = 7;

/* Ball Bouncing On Text © Yogev Ahuvia
 * ===========================================
 * This bouncing ball jumps over the words
 * inside the contentEditable paragraph.
 * The text itself is editable, the jump speed
 * is dynamic, and the ball bounce animation 
 * duration is set by the length of each word.
 *
 * Have you tried switching off the light? :)
 * -------------------------------------------
 * Works best on Google Chrome.
 */

var Bouncer = function(elem) {
  // init bouncable element and helpers
  this.$elem = $(elem);
  this.$ball = $('<div class="ball"></div>');
  this.$space = $('<span> </span>');
  this.timers = [];
  
  // handle in-place editing events
  this.$elem.on('blur', (function(instance) {
    return function() {
      instance.init();
      instance.bounce();
    };
  })(this));
  
  this.$elem.on('keypress', function(e) {
    var code = (e.keyCode ? e.keyCode : e.which);
    if (code == 13) {
      $(this).blur();
    }
  });
  
  // make it bounce
  this.init();
  this.bounce();
};

Bouncer.prototype.init = function() {
  // get element text for parsing
  this.elemText = this.$elem.text();
  
  // clone element for new text injection
  this.$cloned = this.$elem.clone()
                           .empty()
                           .addClass('cloned')
                           .removeAttr('contenteditable')
                           .appendTo(this.$elem.parent());
  
  // handle cloned element termination
  this.$cloned.on('click', (function(instance) {
    return function() {
      instance.reset();
      instance.$elem.focus();
      document.execCommand('selectAll', false, null);
    };
  })(this));
  
  this.$elem.hide(); // hide original element while animating
  this.$ball.appendTo(this.$cloned); // add ball to new element
  this.contentArray = this.elemText.split(' ');
};

Bouncer.prototype.bounce = function() {
  // ball animation incrementing delay
  var incrementingDelay = 0;
  
  // run through the text
  for (var j = 0; j < this.contentArray.length; j++) {
    var word = this.contentArray[j];
    
    // handle multiple spaces
    if (/\s/g.test(word)) {
      this.$space.clone().appendTo(this.$cloned);
      this.contentArray.splice(j, 1);
      j--;
      continue;
    }
    
    // escape each word with a span, add it to cloned element
    var $word = $('<span class="word">' + word + '</span>');
    this.$cloned.append($word);
    var wordLength = $word.width();
    
    // add white space elements between words
    if (j+1 < this.contentArray.length) {
      this.$space.clone().appendTo(this.$cloned);
    }
    
    // get ball position above word
    var ballLeft = $word[0].offsetLeft + wordLength/2;
    var ballTop = $word[0].offsetTop;
    
    var ballProps = {left: ballLeft,
                     top: ballTop,
                     wordLength: wordLength,
                     wordIndex: j};
    
    // preset timers for the whole text
    var timer = setTimeout((function(instance, ballProps) {
      return function() {
        instance.animateBall(ballProps);
      };
    })(this, ballProps), incrementingDelay);
    this.timers.push(timer);
    
    incrementingDelay += wordLength * bounceSpeed;
  }
  
  // hide ball when finished bouncing
  var timer = setTimeout((function(instance) {
    return function() {
      instance.$ball.fadeOut();
    };
  })(this), incrementingDelay);
  this.timers.push(timer);
}

Bouncer.prototype.animateBall = function(ballProps) {
  
  // set ball transition duration per word length
  var leftDuration = ballProps.wordLength * bounceSpeed + 'ms';
  var topDuration = (ballProps.wordLength * bounceSpeed / 2) + 'ms';
  this.$ball.css('transition-duration', 
                 leftDuration + ', ' + topDuration);
  
  // animate ball halfway and up
  var ballOffsetLeft = this.$ball[0].offsetLeft;
  var delta = ballProps.left - ballOffsetLeft;
  var ballHalfWay = ballOffsetLeft + delta;
  this.$ball.css({'left': ballHalfWay + 'px', 
                  'top': '-50px'});
  
  // finish animation when the ball reach halfway
  var halfwayReached = ballProps.wordLength * bounceSpeed / 2;
  var timer = setTimeout((function(instance, ballProps) {
    return function() {
      
      // animate ball to finish the bounce
      instance.$ball.css({'left': ballProps.left + 'px' , 
                          'top': '0px'});
      
      // light the bounced word when the ball bounces on it
      var bouncedOnWord = ballProps.wordLength * bounceSpeed / 2;
      var timer = setTimeout((function(instance, ballProps) {
        return function() {
          instance.$cloned
                  .find('.word')
                  .eq(ballProps.wordIndex)
                  .addClass('lit');
        };
      })(instance, ballProps), bouncedOnWord);
      instance.timers.push(timer);
    };
  })(this, ballProps), halfwayReached);
  this.timers.push(timer);
}

Bouncer.prototype.reset = function() {
  for (var i = 0; i < this.timers.length; i++) {
    clearTimeout(this.timers[i]);
  }
  this.timers.length = 0;
  
  this.$elem.show();
  this.$cloned.remove();
  this.$ball.removeAttr('style');
}

var bouncers = [];
$(document).ready(function() {
  // make all 'bouncer' classes, bounce
  $('.bouncer').each(function(index, element) {
    bouncers.push(new Bouncer(element));
  });;
  
  // handle light switch
  $('.light-switch').on('click', function() {
    $('body').toggleClass('dark');
    
    for (var i = 0; i < bouncers.length; i++) {
      bouncers[i].reset();
      bouncers[i].init();
      bouncers[i].bounce();
    }
  });
  
  // show hint
  $('.hint').removeClass('preload');
  setTimeout(function() {
    $('.hint').addClass('open');
    setTimeout(function() {
      $('.hint').removeClass('open');
    }, 4000);
  }, 6000);
});
	</script>
	<!--scripts end-->
</body>
</html>