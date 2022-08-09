<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
ini_set('display_errors' ,1);
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer;
$mail->SMTPDebug = 3;                 // Enable verbose debug output
//$mail->isSMTP();                        // Set mailer to use SMTP
//$mail->Host = 'tls://smtp.gmail.com';         // Specify main and backup SMTP servers
//$mail->SMTPAuth = true;                 // Enable SMTP authentication
//$mail->Username = 'krishraja5858@gmail.com';   // SMTP username
//$mail->Password = 'krishraja@555';             // SMTP password
//$mail->SMTPSecure = 'tls';              // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 465;                      // TCP port to connect to
// $mail->SMTPOptions = array(
  // 'ssl' => array(
	  // 'verify_peer' => false,
	  // 'verify_peer_name' => false,
	  // 'allow_self_signed' => true
  // )
// ); 
$mail->setFrom('mymail@gmail.com', 'ID Test');   // Add a recipient
$mail->addAddress('chriswer.krishwer@gmail.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(false);                      // Set email format to HTML

$mail->Subject = 'Twitter search';
$mail->Body    = 'This is the body in plain text for non-HTML mail clients';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

echo $mail->send();
?>