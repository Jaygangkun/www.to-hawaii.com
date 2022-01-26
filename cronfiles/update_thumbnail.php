<?php
include('inf_gettoken.php');

//$sqlindexfeed  = "select i.uniturl from vacationrentalindexfeed f, vacationrentalindex i WHERE f.enabled='1' AND f.unitUrl=i.unitUrl   AND i.thumbnail_update=0 AND i.thumbnailUrl ='' LIMIT 350";

//$resultindexfeed = $con->query($sqlindexfeed);

//if ($resultindexfeed->num_rows > 0) {
//while($rowindexfeed = $resultindexfeed->fetch_assoc()) {
	   //$uniturl=$rowindexfeed['uniturl'];
	    $uniturl='/units/0000/41ae67f8-fa64-41e9-993d-7cd6d6be7b5c';
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
		
		echo "<pre>";
		echo print_r($objResponse);
		
		$thumbnailUrl='';
		foreach ($objResponse->photos as $photo) {
			 foreach ($photo->images as $selectImage) {
				if($selectImage->treatment=="c10")
				 {
					 $thumbnailUrl=$thumbnailUrl.$selectImage->uri.'|';
				 }
			 }
		}
		$actual_thumbnail='';
		foreach ($objResponse->photos as $photo) {
			 foreach ($photo->images as $selectImage) {
				if($selectImage->treatment=="c3")
				 {
					 $actual_thumbnail=$actual_thumbnail.$selectImage->uri.'|';
				 }
			 }
		}
		
		 //echo $actual_thumbnail;
		 
		 //echo "</pre>";
		 //echo 'ok';
		 //exit;
		//$sqlQryForUpdate="update vacationrentalindex set thumbnailUrl='$thumbnailUrl',actual_thumbnail='$actual_thumbnail', thumbnail_update=1 where uniturl='$uniturl'";
	
		
		//mysqli_query($con, $sqlQryForUpdate);
		
		//echo $uniturl.'<br>';
//}}
?>