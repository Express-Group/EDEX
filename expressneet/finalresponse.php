<!DOCTYPE html>

<html>
<head>
<title>Payment Response - edexlive</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|PT+Sans+Narrow" rel="stylesheet">
<link rel="shortcut icon" href="http://images.edexlive.com/images/FrontEnd/images/favicon.ico" type="image/x-icon" />
<style>
.col-md-6{width:50%;float:left;padding:10px;margin: 0 25% 0;}
.row{width:100%;float:left;}
.select-control{color: #000;width: 100%;padding: 4px;border: none;border-radius: 5px;}
.user-register-heading{font-size: 25px;font-weight: bold; color: #ffffff;border: 1px solid;padding: 6px;box-shadow: 1px 1px 1px 1px #d2cdcdd1;}
.button{text-align: center;color: #fff;background: #6aaebf;border: none;padding: 9px;border-radius: 5px;float: left;}
.error-field{font-size: 11px; color: #ff9800;}
.type-success{text-align: left;color: #8BC34A;font-weight: bold;text-shadow: 1px 1px 1px #000;}
.type-error{text-align: left; color: #F44336; font-weight: bold; text-shadow: 1px 1px 1px #ffffff6b;}
.payOption{float:left;color: #a2a2a2 !important;}
td{color: #373737;}
@media screen and (max-width: 750px){
	.mob-pad{padding:5px;}
}
</style>
<?php if($action =='SUCCESS'): ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){
	if(f.fbq)return;n=f.fbq=function(){
		n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)
	};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init','444608765724733');
	fbq('track','PageView');
	fbq('track', 'Purchase', {value: '100.0', currency: 'INR'});
</script>
<noscript>
<img height="1" width="1" src="https://www.facebook.com/tr?id=444608765724733&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<?php endif; ?>
</head>
<body id="top">
<?php include('header.php'); ?>
<div id="dynamictab" class="wrapper bgded edex-bg hoc ">
  <div class="split clear">
    <section style="width:100%;background-color:transparent;" class="mob-pad"> 
	<?php if($action =='SUCCESS'): ?>
		<h3 style="text-align: center;color: #019747;background: #fff;padding: 6px;font-weight: bold;border-radius: 6px;text-transform: capitalize;"><span>Thank you. Your payment was successfull. <i class="fa fa-check" aria-hidden="true"></i></span></h3>
		<table>
			<tr><th colspan="2" style="text-align:center;">Student Details</th></tr>
			<tr><td>Student Name</td><td><?php echo  $userdata['studentname']; ?></td></tr>
			<tr><td>Father's Name</td><td><?php echo  $userdata['fathersname']; ?></td></tr>
			<tr><td>Mother's Name</td><td><?php echo  $userdata['mothersname']; ?></td></tr>
			<tr><td>Batch</td><td><?php echo  $userdata['batch']; ?></td></tr>
			<tr><td>Date of Exam</td><td><?php echo  $userdata['dateofexam']; ?></td></tr>
			<tr><td>Mobile Number</td><td><?php echo  $userdata['mobilenumber']; ?></td></tr>
			<tr><td>Email Address</td><td><?php echo  $userdata['email']; ?></td></tr>
			<tr><th colspan="2" style="text-align:center;">Payment Details</th></tr>
			<tr><td>Order Id</td><td><?php echo  $order_id; ?></td></tr>
			<tr><td>Amount</td><td><?php echo  $amount; ?></td></tr>
			<tr><td>Currency</td><td><?php echo  $currency; ?></td></tr>
			<tr><td>Tracking Id</td><td><?php echo  $tracking_id; ?></td></tr>
			<tr><td>Bank Reference No</td><td><?php echo  $bank_ref_no; ?></td></tr>
			<tr><td>Payment Status</td><td><?php echo  $order_status; ?> &nbsp;&nbsp;&nbsp;<span style="color:green;"><i class="fa fa-check" aria-hidden="true"></i></span></td></tr>
			<tr><th colspan="2" style="text-align:center;">Billing Details</th></tr>
			<tr><td>Billing Name</td><td><?php echo  $delivery_name; ?></td></tr>
			<tr><td>Billing Address</td><td><?php echo  $delivery_address; ?></td></tr>
			<tr><td>Billing City</td><td><?php echo  $delivery_city; ?></td></tr>
			<tr><td>Billing State</td><td><?php echo  $delivery_state; ?></td></tr>
			<tr><td>Billing Zipcode</td><td><?php echo  $delivery_zip; ?></td></tr>
			<tr><td>Billing Country</td><td><?php echo  $delivery_country; ?></td></tr>
			<tr><td>Mobile Number</td><td><?php echo  $delivery_tel; ?></td></tr>
		</table>
		<div style="float:right;width:100%;margin-top:2%;"><button style="float: right;background: #28a78a;border: none;color: #f7f7f7;padding: 10px;   border-radius: 8px;cursor:pointer;" onclick="printpage();"><span><i class="fa fa-print" aria-hidden="true"></i></span> Print</button><button style="float: right;background: #28a78a;border: none;color: #f7f7f7;padding: 10px;   border-radius: 8px;margin-right: 1%;cursor:pointer;" onclick="window.location.href='index.php';">Homepage</button></div>
		<script>
			function printpage(){
				  print()
			}
		</script>
	<?php endif; ?>
	<?php if($action =='FAILURE'): ?>
		<h3 style="text-align: center;color: red;background: #fff;padding: 6px;font-weight: bold;border-radius: 6px;text-transform: capitalize;"><span> Your payment was unsuccessfull. <i class="fa fa-times" aria-hidden="true"></i></span></h3>
		<table>
			<tr><th colspan="2" style="text-align:center;">Payment Details</th></tr>
			<tr><td>Payment Status</td><td><?php echo  $order_status; ?> &nbsp;&nbsp;&nbsp;<span style="color:red;"><i class="fa fa-times" aria-hidden="true"></i></span></td></tr>
			<tr><td>Failure Message</td><td><?php echo  $failure_message; ?></td></tr>
			<tr><td>Order Id</td><td><?php echo  $order_id; ?></td></tr>
			<tr><td>Amount</td><td><?php echo  $amount; ?></td></tr>
			<tr><td>Currency</td><td><?php echo  $currency; ?></td></tr>
			<tr><td>Tracking Id</td><td><?php echo  $tracking_id; ?></td></tr>
			<tr><td>Bank Reference No</td><td><?php echo  $bank_ref_no; ?></td></tr>
		</table>
		<div style="float:right;width:100%;margin-top:2%;"><button style="float: right;background: #28a78a;border: none;color: #f7f7f7;padding: 10px;   border-radius: 8px;cursor:pointer;" onclick="window.location.href='index.php';">Homepage</button></div>
	<?php endif; ?>
	<?php if($action =='INVALID-ORDERID'): ?>
		<table>
			<tr><th colspan="2" style="text-align:center;">Payment Details</th></tr>
			<tr><td>Payment Status</td><td><?php echo 'Invalid order id' ?> &nbsp;&nbsp;&nbsp;<span style="color:red;"><i class="fa fa-times" aria-hidden="true"></i></span></td></tr>
			<tr><td>Failure Message</td><td><?php echo  'Invalid order id'; ?></td></tr>
		</table>
		<div style="float:right;width:100%;margin-top:2%;"><button style="float: right;background: #28a78a;border: none;color: #f7f7f7;padding: 10px;   border-radius: 8px;cursor:pointer;" onclick="window.location.href='index.php';">Homepage</button></div>
	<?php endif; ?>
	<?php if($action =='ABORTED'): ?>
		<h3 style="width:100%;float:left;text-align:center;color:red;">The Order has been Aborted</h3>
		<table>
			<tr><th colspan="2" style="text-align:center;">Payment Details</th></tr>
			<tr><td>Payment Status</td><td><?php echo $order_status; ?> &nbsp;&nbsp;&nbsp;<span style="color:red;"><i class="fa fa-times" aria-hidden="true"></i></span></td></tr>
			<tr><td>Failure Message</td><td><?php echo $failure_message; ?></td></tr>
			<tr><td>Status Message</td><td><?php echo $status_message; ?></td></tr>
			<tr><td>Order Id</td><td><?php echo  $order_id; ?></td></tr>
			<tr><td>Tracking Id</td><td><?php echo  $tracking_id; ?></td></tr>
		</table>
		<div style="float:right;width:100%;margin-top:2%;"><button style="float: right;background: #28a78a;border: none;color: #f7f7f7;padding: 10px;   border-radius: 8px;cursor:pointer;" onclick="window.location.href='index.php';">Homepage</button></div>
	<?php endif; ?>
</section>
  </div>
</div>


<?php include('footer.php'); ?>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.backtotop.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html> 