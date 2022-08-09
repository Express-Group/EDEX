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
.col-md-6{width:50%;float:left;padding:10px;}
@media screen and (max-width: 750px){
	.col-md-6{width:100%;}
	.button{margin-bottom:2%;}
	input[type="reset"]{ margin-left:3%;}
	.user-register-heading{border: none !important; box-shadow: none !important;}
}
.row{width:100%;float:left;}
.select-control{color: #000;width: 100%;padding: 4px;border: none;border-radius: 5px;}
.user-register-heading{font-size: 25px;font-weight: bold; color: #ffffff;border: 1px solid;padding: 6px;box-shadow: 1px 1px 1px 1px #d2cdcdd1;}
.button{text-align: center;color: #fff;background: #6aaebf;border: none;padding: 9px;border-radius: 5px;float: left;cursor:pointer;}
.error-field{font-size: 11px; color: #ff9800;}
.type-success{text-align: left;color: #8BC34A;font-weight: bold;text-shadow: 1px 1px 1px #000;}
.type-error{text-align: left; color: #F44336; font-weight: bold; text-shadow: 1px 1px 1px #ffffff6b;}
</style>
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
</script>
<noscript>
<img height="1" width="1" src="https://www.facebook.com/tr?id=444608765724733&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</head>
<body id="top">
<?php include('header.php'); ?>
<div id="dynamictab" class="wrapper bgded edex-bg hoc ">
  <div class="split clear">
    <section style="width:100%;background-color:transparent;"> 
	<h1 style="text-align:center;"><span class="user-register-heading">Online Application Form</span></h1>
	  <div class="row">
		<?php if(isset($_GET['type']) && $_GET['type']=='error'){ echo '<h4 class="type-error">Something Went wrong.please try again</h4>';} 
		echo '<script>history.pushState("", "","apply.php");</script>';
		?>
		<?php if(isset($_GET['type']) && $_GET['type']=='malware'){ echo '<h4 class="type-error">Malicious data affected.please try again.</h4>';} 
		echo '<script>history.pushState("", "","apply.php");</script>';
		?>
		<?php if(isset($_GET['type']) && $_GET['type']=='success'){ echo '<h4 class="type-success">Details submitted successfully</h4>';}
		//echo '<script>history.pushState("", "","apply.php");</script>';
		?>
		<form method="post" action="checkout.php" id="user_registation"> 
		<div class="col-md-6">
			<div class="form-element">
				<label>Student Name:</label>
				<input type="text" class="select-control" id="studentnane" name="studentnane" placeholder="Enter student name" autocomplete="off">
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Father's Name:</label>
				<input type="text" class="select-control" id="fathernane" name="fathernane" placeholder="Enter father's name" autocomplete="off">
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Mother's Name:</label>
				<input type="text" class="select-control" id="mothername" name="mothername" placeholder="Enter mother's name" autocomplete="off">
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Date of Birth:</label>
				<input type="date" class="select-control" id="studentdob" name="studentdob" placeholder="Date of birth" autocomplete="off">
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Gender:</label>
				<select class="select-control" id="gender" name="gender">
					<option value="">Select Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Test Center:</label>
				<select class="select-control" id="test_center" name="test_center" >
					<option value="">Select Test Centre</option>
					<!--<option value="Chennai">Chennai</option>-->
					<option value="Coimbatore">Coimbatore</option>
					<!-- <option value="Trichy">Trichy</option>  -->
				</select>
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Day for Express NEET:</label>
				<select class="select-control" id="express_day" name="express_day">
					<option value="">Select Date</option>
					
				</select>
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Batch/Timeslot:</label>
				<select class="select-control" id="batch" name="batch">
					<option value="">Select Batch</option>
					<option value="9.30am">9.30am</option>
					<option value="2.00 pm">2.00 pm</option>
				</select>
				<p class="error-field"></p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-element">
				<label>Mobile:</label>
				<input type="number" class="select-control" id="mobile" name="mobile" placeholder="Enter mobile number" autocomplete="off">
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Email:</label>
				<input type="email" class="select-control" id="email" name="email" placeholder="Enter email address" autocomplete="off">
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Enter Address:</label>
				<input type="text" class="select-control" id="address" name="address" placeholder="Address (House number,Street Name)" autocomplete="off">
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Enter City:</label>
				<input type="text" class="select-control" id="city" name="city" placeholder="Enter City" autocomplete="off">
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Pincode:</label>
				<input type="number" class="select-control" id="pincode" name="pincode" placeholder="Enter Pincode" autocomplete="off">
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>Select Board:</label>
				<select class="select-control" id="board" name="board">
					<option value="">Select Board</option>
					<option value="State Board">State Board</option>
					<option value="CBSE">CBSE</option>
					<option value="ICSE">ICSE</option>
					<option value="Others">Others</option>
				</select>
				<p class="error-field"></p>
			</div>
			<div class="form-element">
				<label>School Name:</label>
				<input type="text" class="select-control" id="schoolname" name="schoolname" placeholder="Enter schoolname" autocomplete="off">
				<p class="error-field"></p>
			</div>
		</div>
		<div class="form-element" style="float: left;color: #FF5722;"><p> * You assume the responsibility for your registration, and no refunds will be issued.</p></div>
		<div class="form-element" style="float: left;width: 100%;text-align: center !important;">
			<input type="submit" name="submitdeatils" value="Register" class="button">
			<input type="reset" name="reset" value="Reset" class="button" style="margin-left:1%;">
		</div>
		</form>
	  </div>
</section>
  </div>
</div>


<?php include('footer.php'); ?>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.backtotop.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script type="text/javascript">
    //document.getElementById('dynamictabstrp').scrollIntoView(true);
	$('html,body').animate({
		scrollTop: $('#dynamictab').offset().top
	}, 1000);
	$(document).ready(function(){
		$('#user_registation').on('submit',function(e){
		var error = false;
		//var name_regex = /^[a-zA-Z]+$/;
		var name_regex = /^([A-Za-z']+( [A-Za-z']+)*){3,30}$/;
		var ph = /^[0-9-+]+$/;
		var em = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		var testcenter = $('#test_center');
		var studentname = $('#studentnane');
		var fathernane = $('#fathernane');
		var mothername = $('#mothername');
		var dob = $('#studentdob');
		var gender = $('#gender');
		var express_day = $('#express_day');
		var batch = $('#batch');
		var mobile = $('#mobile');
		var pincode = $('#pincode');
		var email = $('#email');
		var address = $('#address');
		var city = $('#city');
		var board = $('#board');
		var schoolname = $('#schoolname');
		if(testcenter.val()=='' || testcenter.val()==undefined){
			error=true;
			testcenter.next('.error-field').html('Please Select Test Center');
		}else{
			testcenter.next('.error-field').html('');
		}
		if(studentname.val()=='' || studentname.val()==undefined || !studentname.val().match(name_regex)){
			error=true;
			studentname.next('.error-field').html('Please Enter the valid name');
		}else{
			studentname.next('.error-field').html('');
		}
		if(fathernane.val()=='' || fathernane.val()==undefined || !fathernane.val().match(name_regex)){
			error=true;
			fathernane.next('.error-field').html('Please Enter the valid name');
		}else{
			fathernane.next('.error-field').html('');
		}
		if(mothername.val()=='' || mothername.val()==undefined || !mothername.val().match(name_regex)){
			error=true;
			mothername.next('.error-field').html('Please Enter the valid name');
		}else{
			mothername.next('.error-field').html('');
		}
		if(dob.val()=='' || dob.val()==undefined){
			error=true;
			dob.next('.error-field').html('Please Select Date of birth');
		}else{
			dob.next('.error-field').html('');
		}
		if(gender.val()=='' || gender.val()==undefined){
			error=true;
			gender.next('.error-field').html('Please Select Gender');
		}else{
			gender.next('.error-field').html('');
		}
		
		if(batch.val()=='' || batch.val()==undefined){
			error=true;
			batch.next('.error-field').html('Please Select Batch');
		}else{
			batch.next('.error-field').html('');
		}
		
		if(express_day.val()=='' || express_day.val()==undefined){
			error=true;
			express_day.next('.error-field').html('Please Select Valid Date');
		}else{
			express_day.next('.error-field').html('');
		}
		if(mobile.val()=='' || mobile.val()==undefined || ph.test(mobile.val())==false  || mobile.val().length < 10){
			error=true;
			mobile.next('.error-field').html('Please Enter valid Phone number');
		}else{
			mobile.next('.error-field').html('');
		}
		
		if(pincode.val()=='' || pincode.val()==undefined || ph.test(pincode.val())==false ){
			error=true;
			pincode.next('.error-field').html('Please Enter valid pincode');
		}else{
			pincode.next('.error-field').html('');
		}
		
		if(email.val()=='' || email.val()==undefined || em.test(email.val())==false ){
			error=true;
			email.next('.error-field').html('Please Enter valid Email address');
		}else{
			email.next('.error-field').html('');
		}
		if(address.val()=='' || address.val()==undefined){
			error=true;
			address.next('.error-field').html('Please Enter valid address');
		}else{
			address.next('.error-field').html('');
		}
		if(city.val()=='' || city.val()==undefined){
			error=true;
			city.next('.error-field').html('Please Enter valid city');
		}else{
			city.next('.error-field').html('');
		}
		if(board.val()=='' || board.val()==undefined){
			error=true;
			board.next('.error-field').html('Please Select Board');
		}else{
			board.next('.error-field').html('');
		}
		
		if(schoolname.val()=='' || schoolname.val()==undefined){
			error=true;
			schoolname.next('.error-field').html('Please Enter School Name');
		}else{
			schoolname.next('.error-field').html('');
		}
		
			if(error==false){
				$(this).submit();
				
			}else{
				e.preventDefault();
			}

		});
		$('#test_center').on('change',function(){
			var template ='';
			var testcenter = $(this).val();
			if(testcenter =='Chennai'){
				template +='<option value="">Select Date</option><option value="Sat (20-01-2018)">Sat (20-01-2018)</option><option value="Sun (21-01-2018)">Sun (21-01-2018)</option>';
				$('#express_day').html(template);
			}
			if(testcenter =='Coimbatore'){
				template +='<option value="">Select Date</option><option value="Sat (10-02-2018)">Sat (10-02-2018)</option><option value="Sun (11-02-2018)">Sun (11-02-2018)</option>';
				$('#express_day').html(template);
			}
			if(testcenter =='Trichy'){
				template +='<option value="">Select Date</option><option value="Sat (03-02-2018)">Sat (03-02-2018)</option><option value="Sun (04-02-2018)">Sun (04-02-2018)</option>';
				$('#express_day').html(template);
			}
			if(testcenter ==''){
				template +='<option value="">Select Date</option>';
				$('#express_day').html(template);
			}
		});
	});
</script>

</body>
</html>