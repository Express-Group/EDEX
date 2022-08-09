<?php
$api_key = '7381daa7-6151-11eb-8153-0200cd936042';
$contacts = '+918428611815';
//$contacts = '+919380568416';
$from = 'ENPLIT';
$template_id= '';
$sms_text = urlencode('Dear Pandiaraj ,your OTP for debate registration is 0856.use this OTP to register');
https://2factor.in/API/V1/{api_key}/SMS/+91{user's_phone_no}/{custom_otp_val}
//$api_url = "http://sms.textmysms.com/app/smsapi/index.php?key=".$api_key."&campaign=0&routeid=13&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;

$api_url = "2factor.in/API/V1/{".$api_key."}/SMS/{".$contacts."}/{".$sms_text."}";

//Submit to server

$response = file_get_contents($api_url);
echo $response;

//http://2factor.in/API/V1/7381daa7-6151-11eb-8153-0200cd936042/SMS/9380568416/3423/register1
$api_url1	="http://2factor.in/API/V1/7381daa7-6151-11eb-8153-0200cd936042/SMS/8428611815/3423/register1";


$curl = curl_init();

  curl_setopt_array($curl, array(
  CURLOPT_URL => $api_url1,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>