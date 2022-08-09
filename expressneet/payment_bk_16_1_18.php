<?php
ini_set('display_errors',1);
include('PHP_Kit/CUSTOM_CHECKOUT_FORM_KIT/Crypto.php');
require_once 'dbconfig.php';
$working_key = '805AB0CF6464793807ACE9907F8A6596';
$response = decrypt($_POST['encResp'],$working_key);
function member_registation($res){
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => 'https://onlineecas.com/OnlineApplication/MemRegApi.aspx',
		CURLOPT_POST => 1,
		CURLOPT_POSTFIELDS => $res
	));
	$response = curl_exec($curl);
	curl_close($curl);
	return $response;
}
parse_str($response);
$currentdate = date('Y-m-d h:i:s');
$action ='';
$orderdetails = $connection ->query("SELECT user_id,member_registation_status FROM order_details WHERE orderid='".$order_id."'");
$user =  $orderdetails->fetch_assoc();
$userid = @$user['user_id'];
if($amount != '350.0'){ $order_status='failure'; }
if(@$order_status=='Success' && @$order_id!=''){
	if($userid!=''){
		$action ='SUCCESS';
		$userdetails = $connection ->query("SELECT testcenter,studentname,dob,gender,mobilenumber,email,address,board,fathersname,mothersname,batch,dateofexam,city,pincode ,created_on FROM userdetails WHERE userid='".$userid."'");
		$userdata = $userdetails->fetch_assoc();
		$updateorderdetails = "UPDATE order_details SET tracking_id='".$tracking_id."', bank_ref_no='".$bank_ref_no."', raw_content='".$response."', status='SUCCESS', modified_on='".$currentdate."' WHERE orderid='".$order_id."'";
		if($connection ->query($updateorderdetails)=== TRUE){
			$action = 'SUCCESS';
			if($user['member_registation_status']==0){
			
				if($userdata['testcenter']=='Chennai'){ $center =1;	}elseif($userdata['testcenter']=='Coimbatore'){	$center =2;	}elseif($userdata['testcenter']=='Trichy'){	$center =3;	}else{	$center =1;	}
				if($userdata['gender']=='male'){ $gen ='M';	}else{	$gen ='F'; }
				if($userdata['batch']=='9.30am'){ $btch =21; }else{ $btch =22; }
				if($userdata['dateofexam']=='Sat (20-01-2018)'){ $doe =7; }elseif($userdata['dateofexam']=='Sun (21-01-2018)'){	$doe =8; }elseif($userdata['dateofexam']=='Sat (27-01-2018)'){	$doe =5; }elseif($userdata['dateofexam']=='Sun (28-01-2018)'){	$doe =6; }elseif($userdata['dateofexam']=='Sat (03-02-2018)'){ $doe =9; }elseif($userdata['dateofexam']=='Sun (04-02-2018)'){ $doe =10;	}
				$Dobformat=date_create($userdata['dob']);
				$dateofjoin=date_create($userdata['created_on']);
				
				$postdata = ['CLIENTID'=>1839, 'FLD1'=>2, 'FLD2' =>$center, 'FLD3'=>1, 'FLD4'=> date_format($Dobformat,"d-M-Y H:i:s"), 'FLD6'=>'OnlinePay', 'FLD9'=>$userdata['studentname'], 'FLD10'=>$userdata['fathersname'], 'FLD11'=>$userdata['mothersname'], 'FLD12'=>$gen, 'FLD13'=>date_format($Dobformat,"d-M-Y"), 'FLD14'=> $userdata['address'], 'FLD16'=>$userdata['mobilenumber'], 'FLD18'=>$userdata['email'], 'FLD19'=>$doe , 'FLD23'=>$btch, 'FLD40'=>$userdata['city'], 'FLD41'=>$userdata['pincode'], 'FLD42' =>'Tamilnadu' ];
				$result = member_registation($postdata);
				if (strpos($result, 'Registration Successful') !== false) {
					$connection ->query("UPDATE order_details SET member_registation_status='1'  WHERE orderid='".$order_id."'");
				}
			}
		}else{
			$action = 'SUCCESS-DB-ERROR';
		}
		
	
	}else{
		$action ='INVALID-ORDERID';
	}
}else{
	if($userid!=''){
		$action ='FAILURE';
		$updateorderdetails = "UPDATE order_details SET tracking_id='".$tracking_id."', bank_ref_no='".$bank_ref_no."', raw_content='".$response."', status='FAILURE', modified_on='".$currentdate."' WHERE orderid='".$order_id."'";
		if($connection ->query($updateorderdetails)=== TRUE){
			$action = 'FAILURE';
		}else{
			$action = 'FAILURE-DB-ERROR';
		}
	}else{
		$action ='INVALID-ORDERID';
	}

}
include('finalresponse.php');
?>