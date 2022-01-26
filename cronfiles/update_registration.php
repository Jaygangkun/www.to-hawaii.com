<?php
include('inf_gettoken.php');

$sqlindexfeed  = "select i.uniturl from vacationrentalindexfeed f, vacationrentalindex i WHERE f.enabled='1' AND f.unitUrl=i.unitUrl  AND i.registration_update=0 AND i.registration_number ='' LIMIT 250";

$resultindexfeed = $con->query($sqlindexfeed);

if ($resultindexfeed->num_rows > 0) {
while($rowindexfeed = $resultindexfeed->fetch_assoc()) {
	   $uniturl=$rowindexfeed['uniturl'];
	   //echo $counter."</br>";
	   //$counter++;
	
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
		
		//echo "<pre>";
		//echo print_r($objResponse);
		
		
		 //echo $actual_thumbnail;
		 
		 //echo "</pre>";
		 $registrationNumber = '';
		 $registrationNumber=$objResponse->units[0]->registrationNumber;
		 
		if ( $registrationNumber !='') {
			$sqlQryForUpdate="update vacationrentalindex set registration_number='$registrationNumber', registration_update=1 where uniturl='$uniturl'";
		}
		else {
			$sqlQryForUpdate="update vacationrentalindex set registration_update=2 where uniturl='$uniturl'";
		
		}
		
		mysqli_query($con, $sqlQryForUpdate);
		
		echo $uniturl.' - '.$registrationNumber.'<br>';
		//exit;
}}
?>