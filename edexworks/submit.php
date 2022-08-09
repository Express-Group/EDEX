<?php
$error =1;
if($_SERVER['REQUEST_METHOD']==='POST'){
	if(count($_POST)==6 && count($_FILES)==1){
	   $name = filter_var(trim($_POST['uname']), FILTER_SANITIZE_STRING);
	   $gender = filter_var(trim($_POST['gender']), FILTER_SANITIZE_STRING);
	   $class = filter_var(trim($_POST['class']), FILTER_SANITIZE_STRING);
	   $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
	   $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	   $school = filter_var(trim($_POST['school']), FILTER_SANITIZE_STRING);
	   $extensionArr = ['jpg' , 'jpeg' , 'png'];
	   $photo = $_FILES['photo']['name'];
	   $extension = strtolower(pathinfo($photo, PATHINFO_EXTENSION));
	   if(in_array($extension, $extensionArr)){
			$targetDir = "/var/www/html/edex_app/edexworks/assets/image/75/";
			$fName = explode('.' , $photo);
			$newName = $fName[0].'_'.date('ymdHis').'.'.$extension;
			$targetFile = $targetDir . $newName;
			if(move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)){
				$error = 0;
			}
	   }
	   if($error==0){
		   if($name!='' && $gender!='' && $class!='' && $phone!='' && $email!='' && $school!=''){
			    $connection = new mysqli('localhost' , 'root' , 'SamDb@121!' , 'custom_forms');
			    if($connection->connect_errno){
					echo "Failed to connect to MySQL: " . $connection->connect_error;
					exit();
				}
				$query = "INSERT INTO form2 (name , gender , class , phone , email , school , photo) VALUES ( '".$name."' , '".$gender."' , '".$class."' , '".$phone."' , '".$email."' , '".$school."' , '".$newName."')";
				$connection->query($query);
		   }else{
				$error =1;   
		   }
	   }
	}
}
echo $error;
exit();
?>