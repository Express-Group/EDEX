<?php
$connection = new mysqli('localhost' , 'root' , 'SamDb@121!' , 'custom_forms');
if($connection->connect_errno){
	echo "Failed to connect to MySQL: " . $connection->connect_error;
	exit();
}
$query = "SELECT * FROM form2 ORDER BY created_on DESC";
$result = $connection->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>EDEXWORKS | LET'S CELEBRATE INDIA @ 75 | EDEXLIVE</title>
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
		header {float:left;width:100%;border-bottom: 3px solid #247cc1;padding-bottom: 1%;}
		header .container-fluid{padding:0; margin:0;}
		section{float:left;width:100%;}
		
		@media only screen and (max-width: 768px){
			body{overflow-x: hidden;}
			header h1, section h1 { color: black; font-size: 2rem; font-family: 'Alfa Slab One', cursive; margin-top: 2rem!important;    font-weight: 400;}
		}
		@media only screen and (min-width: 1200px){
			.container { max-width: 1140px;}
		}
	</style>
	
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
					<img src="assets/image/Strap4.jpg" style="width:100%; border-radius:5px;" class="img-fluid">
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="container-fluid mt-5">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
					<div class="table-responsive">
						<table class="table">
							<thead class="thead-light">
								<tr>
									<th>S.No</th>
									<th>Name</th>
									<th>Gender</th>
									<th>Class</th>
									<th>Phone Number</th>
									<th>Email Address</th>
									<th>School Name</th>
									<th>Image</th>
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
									echo '<td>'.(($data['gender']==1) ? 'Male' : 'Female').'</td>';
									echo '<td>'.$data['class'].'</td>';
									echo '<td>'.$data['phone'].'</td>';
									echo '<td>'.$data['email'].'</td>';
									echo '<td>'.$data['school'].'</td>';
									echo '<td><img style="width: 75px;height: 75px;object-fit: cover;" src="https://www.edexlive.com/edexworks/assets/image/75/'.$data['photo'].'"></td>';
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