<?php
include('inf_gettoken.php');

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//$objDB = json_decode(file_get_contents("inf_state.txt"), true);
$sqlindexfeed = "SELECT `id`, `unitUrl` FROM `vacationrentalindexfeed` WHERE enabled=1 and `isnew`=1 limit 1000";
$resultindexfeed = $con->query($sqlindexfeed);
if ($resultindexfeed->num_rows > 0) {
    // output data of each row
	$counter=0;
    while($rowindexfeed = $resultindexfeed->fetch_assoc()) {
       $id= $rowindexfeed["id"];
	   $uniturl=$rowindexfeed["unitUrl"];
	   //echo $counter."</br>";
	   $counter++;
	 
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
		// echo "<pre>";
		$objResponse = json_decode($result);
		
		//echo "<pre>";
		//echo print_r($objResponse);
		
		$registrationNumber=$objResponse->units[0]->registrationNumber;
		
		$bathrooms=$objResponse->units[0]->numberOfBathrooms;
		//echo $bathrooms;
		if (strlen($bathrooms) == 0){
			$bathrooms=0;
		}
		$bedrooms=$objResponse->units[0]->numberOfBedrooms;
		if (strlen($bedrooms) == 0){
			$bedrooms=0;
		}
		$sleeps=$objResponse->units[0]->maxSleep;
		if (strlen($sleeps) == 0){
			$sleeps=0;
		}
		$href=mysqli_real_escape_string($con,$objResponse->propertyDetailsUrls->en_US);
		$en_US_VR=mysqli_real_escape_string($con,$objResponse->propertyDetailsUrls->en_US_VR);
		$en_US_VRBO=mysqli_real_escape_string($con,$objResponse->propertyDetailsUrls->en_US_VRBO);
		//thumbnailUrl
		
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
		
		// echo $thumbnailUrl;
		// exit;
		
		$headline="";
		foreach ($objResponse->adContent->headline->texts as $headlinetext) {
			//echo $headlinetext->locale;
			if($headlinetext->locale=="en")
			{
				$headline=mysqli_real_escape_string($con,$headlinetext->content);
				
			}
		}
		
		$propertyName="";
		foreach ($objResponse->adContent->propertyName->texts as $propertyname_i) {
			//echo $headlinetext->locale;
			if($propertyname_i->locale=="en")
			{
				$propertyName=mysqli_real_escape_string($con,$propertyname_i->content);
				
			}
		}
		
		
		$description="";
		foreach ($objResponse->adContent->description->texts as $descriptiontext) {
			if($descriptiontext->locale=="en")
			{
				$description=mysqli_real_escape_string($con,$descriptiontext->content);
			}
		}
		$state=mysqli_real_escape_string($con,$objResponse->location->address->stateProvince);
		$city=mysqli_real_escape_string($con,$objResponse->location->address->city);
		$postalCode=mysqli_real_escape_string($con,$objResponse->location->address->postalCode);
		$country=mysqli_real_escape_string($con,$objResponse->location->address->country);
		$lastModified=$objResponse->updated;
		$region='';//$objDB[$state];
	
		$source=mysqli_real_escape_string($con,$objResponse->listingSourceSite);
		$property_type=mysqli_real_escape_string($con,$objResponse->units[0]->propertyType);
		$location_type="";
		$suitability="";
		$features="";
		$address=mysqli_real_escape_string($con,$objResponse->location->address->addressLine1.' '.$objResponse->location->address->addressLine2.' '.$objResponse->location->address->addressLine3.' '.$objResponse->location->address->addressLine4);
		
		
		$latitude=$objResponse->location->latLng->latitude;
		$longitude= $objResponse->location->latLng->longitude;
		
		
		$price=0;
		$minimum_nights=0;
		$rating=$objResponse->units[0]->reviewSummary->averageRating;
		if (strlen($rating) == 0){
			$rating=0;
		}
		$review_count=$objResponse->units[0]->reviewSummary->reviewCount;
		if (strlen($review_count) == 0){
			$review_count=0;
		}
		
		
		
		$sqlcheckFeedURL = "SELECT 1 FROM vacationrentalindex where uniturl='$uniturl' limit 1";
		//echo $sqlcheckFeedURL;
		$resultcheckFeedURL = $con->query($sqlcheckFeedURL);
		//var_dump($resultcheckFeedURL );
		if ($resultcheckFeedURL->num_rows > 0) {
			//echo 'Gaj';
			
			//$sqlQryForUpdate="update `vacationrentalindex` set `rating`=$rating, `review_count`=$review_count,`latitude`='$latitude', `longitude`='$longitude', `en_US_VR`='$en_US_VR', `en_US_VRBO`='$en_US_VRBO',`propertyName`='$propertyName',`actual_thumbnail`='$actual_thumbnail',`postalCode`='$postalCode' where uniturl='$uniturl'";
			
			
			$sqlQryForUpdate="update vacationrentalindex set bathrooms=$bathrooms,bedrooms=$bedrooms,sleeps=$sleeps,href='$href',thumbnailUrl='$thumbnailUrl',headline='$headline',description='$description', price=0, minimum_nights=0, rating=$rating, review_count=$review_count,latitude='$latitude', longitude='$longitude', en_US_VR='$en_US_VR', en_US_VRBO='$en_US_VRBO',propertyName='$propertyName',actual_thumbnail='$actual_thumbnail',postalCode='$postalCode',registration_number='$registrationNumber',lastModified='$lastModified',price_update=0 where uniturl='$uniturl'";

			mysqli_query($con, $sqlQryForUpdate);
			
	    }
		else
		{
			$sqlQryForInsert="INSERT INTO `vacationrentalindex`(`uniturl`, `bathrooms`, `bedrooms`, `sleeps`, `href`, `thumbnailUrl`, `headline`, `description`, `state`, `city`, `country`, `lastModified`, `region`, `source`, `property_type`, `location_type`, `suitability`, `features`, `address`, `price`, `minimum_nights`, `rating`, `review_count`,`latitude`, `longitude`, `en_US_VR`, `en_US_VRBO`,`propertyName`,`actual_thumbnail`,`postalCode`,`registration_number`) VALUES ('$uniturl',$bathrooms,$bedrooms,$sleeps,'$href','$thumbnailUrl','$headline','$description','$state','$city','$country','$lastModified','$region','$source','$property_type','$location_type','$suitability','$features','$address',$price,$minimum_nights,$rating,$review_count,'$latitude','$longitude','$en_US_VR','$en_US_VRBO','$propertyName','$actual_thumbnail','$postalCode','$registrationNumber');";
			 //echo $sqlQryForInsert;
			
			mysqli_query($con, $sqlQryForInsert);// or die(mysqli_error($con)) ; 
			//mysqli_query($con, $sqlQryForInsert) ; 
		}
	   
	   
	   
	   
	   mysqli_query($con,"update vacationrentalindexfeed set isnew=0 where id='$id';"); 
	  
	   
    }
} 





?>