<?php
ini_set('display_errors' , 1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'includes.php';
$orderId = decrypt(@$_GET['q'] , 'D104F4BF4A77839F945937A82743F614');
$isValidChecksum = "FALSE";
$paramList = @$_POST;
$isValidChecksum = verifychecksum_e($paramList, 'RpXz1eP!QQ4B7!%d', @$_POST['CHECKSUMHASH']);
if($isValidChecksum=='TRUE'){
	$responseData = http_build_query(@$_POST);
	if(@$_POST['ORDERID']==$orderId){
		$con = mysqli_connect('localhost', 'root', 'SamDb@121!', 'thinkedu2022');
		$userDetails = mysqli_query($con , "SELECT * FROM te_users WHERE orderId='".$orderId."'")->fetch_assoc();
		if(is_array($userDetails) && count($userDetails) > 0){
			$mercantamount =  (int) @$_POST['TXNAMOUNT'];
			$amount = ['1' => 1000 , '2' => 1000 , '3' => 2000 , '4' => 1];
			if($amount[$userDetails['program']] == $mercantamount){
				if(@$_POST['STATUS']=='TXN_SUCCESS'){
					$paymentMessage = 'SUCCESS';
					$paymentStatus = 1;
				}else if(@$_POST['STATUS']=='TXN_FAILURE'){
					$paymentMessage = 'ABORTED';
					$paymentStatus = 3;
				}else{
					$paymentMessage = 'FAILURE';
					$paymentStatus = 2;
				}
				mysqli_query($con , "UPDATE te_users SET tracking_id='".@$_POST['TXNID']."', bank_ref_no='".@$_POST['RESPCODE']."', response_content='".@$responseData."', status='".$paymentStatus."', modified_on='".date('Y-m-d H:i:s')."' WHERE uid='".$userDetails['uid']."'");
				$type="ok";
				/* $bodyText = '<html><body style="width:600px;margin:0 auto;background:#eeeeee61;"><p><img src="http://www.eventxpress.com/thinkedu2022/mheader.png" style="width:100%;"></p>';
				$bodyText .= '<div style="padding:10px;"><p style="margin-top:0;">Greetings from The New Indian Express Group!</p>';
				$bodyText .= '<p>Dear '.$userDetails['name'].' </p>';
				if($paymentStatus==1){
					$bodyText .= '<p style="color:green;"><b>ORDER ID : '.$userDetails['orderId'].'</b></p>';	
					$bodyText .= '<p>Your Registration was successfully Done.</p>';	
					$bodyText .= '<p>Please bring your registration proof with payment detail on the event day.</p>';	
					$bodyText .= '<p>Any query Please contact : Mobile No and email id </p>';	
				}
				if($paymentStatus==2 || $paymentStatus==3){
					$bodyText .= '<p style="color:green;"><b>ORDER ID : '.$userDetails['orderId'].'</b></p>';	
					$bodyText .= '<p>Your Registration was unsuccessfully.</p>';	
					$bodyText .= '<p>Any query Please contact : Mobile No and email id </p>';	
				}
				$bodyText .= '<p>Thank you and see you soon!</p></div></body></html>';

				$mail =  new PHPMailer;
				$mail->isSMTP();
				$mail->Mailer = "smtp";
				$mail->setFrom('pandiaraj.m@newindianexpress.com', 'pandiaraj');
				$mail->Username = 'krishraja007@gmail.com';
				$mail->Password = 'Krishraja@555';
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 465;
				$mail->SMTPDebug = 2;
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = 'ssl';
				
				$userDetails['email'];
				
				$mail->addAddress($userDetails['email']);

				$mail->isHTML(true);
				$mail->Subject = 'Tenth Edition of TNIE\'s ThinkEdu Conclave Registration';
				$mail->Body = $bodyText;
				$mail->send(); */
			}else{
				$type="malware";
			}
			
		}else{
			$type="malware";
		}
	}else{
		$type="malware";
	}
}else{
	$type="malware";
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
<title>ThinkEdu Conclave 2022 | Response | Register</title>

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
</head>
<style>
	body{background-repeat: no-repeat: background-size: cover;}
	#home { margin-top: 10px; }
	
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
			<?php if($paymentStatus==1): ?>
			<h4>YOUR REGISTRATION WAS SUCCESSFULLY DONE</h4>
			<?php elseif($paymentStatus==2 || $paymentStatus==3): ?>
			<h4>YOUR REGISTRATION WAS UNSUCCESSFULLY </h4>
			<?php else: ?>
			<h4>RESPONSE</h4>
			<?php endif; ?>
			
			<?php if($type=='ok'): ?>
			<div class="col-md-8 col-md-offset-2">
			<h3>Dear <?php echo $userDetails['name']; ?>,</h3>
			<?php if($paymentStatus==1): ?>
			<p style="color:green;"><b>ORDER ID : <?php echo $userDetails['orderId']; ?></b></p>
			<p>Thank you for your successful registration. we will send the further details in Email shortly</p>
			<p>Please bring your registration proof with payment detail on the event day.</p>
			<p>Any query Please contact : +91 44 23457518 (between 10 am and 6 pm) and tnie.thinkeduconclave@gmail.com </p>
			<?php endif; ?>
			<?php if($paymentStatus==2 || $paymentStatus==3): ?>
			<!--<p style="color:green;"><b>ORDER ID : <?php echo $userDetails['orderId']; ?></b></p>-->
			<p>Your Registration was unsuccessfully.</p>
			<p>Any query Please contact : +91 44 23457518 (between 10 am and 6 pm) and tnie.thinkeduconclave@gmail.com </p>
			<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php if($type=='malware'): ?>
			<h3 style="color:red;" class="text-center">MALWARE DETECTED. PLEASE CONTACT ADMIN</h3>
			<?php endif; ?>
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