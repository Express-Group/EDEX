<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'includes.php';
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
$servername = "localhost";
$username = "root";
$password = "DevDb@121!";
$errorMsg1 = "";

	$con1 = mysqli_connect('localhost', 'root', 'SamDb@121!', 'thinkedu2022');
	 $status = 0;
	 if(isset($_POST['add']))
	 {
		$error = 0;
		$errorMsg = array();
		$name = trim($_POST['name']);
 		$email = trim($_POST['email']);
		$mobno = trim($_POST['mobno']);
		$age = trim($_POST['age']);
		$city = trim($_POST['city']);
		$address = trim($_POST['address']);
		$program = trim($_POST['program']);
		if($name == ''){ $errorMsg['name'] = "Name is required"; $error = 1;}
		if($email == ''){ $errorMsg['email'] = "Email is required"; $error = 1;}
		if($mobno == ''){ $errorMsg['mobno'] = "Mobile number is required"; $error = 1;}
		if($age == ''){ $errorMsg['age'] = "Age is required"; $error = 1;}
		if(!is_numeric($age)){ $errorMsg['age'] = "Enter valid age"; $error = 1;}
		if($program == ''){ $errorMsg['program'] = "This field is required"; $error = 1;}
		$date = date('Y-m-d H:i:s');
		if($name != '' & $email != '' && $mobno !='' && $age && $program!=''){
			$orderId = time();
			$query = "insert into te_users(orderId, name, email, phone, age, city, address, program, modified_on) values('".$orderId."', '".$name."', '".$email."', '".$mobno."', '".$age."', '".$city."', '".$address."', '".$program."', '".$date."')";
			if(mysqli_query($con1, $query)){
				$price = 1000;
				switch($program){
					case ($program==1 || $program==2):
						$price = 1000;
					break;
					case ($program==3):
						$price = 2000;
					break;
					// case ($program==4):
						// $price = 1;
					// break;
					default:
						$price = 1000;
					break;
				}
				$UserId = mysqli_insert_id($con1);
				$status = 1;
				$paramList = [];
				$paramList["MID"] = 'vZNILl22786755608612';
				$paramList["ORDER_ID"] = $orderId;
				$paramList["CUST_ID"] = $UserId;
				$paramList["INDUSTRY_TYPE_ID"] = 'Retail';
				$paramList["CHANNEL_ID"] = 'WEB';
				$paramList["TXN_AMOUNT"] = (int) $price;
				$paramList["WEBSITE"] = 'DEFAULT';
				$paramList['CALLBACK_URL'] = 'https://www.edexlive.com/thinkedu2022/response.php?q='.encrypt($orderId , 'D104F4BF4A77839F945937A82743F614');
				$checkSum = getChecksumFromArray($paramList,'RpXz1eP!QQ4B7!%d');
				$url = 'https://securegw.paytm.in/theia/processTransaction';
				$content = '';
				foreach($paramList as $name => $value){
					$content .= '<input type="hidden" name="' . $name .'" value="' . $value . '">';
				}
				$content .= '<input type="hidden" name="CHECKSUMHASH" value="'.$checkSum.'">';
				echo '<!doctype html><html><head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script></head><body><form action="'.$url.'" method="post" name="redirect" id="redirect">'.$content.'</form><script>$(document).ready(function(e){ $(\'#redirect\').submit(); });</script></body></html>';
				exit;
			}else{
				$errorMsg1 = "Something went wrong.please try again";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if lt IE 9]> 
<script src="js/html5.js"></script>
<![endif]-->
<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="js/selectivizr.js"></script>
<![endif]-->
<!--[if lte IE 8]>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">
<![endif]-->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-2311935-32', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');
</script>
<title>ThinkEdu Conclave 2022</title>

<link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script src="js/jquery.bxslider.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#menu').superfish();
});
</script>
<script>
$(document).ready(function(){
$('.bxslider').bxSlider({
minSlides: 1,
maxSlides: 1,
slideWidth: 336,
slideMargin: 0,
infiniteLoop: false
});
$('.partners').bxSlider({
minSlides: 1,
maxSlides: 3,
auto: true,
moveSlides: 1,
speed: 1000,
pause: 3000,
slideWidth: 'auto',
controls: true,
pager: false,
infiniteLoop: true,
slideMargin: 20,
adaptiveHeight: true
});

});
$(window).load(function(e) {
$('.tweet-feeds').bxSlider({
mode: 'vertical',
minSlides: 1,
speed: 1000,
maxSlides: 1,
pager: false,
auto: true,
slideMargin: 15,
adaptiveHeight: false
});
});
</script>
</head>
<style>
	body{background-repeat: no-repeat: background-size: cover;}
	#home { margin-top: 10px; }
	ul.bs{padding-left: 3%;list-style: disc;}
}
</style>
<body>

