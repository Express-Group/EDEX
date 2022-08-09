<?php 
$to = "pandiaraj.m@newindianexpress.com";
$subject = "My subject";
$txt = "testing Mail from newindianexpress";
$headers = "From: pandiaraj.m@newindianexpress.com" . "\r\n" .
"CC: chriswar@newindianexpress.com";
mail($to,$subject,$txt,$headers);

$to = "pandiaraj.m@gmail.com";
$subject = "My subject";
$txt = "testing from Gmai Mail";
$headers = "From: pandiaraj.m@newindianexpress.com" . "\r\n" .
"CC: chriswar@newindianexpress.com";
mail($to,$subject,$txt,$headers);

$to = "pandiaraj.m@gmail.com";
$subject = "My subject";
$txt = "testing Mail from newindianexpress";
$headers = "From: pandiaraj.m@gmail.com" . "\r\n" .
"CC: chriswar@newindianexpress.com";
mail($to,$subject,$txt,$headers);

$to = "serviceassurance@1cloudhub.com";
$subject = "Testing mail from Edex Server";
$txt = "testing Mail from newindianexpress";
$headers = "From: pandiaraj.m@newindianexpress.com" . "\r\n" .
"CC: chriswar@newindianexpress.com";
mail($to,$subject,$txt,$headers);



$to = "pandiaraj.m@gmail.com";
$subject = "Testing mail from Edex Server";
$txt = "testing Mail from newindianexpress";
$headers = "From: pandiaraj.m@pandiaeaj.com" . "\r\n" .
"CC: chriswar@newindianexpress.com";
mail($to,$subject,$txt,$headers);

?>