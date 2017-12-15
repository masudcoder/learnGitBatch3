<?php
	
$user = "user name will be provided by sslwireless ";    
$sid = "sid will be provided by sslwireless";
$pass="";
		
$url="http://sms.sslwireless.com/pushapi/dynamic/server.php";
$param="user=$user&pass=$pass&sms[0][0]= 8801738723260 &sms[0][1]=".urlencode("আপনি এই পৃষ্ঠাটি অনেক বার দেখেছে")."&sms[1][0]= 8801739976459 &sms[1][1]=".urlencode("আপনি এই পৃষ্ঠাটি অনেক বার দেখেছে")."&sid=$sid";

$crl = curl_init();
curl_setopt($crl,CURLOPT_SSL_VERIFYPEER,FALSE);
curl_setopt($crl,CURLOPT_SSL_VERIFYHOST,2);
curl_setopt($crl,CURLOPT_URL,$url);
curl_setopt($crl,CURLOPT_HEADER,0);
curl_setopt($crl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($crl,CURLOPT_POST,1);
curl_setopt($crl,CURLOPT_POSTFIELDS,$param);
$response = curl_exec($crl);

curl_close($crl);
echo $response;


?>