<?php require_once("header.php"); ?>
<section id="home" class="position-relative">
<style>
			.register22{width: 100%; float: right; padding: 1rem; background: #ffffffb5; border-radius: 10px;margin-top:2rem;}
			.register22 h4{width: 100%; text-align: center; margin: 1rem 0; color: #193773; font-weight: bold;}
			label{font-weight: bold;}
			.btn-primary { color: #fff; background-color: #2a5fc7; border-color: #295ec6;}
			sup{color: red;}
			#errormessage{font-weight: unset; color: red;}
			#submit{background: #183a79; border: none; color: white; text-transform: uppercase; padding: 0.5rem 1rem;  border-radius: 5px; font-weight: bold;}
			.error{color: red; font-weight: unset;}
			
			@media only screen and (max-width: 768px){
				.register22{width: 100%; margin: 1rem;}
			}
			@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
				.register22{width: 100%; margin: 1rem;}
			}
			@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) { .register22{width: 100%; margin: 1rem;}}
		</style>
<div class="container">
		<div class="top-heading-container">
			<h3 style="font-weight: 500; color: white;">An Assertive India</h3>
			<h2 style="color: white;">Tenth Edition of TNIE's</h2>

			<h1 style="color: white;">ThinkEdu Conclave</h1>
			<h3 style="color: white;">A Decade of Thought Leadership in Education</h3>
		</div> 
		<div class="register22">
			<?php
				if($status){
					echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Success!</strong> Form submited successfully.</div>';
				}
				if($errorMsg1!=''){
					echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Error!</strong> '.$errorMsg1.'</div>';
				}
				?>
			<h4>REGISTRATION</h4>
			<form class="form" id="form22" method="post">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>Name</label><sup>*</sup>
							<input type="text" name="name" class="form-control" placeholder="Enter Your Username" required />
							<?php if(isset($errorMsg) && isset($errorMsg['name']) && $errorMsg['name'] != '' ){?>
							<label id="errormessage" class="error" for="name"><?php echo $errorMsg['name']?></label>
							<?php } ?>
						</div>
					</div>	
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>Email ID</label><sup>*</sup>
							<input type="email" name="email" class="form-control" placeholder="Enter Your Email" required />
							<?php if(isset($errorMsg) && isset($errorMsg['email']) && $errorMsg['email'] != '' ){?>
							<label id="errormessage" class="error" for="email"><?php echo $errorMsg['email']?></label>
							<?php } ?>
						</div>
					</div>				
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>Mobile Number</label><sup>*</sup>
							<input type="text" name="mobno" class="form-control" placeholder="Enter Your Mobile Number" required />
							<?php if(isset($errorMsg) && isset($errorMsg['mobno']) && $errorMsg['mobno'] != '' ){?>
							<label id="errormessage" class="error" for="mobno"><?php echo $errorMsg['mobno']?></label>
							<?php } ?>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>Age</label><sup>*</sup>
							<input type="text" name="age" class="form-control" placeholder="Enter Your Age" required />
							<?php if(isset($errorMsg) && isset($errorMsg['age']) && $errorMsg['age'] != '' ){?>
							<label id="errormessage" class="error" for="age"><?php echo $errorMsg['age'];?></label>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>City</label>
							<input type="text" name="city" class="form-control" placeholder="Enter Your City"/>
							<?php if(isset($errorMsg) && isset($errorMsg['city']) && $errorMsg['city'] != '' ){?>
							<label id="errormessage" class="error" for="city"><?php echo $errorMsg['city']?></label>
							<?php } ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" class="form-control" placeholder="Enter Your Address"/>
							<?php if(isset($errorMsg) && isset($errorMsg['address']) && $errorMsg['address'] != '' ){?>
							<label id="errormessage" class="error" for="address"><?php echo $errorMsg['address']?></label>
							<?php } ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>Select conclave day</label><sup>*</sup>
							<select class="form-control" name="program" required>
								<option value="">please select any one</option>
								<option value="1">DAY 1 (MARCH 8 , 2022) RS. 1000</option>
								<option value="2">DAY 2 (MARCH 9 , 2022) RS. 1000</option>
								<option value="3">DAY 1&2 (MARCH 8&9 , 2022) RS. 2000</option> 
							</select>
							<?php if(isset($errorMsg) && isset($errorMsg['program']) && $errorMsg['program'] != '' ){?>
							<label id="errormessage" class="error" for="program"><?php echo $errorMsg['program']?></label>
							<?php } ?>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<ul style="color: #183a79;font-weight: 500;" class="bs">
							<li>The registration fee per delegate is Rs. 1,000/- per day and Rs. 2000/-  for two days which includes lunch and tea/coffee.</li>
							<li>Please register separately for multiple delegates.</li>
							<li>The registration is non-transferable and the delegate fee is non-refundable.</li>
						</ul>
					</div>
				</div>	
				<div style="text-align: center">
					<input type="submit" name="add" value="submit" id="submit" />
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 text-right">
					<span style="color: #183a79;">*conditions apply</span>
				</div>
			</form>
			<script>
				$(document).ready(function(){
					$('#form22').validate({
						rules:{
							mobno:{
								required: true,
								number: true,
								maxlength: 10,
								minlength: 10
							},
							age:{
								required: true,
								number: true,
								maxlength: 2,
								minlength: 2
							}
						}
					});
				});
			</script>
		</div> 
		
		<!--End of top-heading-container -->
	<div class="clear"></div>
	
<div id="partner-container" style="display: none;">
<ul class="partners">
<!--<li><div class="title">&nbsp;</div><img src="images/blank-partner.png" alt="" /></li>-->
<li><h6>Presenting Partner</h6>
<a href="partners.php"><img src="images/title-partner.jpg" alt="" /></a>
</li>
<li><h6>Presenting Partner</h6>
<a href="partners.php"><img src="images/title-partner.jpg" alt="" /></a>
</li>
</ul>
</div> <!--End of partner box --><br/><br/>
<!--<div id="tweets" class="twitter-feeds">Loading feeds...</div>-->
</div> <!--End of container -->
</section>


<?php require_once("footer.php"); ?>

</body>
</html>