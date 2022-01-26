<?php
include('inf_gettoken.php');

	   $uniturl='/units/0000/0c590f52-685e-4367-8a94-b49fc7b97831';
	
	   $tempvacationRentalIndexURL=$vacationRentalIndexURL.$uniturl;
	   $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $tempvacationRentalIndexURL);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$data_string="";
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		$headers = array();
		$headers[] = "Authorization: Bearer ".$encodedHeader;
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close ($ch);
		$objResponse = json_decode($result);
		
		echo "<pre>";
		
		echo print_r($objResponse);
		$registrationNumber=$objResponse->units[0]->registrationNumber;
		
		//echo $registrationNumber;
		
		
?>