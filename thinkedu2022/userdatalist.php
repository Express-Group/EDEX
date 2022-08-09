<?php
$connection = new mysqli('localhost' , 'root' , 'SamDb@121!' , 'thinkedu2022');
if($connection->connect_errno){
	echo "Failed to connect to MySQL: " . $connection->connect_error;
	exit();
}
$search = "";
if(isset($_GET['payment_status']) && $_GET['payment_status']!=''){
	$search .=" AND status='".trim($_GET['payment_status'])."'";
}
if(isset($_GET['plan']) && $_GET['plan']!=''){
	$search .=" AND program='".trim($_GET['plan'])."'";
}
$query = "SELECT * FROM te_users WHERE uid!='' ".$search." ORDER BY created_on DESC";
$result = $connection->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ThinkEdu Conclave 2022 | Userlist</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/additional-methods.min.js"></script>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Roboto:wght@400;500;700&display=swap');
		body{background-color:white; overflow-x:hidden;}

		}
	</style>
	
</head>
<body>
	<section>
		<div class="container-fluid mt-5">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
					<form method="get">
						<div class="row">
							<div class="col-3">
								<div class="form-group">
									<select class="form-control" name="payment_status">
										<option value="">Please select payment status</option>
										<option value="1">SUCCESS</option>
										<option value="2">FAILURE</option>
										<option value="3">ABORTED</option>
									</select>
								</div>
							</div>
							<div class="col-3">
								<div class="form-group">
									<select class="form-control" name="plan">
										<option value="">Please select payment status</option>
										<option value="1">DAY 1 (MARCH 8 , 2022) RS. 1000</option>
										<option value="2">DAY 2 (MARCH 9 , 2022) RS. 1000</option>
										<option value="3">DAY 1&2 (MARCH 8&9 , 2022) RS. 2000</option>
									</select>
								</div>
							</div>
							<div class="col-3">
								<div class="form-group">
									<button type="submit" class="btn btn-secondary">Submit</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
					<div class="table-responsive">
						<table class="table">
							<thead class="thead-light">
								<tr>
									<th>S.No</th>
									<th>Name</th>
									<th>Age</th>
									<th>Phone Number</th>
									<th>Email Address</th>
									<th>City</th>
									<th>Address</th>
									<th>Payment Status</th>
									<th>Amount</th>
									<th>Program Plan</th>
									<th>Created On</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i =1;
								while($data = $result->fetch_assoc()){
									echo '<tr>';
									echo '<td>'.$i.'</td>';
									echo '<td>'.$data['name'].'</td>';
									echo '<td>'.$data['age'].'</td>';
									echo '<td>'.$data['phone'].'</td>';
									echo '<td>'.$data['email'].'</td>';
									echo '<td>'.$data['city'].'</td>';
									echo '<td>'.$data['address'].'</td>';
									if($data['status']==0){
										echo '<td><span class="badge badge-pill badge-warning">Order Created</span></td>';	
									}
									if($data['status']==1){
										echo '<td><span class="badge badge-pill badge-success">Success</span></td>';	
									}
									if($data['status']==2){
										echo '<td><span class="badge badge-pill badge-danger">Failiure</span></td>';	
									}
									if($data['status']==3){
										echo '<td><span class="badge badge-pill badge-danger">Aborted</span></td>';	
									}
									if($data['program']==1 || $data['program']==2){
										echo '<td>RS 1000</td>';
										if($data['program']==1){
											echo '<td>DAY 1 (MARCH 8 , 2022) RS. 1000</td>';	
										}else{
											echo '<td>DAY 2 (MARCH 9 , 2022) RS. 1000</td>';	
										}
									}else{
										echo '<td>RS 2000</td>';
										echo '<td>DAY 1&2 (MARCH 8&9 , 2022) RS. 2000</td>';
									}
									echo '<td>'.$data['created_on'].'</td>';
									echo '</tr>';
									$i++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>