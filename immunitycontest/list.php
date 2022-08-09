<?php
$connection = new mysqli('localhost' , 'root' , 'SamDb@121!' , 'custom_forms');
if ($connection->connect_errno){
	echo "Failed to connect to MySQL: " . $connection->connect_error;
	exit();
}
$list = $connection->query("SELECT * FROM form1");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home Remedy for Immunity Contest list - EDEXLIVE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
		@import url('https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap');
		body{background-color: rgb(239, 243, 238);font-family: 'Zilla Slab', serif;}
		.banner{border: 1px solid #dadce0;border-radius: 8px;}
		.main-content{background-color: #fff;border: 1px solid #dadce0;border-radius: 8px;margin-bottom: 12px;padding: 24px;  padding-top: 22px;position: relative;}
		.b-main{background-color: rgb(175, 194, 171);color: rgba(0, 0, 0, 1);border-top-left-radius: 8px;    border-top-right-radius: 8px;height: 10px;left: -1px;position: absolute;top: -1px;width: calc(100% + 2px);}
		.main-content p{color: #202124;font-size: 1.1rem;}
		sup{color:red;}
		.btn-primary{background-color: rgb(91, 128, 82) !important;border-color: rgb(91, 128, 82) !important;}
		form{width:100%;}
		.table-striped tbody tr:nth-of-type(odd){background-color: rgb(149 163 110 / 20%);}
		</style>
	</head>
	<body>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mt-3">
						<img src="banner1.jpg" class="img-fluid banner">
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mt-3">
							<table class="table table-striped" style="background:#fff;">
								<thead style="background: #247512;color: #fff;">
									<tr>
										<th>No</th>
										<th>Email Address</th>
										<th>Name</th>
										<th>Phone Number</th>
										<th>Your home remedy for immunity </th>
										<th>Created On</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i =1;
									while($response = $list->fetch_assoc()){
										echo '<tr>';
										echo '<td>'.$i.'</td>';
										echo '<td>'.$response['email'].'</td>';
										echo '<td>'.$response['name'].'</td>';
										echo '<td>'.$response['phone'].'</td>';
										echo '<td>'.$response['question'].'</td>';
										echo '<td>'.$response['created_on'].'</td>';
										echo '</tr>';
										$i++;
									}
									?>
								</tbody>
							</table>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
