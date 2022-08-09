<?php
$postData = [];
$postData['CLIENTID'] = 1839;
$postData['FLD1'] = 2;
$postData['FLD2'] = 4;
$postData['FLD3'] = 1;
$postData['FLD4'] = '28-Dec-2017 15:58:00';
$postData['FLD6'] = 'OnlinePay';
$postData['FLD9'] = 'chriswar';
$postData['FLD10'] = 'subbian';
$postData['FLD11'] = 'bala saraswathi';
$postData['FLD12'] = 'M';
$postData['FLD13'] = '28-Dec-1987';
$postData['FLD14'] = 'Chennai';
$postData['FLD16'] = '8428611815';
$postData['FLD18'] = 'chriswar@newindianexpress.com';
$postData['FLD18'] = 'chriswar@newindianexpress.com';
$postData['FLD19'] = 6;
$postData['FLD23'] = 21;
$postData['FLD40'] = 'chennai';
$postData['FLD41'] = '600050';
$postData['FLD42'] = 'Tamilnadu';
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://onlineecas.com/ecas/MemberReg.aspx',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $postData
));
$response = curl_exec($curl);
curl_close($curl);
print_r($response);
?>