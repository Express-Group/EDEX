<?php
session_start();
$connection = new mysqli("localhost" , "root" , "SamDb@121!" , "thinkedu2022");
if($connection->connect_errno){
	echo "Failed to connect to MySQL: ".$connection->connect_error;
	exit;
}
$connection->query("UPDATE users SET login_status=0 WHERE id='".$_SESSION['uid']."'");
session_unset();
session_destroy();
header('Location: login.php');
?>