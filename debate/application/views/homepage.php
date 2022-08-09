 <!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>
  <style>
	@font-face{font-family: OPTIBodoniAntiqua;src: url(assets/fonts/OPTIBodoniAntiqua-Italic.otf);}
	@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap');
	 body{float:left;width:100%;margin:0;font-family: 'Roboto', sans-serif;}
	.header , .video , .about , .who-can-apply , .register , .contact-us , .footer{float:left;width:100%;position:relative;}
	.header .header-logo ,.video img ,.about img , .who-can-apply img , .register img , .contact-us img{width:100%;}
	.header .edex-works-logo{position: absolute;top: 2%;right: 2%;width: 200px;}
	.header .menus{position: absolute;top: 85%;left: 0%;width: 100%;text-align: center;z-index: 9;}
	.header .menus a{background: #fff;padding: 12px 52px 12px;border-radius: 35px;border: 1px solid #000;font-size: 19px;}
	.header hr{position: absolute;border-top: 1px solid #000;top: 85.1%;left: 10%;width: 79%;z-index: 1;}
	.mobile-dropdown{position: absolute;top: 5%;left: 5%;}
	.mobile-dropdown .dropdown-toggle::after{border:none;}
	.mobile-dropdown i.dropdown-toggle{font-size: 3rem;cursor:pointer;color:#4b4847;}
	.mobile-dropdown .dropdown-item i{color:#fbb03f;}
	.mobile-dropdown .dropdown-item{padding: 1.25rem 2.5rem;font-size: 20px;}
	.footer{background: #504F4F;color: #fff;padding: 2%;}
	.footer .social-icons{margin-bottom: 9%;text-align: center;}
	.footer .social-icons img{width: 35px;}
	.video-container{position: absolute;top: 0;left: 13%;max-width: 74%;}
	.video-container .video-wrapper{background: #fff;border-radius: 10px;float: left;padding: 1.5%;box-shadow: 0px 3px 5px 2px #00000087;}
	.video-container .video-wrapper video{width: 100%;float: left;}
	.register{background: url(assets/img/video.gif);padding-top: 3%;background-size: contain;}
	.rules-title{color: #264e82;font-family: OPTIBodoniAntiqua;font-size: 5rem;}
	.imagePreview {
    width: 100%;
    height: 180px;
    background-position: center center;
    /*background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg); */
    background-color:#fff;
    background-size: cover;
    background-repeat:no-repeat;
    display: inline-block;
   /*  box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2); */
}
.imgUp .btn-primary{
	display:block;
	border-radius:0px;
	box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
	margin-top:-5px;
}
.btn-primary{
	background-color: #264e82 !important;
    border-color: #264e82 !important;
}
p.error{color:red;}
#verify_otp input {
	margin: 0 5px;
	text-align: center;
	line-height: 80px;
	font-size: 50px;
	border: solid 1px #ccc;
	box-shadow: 0 0 5px #ccc inset;
	outline: none;
	width: 10%;
	transition: all .2s ease-in-out;
	border-radius: 3px;
	
	&:focus {
	  border-color: purple;
	  box-shadow: 0 0 5px purple inset;
	}
	
	&::selection {
	  background: transparent;
	}
}
.video{height:648.83px;}
.header{height:716.86px;}
.about{height:574.44px;}
.who-can-apply{height:629.83px;}
	@media only screen and (min-width: 1551px){
		.header .menus a{font-size: 25px;padding: 14px 55px 14px;}
		.header hr{top: 85.8%;}
		.header{height:897.97px;}
.video{height:812.73px;}
.about{height:719.56px;}
.who-can-apply{height:788.94px;}

	}
  </style>
  <script>
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

  </script>
</head>
<body>
	<section class="header">
		<img data-src="assets/img/header1.gif" class="img-fluid header-logo lazy">
		<img data-src="assets/img/edex-works-logo.png" class="img-fluid edex-works-logo lazy">
		
		<div class="menus">
			<a style="margin-right: 7%;">Register</a>
			<a>Rules & Regulation</a>
			<a style="margin-left: 7%;">Contact Us</a>
		</div>
		<hr>
		<div class="dropdown mobile-dropdown">
			<i class="fa fa-bars dropdown-toggle" data-toggle="dropdown"></i>
			<div class="dropdown-menu">
				<a class="dropdown-item" href=""><i class="fa fa-caret-right"></i> Register</a>
				<a class="dropdown-item" href=""><i class="fa fa-caret-right"></i> Rules & Regulation</a>
				<a class="dropdown-item" href=""><i class="fa fa-caret-right"></i> Contact Us</a>
			</div>
		</div>
	</section>
	<section class="video">
		<img data-src="assets/img/video.gif" class="img-fluid lazy">
		<div class="container video-container">
			<div class="row">
				<div class="col-md-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="video-wrapper">
					<video controls style="width:100%;" controlsList="nodownload">
						<source src="assets/videos/reference.mp4" type="video/mp4">
					</video>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about">
		<img data-src="assets/img/about-debate1.gif" class="img-fluid lazy">
	</section>
	<section class="who-can-apply">
		<img data-src="assets/img/who-can-apply1.gif" class="img-fluid lazy">
	</section>
	<section class="register" <?php if($this->input->get('otp')=='true'){ echo 'style="background-size: cover;"';} ?>>
		<div class="container">
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2">
			<?php if($this->input->get('otp')==''): ?>
			<div class="rules-regulation">
				<h1 class="text-center rules-title">Register Now</h1>
				<form style="background: #96c2e7;padding: 4%;margin: 5% 0 3%;border-radius: 81px;box-shadow: 0px 1px 6px 0px #000000a8;" method="post" action="<?php echo base_url('index'); ?>" enctype="multipart/form-data" id="register_now">
					<div class="form-group text-center">
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
						<?php echo form_error('user_image' ,'<p class="error" style="text-align:left;margin:0;">*','</p>'); ?>
						<?php echo form_error('id_image' ,'<p class="error" style="text-align:left;margin:0;">*','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Name <sup>*</sup></label>
						<input class="form-control" id="name" name="name" type="text" value="<?php echo set_value('name'); ?>">
						<?php echo form_error('name' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
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
						<label>School <sup>*</sup></label>
						<input type="text" class="form-control" name="school" value="<?php echo set_value('school'); ?>"> 
						<?php echo form_error('school' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
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
						<label>Debate Topic<sup>*</sup></label>
						<select class="form-control" name="debate">
							<option value="">Please Select Any One</option>
							<?php
							foreach($debateList as $list){
								echo '<option '.set_select('debate', $list->debate_id).' value="'.$list->debate_id.'">'.$list->topic.'</option>';
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
				<?php endif; ?>
				<?php if($this->input->get('otp')!='' && $this->input->get('q')!=''): ?>
				<div class="rules-regulation">
					<?php if($this->input->get('status')!='success'): ?>
					<h1 class="text-center rules-title">Verify OTP</h1>
					<h4 class="text-center">Please enter the One-Time Password to verify your account</h4>
					<p class="text-center">A One-Time Password has been sent to your phone number and to your email address</p>
					<?php if($this->input->get('status')=='invalid'): ?>
					<h3 class="text-center" style="color:red;">Invalid OTP. Please enter valid OTP</h3>
					<?php endif; ?>
					<form method="post" action="<?php echo base_url('verify-otp?q='.$this->input->get('q')); ?>" enctype="multipart/form-data">
						<div id="verify_otp" class="text-center">
							<input required name="otp[]" type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
							<input required name="otp[]" type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
							<input required name="otp[]" type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
							<input required name="otp[]" type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
						</div>
						<div class="text-center mt-4">
							<button class="btn btn-primary verify-btn" type="submit" style="width: 48%;font-size: 24px;margin-bottom: 10%;">VERIFY</button>
						</div>
					</form>
					<?php endif; ?>
					<?php if($this->input->get('status')=='success'): ?>
						<h1 style="color:green;" class="text-center">OTP verified successfully.</h1>
						<h1 style="color:green;" class="text-center">Thanks for your Registration. We will contact you Soon.</h1>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section class="contact-us">
		<img data-src="assets/img/contact-us.gif" class="img-fluid lazy">
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
	<script>
		var scroll = "<?php echo $scroll; ?>";
		$(document).ready(function(){
		if(scroll=="1"){
			var reg = $(".register  .col-xl-8").offset().top;
			//alert(reg);
			$('html,body').animate({
				scrollTop: reg},
			'slow');
		}
		});
		<?php if($this->input->get('otp')!='' && $this->input->get('q')!=''): ?>
		$(function(){
			//'use strict';
			var body = $('body');
			function goToNextInput(e){
				var key = e.which,
				t = $(e.target),
				sib = t.next('input');
				if (key != 9 && (key < 48 || key > 57)){
					e.preventDefault();
					return false;
				}
				if (key === 9){
					return true;
				}
				if (!sib || !sib.length){
					sib = body.find('input').eq(0);
				}
				sib.select().focus();
			}
			function onKeyDown(e){
				var key = e.which;
				if (key === 9 || (key >= 48 && key <= 57)){
					return true;
				}
				e.preventDefault();
				return false;
			}
			function onFocus(e){
				$(e.target).select();
			}
			body.on('keyup', 'input', goToNextInput);
			body.on('keydown', 'input', onKeyDown);
			body.on('click', 'input', onFocus);

		});
		<?php endif; ?>
		<?php if($this->input->get('otp')!='' && $this->input->get('q')!=''): ?>
		var reg = $(".register .col-xl-8").offset().top;
			$('html,body').animate({
				scrollTop: reg},
			'slow');
		<?php endif; ?>
		var lazyLoadInstance = new LazyLoad({});
	</script>
</body>
</html>
