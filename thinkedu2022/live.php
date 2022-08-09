<?php
$connection = new mysqli("localhost" , "root" , "SamDb@121!" , "thinkedu2022");
if($connection->connect_errno){
	echo "Failed to connect to MySQL: ".$connection->connect_error;
	exit;
}
$live = $connection->query("SELECT id FROM users WHERE login_status = 1")->num_rows;
echo 'CURRENT USERS : '.((strlen($live)==1)?'0'.$live : $live);
?>