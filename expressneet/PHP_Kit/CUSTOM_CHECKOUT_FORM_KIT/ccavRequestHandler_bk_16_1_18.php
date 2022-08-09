<html>
<head>
<script src="http://www.edexlive.com/expressneet/layout/scripts/jquery.min.js"></script> 
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php include('dbconfig.php')?>
<?php 
	
	error_reporting(1);
	if($_POST['amount']!='350.00'){
		header('Location: http://www.edexlive.com/expressneet/apply.php?type=malware&status=1');
	}
	$res = $connection->query("SELECT orderid FROM order_details WHERE transaction_id='".$_POST['tid']."'");
	$res = @$res->fetch_assoc();
	$res1 = $connection->query("SELECT transaction_id FROM order_details WHERE orderid='".$_POST['order_id']."'");
	$res1 = @$res1->fetch_assoc();
	if($_POST['order_id']!=@$res['orderid']){
		header('Location: http://www.edexlive.com/expressneet/apply.php?type=malware&status=1');
	}
	if($_POST['tid']!=@$res1['transaction_id']){
		header('Location: http://www.edexlive.com/expressneet/apply.php?type=malware&status=1');
	}
	$merchant_data='160135';
	$merchant_data1='160135';
	$working_key='805AB0CF6464793807ACE9907F8A6596';//Shared by CCAVENUES
	$access_code='AVIU75EL12BT28UITB';//Shared by CCAVENUES

	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.urlencode($value).'&';
		if($key=='amount'){
			$merchant_data1.=$key.'='.urlencode('350.00').'&';
		}else{
			$merchant_data1.=$key.'='.urlencode($value).'&';
		}
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
	$encrypted_data1=encrypt($merchant_data1,$working_key); // Method for encrypting the data.

?> 
<!--<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> -->
<form method="post" name="redirect" id="redirect" onsubmit="validateform(event);" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>//document.redirect.submit();</script>
<script>
$('#redirect').submit();
	function validateform(e){
	var encRequest = $('input[name="encRequest"]').val();
		var verify = "<?php echo $encrypted_data1 ?>";
		if(encRequest==verify && encRequest!='ab883d0d07be8225c05e9155dd4902a8'){
			$(this).submit();
		}else{
			e.preventDefault();
			window.location.href = 'http://www.edexlive.com/expressneet/apply.php?type=malware&status=1';
		}
	}
	
</script>
</body>
</html>

