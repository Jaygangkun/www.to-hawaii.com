<?php
session_start();
include('inf_database.php');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $token_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data_string="{
	  \"clientKey\":\"$clientKey\",
      \"clientSecret\":\"$clientsecret\"
    }";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_POST, true);
$headers = array();
$headers[] = "Content-Type: application/json";
//$headers[] = "Access-Token: f7924d04f31eaee27a8c9bb89b53db118f719fc8b7ba9cb8c90fcfd8d880bef0";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
$objResponse = json_decode($result);

$expiresDate=$objResponse->responseEntity->expiresDate;
$encodedHeader=$objResponse->responseEntity->encodedHeader;
//echo $encodedHeader;

mysqli_query($con,"Update token set encodedHeader='$encodedHeader',expiresDate='$expiresDate'"); 

?>