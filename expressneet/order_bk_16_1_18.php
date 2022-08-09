<!DOCTYPE html>

<html>
<head>
<title>Apply Now - edexlive</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|PT+Sans+Narrow" rel="stylesheet">
<link rel="shortcut icon" href="http://images.edexlive.com/images/FrontEnd/images/favicon.ico" type="image/x-icon" />
<style>
.col-md-6{width:50%;float:left;padding:10px;margin: 0 25% 0;}
.row{width:100%;float:left;}
.select-control{color: #000;width: 100%;padding: 4px;border: none;border-radius: 5px;}
.user-register-heading{font-size: 25px;font-weight: bold;color: #f36b23;padding: 6px;}
.button{text-align: center;color: #fff;background: #6aaebf;border: none;padding: 9px;border-radius: 5px;float: left;cursor:pointer;}
.error-field{font-size: 11px; color: #ff9800;}
.type-success{text-align: left;color: #8BC34A;font-weight: bold;text-shadow: 1px 1px 1px #000;}
.type-error{text-align: left; color: #F44336; font-weight: bold; text-shadow: 1px 1px 1px #ffffff6b;}
.payOption{float:left;color: #a2a2a2 !important;}
td{color: #373737;}
@media screen and (max-width: 750px){
	.mob-pad{padding:5px;}
}
</style>
</head>
<body id="top">
<?php include('header.php'); ?>
<div id="dynamictab" class="wrapper bgded edex-bg hoc " style="background-color: #ececec;">
  <div class="split clear">
    <section style="width:100%;background-color:transparent;" class="mob-pad"> 
	<h1 style="text-align:center;"><span class="user-register-heading">Review & Place order</span></h1>
	  <div class="row">
		<form method="post" action="PHP_Kit/CUSTOM_CHECKOUT_FORM_KIT/ccavRequestHandler.php" id="checkout">
		<input type="hidden" name="tid" id="tid" value="<?php echo $transactionid; ?>">
		<input type="hidden" name="merchant_id" value="<?php echo $merchantid; ?>">
		<input type="hidden" name="order_id" value="<?php echo $orderid; ?>">
		<input type="hidden" name="working_key" value="805AB0CF6464793807ACE9907F8A6596">
		<input type="hidden" name="access_code" value="AVIU75EL12BT28UITB">
		<input type="hidden" name="currency" value="INR">
		<input type="hidden" name="amount" value="350.00">
		<input type="hidden" name="redirect_url" value="http://www.edexlive.com/expressneet/payment.php">
		<input type="hidden" name="cancel_url" value="http://www.edexlive.com/expressneet/paymentcancel.php">
		<input type="hidden" name="language" value="EN">
		<input type="hidden" name="delivery_name" value="<?php echo $studentname; ?>">
		<input type="hidden" name="delivery_address" value="<?php echo $address; ?>">
		<input type="hidden" name="delivery_tel" value="<?php echo $mobile; ?>">
		<input type="hidden" name="delivery_country" value="India">
		<input type="hidden" name="delivery_state" value="Tamilnadu">
		<input type="hidden" name="delivery_zip" value="<?php echo $pincode; ?>">
		<input type="hidden" name="delivery_city" value="<?php echo $city; ?>">
		<table>
			<tr><th colspan="2" style="text-align:center;">Student Details</th></tr>
			<tr><td>Student Name</td><td><?php echo  $studentname; ?></td></tr>
			<tr><td>Father's Name</td><td><?php echo  $fathernane; ?></td></tr>
			<tr><td>Mother's Name</td><td><?php echo  $mothername; ?></td></tr>
			<tr><td>Date of birth</td><td><?php echo  $studentdob; ?></td></tr>
			<tr><td>Gender</td><td><?php echo  $gender; ?></td></tr>
			<tr><td>Mobile Number</td><td><?php echo  $mobile; ?></td></tr>
			<tr><td>Email Address</td><td><?php echo  $email; ?></td></tr>
			<tr><td>Batch/Timeslot</td><td><?php echo  $batch; ?></td></tr>
			<tr><td>Date for Exam</td><td><?php echo  $express_day; ?></td></tr>
			<tr><td>Address</td><td><?php echo  $address; ?></td></tr>
			<tr><td>City</td><td><?php echo  $city; ?></td></tr>
			<tr><td>Pincode</td><td><?php echo  $pincode; ?></td></tr>
			<tr><td>Board</td><td><?php echo  $board; ?></td></tr>
			<tr><td>School Name</td><td><?php echo  $schoolname; ?></td></tr>
			<tr><th colspan="2" style="text-align:center;">Payment Details</th></tr>
			<tr><td>Order Id</td><td><?php echo  $orderid; ?></td></tr>
			<tr><td>Amount</td><td><?php echo '350.00' ?></td></tr>
			<tr>
			<td>Payment Option <sup style="color:red;">*</sup></td>
			<td>
				<select name="payment_option" class="select-control payOption" style="border: 1px solid #373737;">
					<option value="">Please select any one payment Method</option>
					<option value="OPTCRDC">Credit Card</option>
					<option value="OPTDBCRD">Debit Card</option>
					<option value="OPTNBK">Net Banking</option>
					<!--<option value="OPTCASHC">Cash Card</option>
					<option value="OPTMOBP">Mobile Payments</option>
					<option value="OPTEMI">EMI</option>
					<option value="OPTWLT">Wallet</option>-->
				</select>
				<p class="error-field"></p>
			</td>
			</tr>
			<tr><td colspan="2" style="text-align:right;"><input type="submit" style="float: right;" name="submitdeatils" value="Proceed Checkout" class="button"><input type="button" onclick="removeorder('<?php echo  base64_encode($orderid); ?>');" style="float: right;margin-right: 1%;" name="cancelorder" value="Cancel" class="button"></td></tr>
		</table>
		</form>
	  </div>


	  <!-- http://182.18.160.181/ecas/userlogin.aspx?clientid=183900 <iframe src="http://182.18.160.186/OnlineApplication/Default.aspx?ClientId=1839&ttl=Online Registration&demo=0&mod=1&act=reg" style="width:100%;float:left;border:none;height:500px !important;" frameborder="0"></iframe>-->
</section>
  </div>
</div>


<?php include('footer.php'); ?>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.backtotop.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script>
 <script language="javascript" type="text/javascript" src="PHP_Kit/CUSTOM_CHECKOUT_FORM_KIT/json.js"></script>
<script>
$(function(){
  	  var jsonData;
  	  var access_code="AVIU75EL12BT28UITB"; // shared by CCAVENUE 
	  var amount="350.00";
  	  var currency="INR";
  	  
      $.ajax({
           url:'https://secure.ccavenue.com/transaction/transaction.do?command=getJsonData&access_code='+access_code+'&currency='+currency+'&amount='+amount,
           dataType: 'jsonp',
           jsonp: false,
           jsonpCallback: 'processData',
           success: function (data) { 
                 jsonData = data;
                 // processData method for reference
                 processData(data); 
		 // get Promotion details
                 $.each(jsonData, function(index,value) {
			if(value.Promotions != undefined  && value.Promotions !=null){  
				var promotionsArray = $.parseJSON(value.Promotions);
		               	$.each(promotionsArray, function() {
					console.log(this['promoId'] +" "+this['promoCardName']);	
					var	promotions=	"<option value="+this['promoId']+">"
					+this['promoName']+" - "+this['promoPayOptTypeDesc']+"-"+this['promoCardName']+" - "+currency+" "+this['discountValue']+"  "+this['promoType']+"</option>";
					$("#promo_code").find("option:last").after(promotions);
				});
			}
		});
           },
           error: function(xhr, textStatus, errorThrown) {
               alert('An error occurred! ' + ( errorThrown ? errorThrown :xhr.status ));
               //console.log("Error occured");
           }
   		});
		
		function processData(data){
         var paymentOptions = [];
         var creditCards = [];
         var debitCards = [];
         var netBanks = [];
         var cashCards = [];
         var mobilePayments=[];
         $.each(data, function() {
         	 // this.error shows if any error   	
             console.log(this.error);
              paymentOptions.push(this.payOpt);
              switch(this.payOpt){
                case 'OPTCRDC':
                	var jsonData = this.OPTCRDC;
                 	var obj = $.parseJSON(jsonData);
                 	$.each(obj, function() {
                 		creditCards.push(this['cardName']);
                	});
                break;
                case 'OPTDBCRD':
                	var jsonData = this.OPTDBCRD;
                 	var obj = $.parseJSON(jsonData);
                 	$.each(obj, function() {
                 		debitCards.push(this['cardName']);
                	});
                break;
              	case 'OPTNBK':
	              	var jsonData = this.OPTNBK;
	                var obj = $.parseJSON(jsonData);
	                $.each(obj, function() {
	                 	netBanks.push(this['cardName']);
	                });
                break;
                
                case 'OPTCASHC':
                  var jsonData = this.OPTCASHC;
                  var obj =  $.parseJSON(jsonData);
                  $.each(obj, function() {
                  	cashCards.push(this['cardName']);
                  });
                 break;
                   
                  case 'OPTMOBP':
                  var jsonData = this.OPTMOBP;
                  var obj =  $.parseJSON(jsonData);
                  $.each(obj, function() {
                  	mobilePayments.push(this['cardName']);
                  });
              }
              
            });
           
           //console.log(creditCards);
          // console.log(debitCards);
          // console.log(netBanks);
          // console.log(cashCards);
         //  console.log(mobilePayments);
            
      }
   		
   		
  });
  $('#checkout').on('submit',function(e){
	var atLeastOneIsChecked = $('.payOption').val();
	if(atLeastOneIsChecked !=''){
		$('.payOption').next('.error-field').html('');
		$(this).submit();
	}else{
		$('.payOption').next('.error-field').html('Please Select any one payment option');
		e.preventDefault();
	}
  });
  
  function removeorder($orderid){
		$.ajax({
			type:'post',
			cache:false,
			url:'http://www.edexlive.com/expressneet/cancelorder.php',
			data:{'id':$orderid},
			success:function(result){
				if(result == 1){
					window.location.href="index.php";
				}else{
					alert('something went wrong please try again');
				}
			},
			error:function(err,errcode){
				alert('something went wrong');
			}
		})
  }
</script>

</body>
</html> 