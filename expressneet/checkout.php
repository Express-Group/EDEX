<?php
require_once 'dbconfig.php';
if ($connection->connect_error) {
   header('Location: apply.php?type=error&status=1'); 
} 
 if(isset($_POST['submitdeatils'])){
	$testcenter = $_POST['test_center'];
	$studentname = $_POST['studentnane'];
	$fathernane = $_POST['fathernane'];
	$mothername = $_POST['mothername'];
	$studentdob = $_POST['studentdob'];
	$gender = $_POST['gender'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$board = $_POST['board'];
	$schoolname = $_POST['schoolname'];
	$batch = $_POST['batch'];
	$express_day = $_POST['express_day'];
	if($testcenter!='' && $studentname!='' && $studentdob!='' && $gender!='' && $mobile!='' && $email!='' && $address!='' && $board!='' && $schoolname!='' && $fathernane!='' && $mothername!='' && $pincode!='' && $city!='' && $batch!='' && $express_day!=''){
		$insertstaudentdetails = "INSERT INTO userdetails (testcenter, studentname, dob, gender, mobilenumber, email, address, board, schoolname, status, fathersname, mothersname, batch, dateofexam, city, pincode) VALUES ('".$testcenter."', '".$studentname."', '".$studentdob."', '".$gender."', '".$mobile."', '".$email."', '".$address."', '".$board."', '".$schoolname."',1, '".$fathernane."', '".$mothername."', '".$batch."', '".$express_day."',  '".$city."', '".$pincode."')";
		if($connection->query($insertstaudentdetails)=== TRUE){
			$userid = $connection->insert_id;
			//$transactionid = date('Ymdhis');
			$transactionid = rand(100000,10000000000000);
			$updateordertable = "INSERT INTO order_details (user_id, transaction_id) VALUES ('".$userid."','".$transactionid."')";
			$order = $connection->query($updateordertable);
			$orderid = $connection->insert_id;
			$merchantid=160135;
			require 'order.php';

			
		}else{
			header('Location: apply.php?type=error&status=1');
		}
	
	}else{
		header('Location: apply.php?type=error&status=2');
	}


}else{
	header('Location: apply.php?type=error&status=1');
} 
?>