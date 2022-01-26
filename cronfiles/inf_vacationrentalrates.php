<?php
include('inf_gettoken.php');
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//$sqlindexfeed = "SELECT  `unitUrl` FROM `vacationrentalindex` WHERE  price=0";

$today = date("Y-m-j");

//$sqlindexfeed = "SELECT  `unitUrl` FROM `vacationrentalindex` WHERE  updated!=1";
$sqlindexfeed = "SELECT  `unitUrl` FROM `vacationrentalindex`";
$resultindexfeed = $con->query($sqlindexfeed);

if ($resultindexfeed->num_rows > 0) {
    // output data of each row
    while($rowindexfeed = $resultindexfeed->fetch_assoc()) {
       $id= $rowindexfeed["id"];
	   $uniturl=$rowindexfeed["unitUrl"];
	   $tempvacationRentalRatesURL=$vacationRentalRatesURL.$uniturl;
		
	   $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $tempvacationRentalRatesURL);
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
		
		//	print_r($result);
		$objResponse = json_decode($result);
	
		
		
		$groupId=0;
		foreach ($objResponse->additionalPlans as $plans) {
			$groupId=$plans->groupId;
			
			$name="";
			 foreach ($plans->name->texts as $content) {
			   if($content->locale=="en")
				  {
					  $name=mysqli_real_escape_string($con,$content->content);
				  }
			
			 }
			 $amount=$plans->preStay->perAdditionalNight->baseTotal->amount->amount;
			
			
			 if (strlen($amount) == 0){
				 $amount=0;
		     }
			
			 $minimumNights=$plans->rateQualifier->minimumNightsRateQualifier->minimumNights;
			 if (strlen($minimumNights) == 0){
				 $minimumNights=0;
		     }
			$beginDate=$plans->rateQualifier->dateRangeRateQualifiers[0]->dateRange->beginDate;
			$endDate=$plans->rateQualifier->dateRangeRateQualifiers[0]->dateRange->endDate;
			
			
		if ($endDate >= $today) {
		
		  $sqlcheckFeedURL = "SELECT 1 FROM vacationRentalRates where unitUrl='$uniturl' and beginDate='$beginDate' and endDate='$endDate' limit 1";
			
		//echo $sqlcheckFeedURL;
		
			if(empty($groupId))
			{
				$groupId=0;
			}
			
		  $resultcheckFeedURL = $con->query($sqlcheckFeedURL);
		  if ($resultcheckFeedURL->num_rows > 0) {
			//  echo 'a';
			  mysqli_query($con, "update vacationRentalRates set amount=LEAST(amount, $amount),minimumNights=LEAST(minimumNights,$minimumNights) where unitUrl='$uniturl' and beginDate='$beginDate' and endDate='$endDate'");
	      }
		  else
		  {
			//  echo 'b';
			  $sqlQryForInsert="INSERT INTO `vacationRentalRates`(`unitUrl`, `name`, `amount`, `minimumNights`, `beginDate`, `endDate`,`groupId`) VALUES ('$uniturl','$name',$amount,$minimumNights,'$beginDate','$endDate','$groupId');";
			  mysqli_query($con, $sqlQryForInsert); 
		  }
		}
	     
		 
			
   	 }
	 mysqli_query($con,"update vacationrentalindex set updated=1 where unitUrl='$uniturl'"); 
	 curl_close ($ch);
      } 
// delete old data
mysqli_query($con,"DELETE FROM `vacationRentalRates` WHERE `endDate` < '$today'"); 
}





?>