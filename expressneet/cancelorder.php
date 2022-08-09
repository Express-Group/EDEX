<?php
require_once 'dbconfig.php';
$orderid = @$_POST['id'];
if($orderid!=''){
	$order_id = base64_decode($orderid);
	$getuserid = "SELECT user_id FROM  order_details WHERE orderid='".$order_id."'";
	$userdetails = $connection->query($getuserid);
	$details = $userdetails->fetch_assoc();
	$userid = @$details['user_id'];
	if($userid!=''){
		$connection->query("UPDATE order_details SET status='CANCELLED' WHERE orderid='".$order_id."'");
		//$connection->query("DELETE FROM userdetails WHERE userid='".$userid."'");
		echo 1;
	}else{
		echo 0;
	}


}else{

	echo 0;
}

?> 