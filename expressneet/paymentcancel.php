<?php
include('PHP_Kit/CUSTOM_CHECKOUT_FORM_KIT/Crypto.php');
require_once 'dbconfig.php';
$working_key = '805AB0CF6464793807ACE9907F8A6596';
$response = decrypt($_POST['encResp'],$working_key);
parse_str($response);
$action = '';
if($order_id!=''){
	$updateorderdetails = "UPDATE order_details SET tracking_id='".$tracking_id."', bank_ref_no='".$bank_ref_no."', raw_content='".$response."', status='ABORTED', modified_on='".$currentdate."' WHERE orderid='".$order_id."'";
	if($connection ->query($updateorderdetails)=== TRUE){
		$action = 'ABORTED';
	}else{
		$action = 'ABORTED-DB-ERROR';
	}
}else{
	$action ='INVALID-ORDERID';
}
include('finalresponse.php');
?> 