<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

class RealTimeAvilability{

function getRealTimeAvilability($query,$startdate, $enddate,$guest,$uniqeKey)
{

//echo $query;
include('inf_gettoken.php');

$today = date("Y-m-j");
mysqli_query($con,"DELETE FROM `vacationrentalcurrentavailable` WHERE `dateadded` < '$today'"); 

$resultindexfeed = $con->query($query);
$vacationRentalQuoteSummaries="";	

$toatlRowsForSearch=$resultindexfeed->num_rows;

$toatlRowsForSearch=ceil($toatlRowsForSearch/1500);
//echo $toatlRowsForSearch;

for($ii=0;$ii<$toatlRowsForSearch;$ii++)
{

$limitstart=$ii*1500;


$jj=$ii+$ii;

 $newquery=$query.'limit '.$limitstart.',1500';
 
 $resultindexfeed = $con->query($newquery);
 $vacationRentalQuoteSummaries="";
 
 
 
 if ($resultindexfeed->num_rows > 0) {
	 	
     while($rowindexfeed = $resultindexfeed->fetch_assoc()) {
		 $uniturl=$rowindexfeed["uniturl"];
		 
		 $vacationRentalQuoteSummaries.='{
			"unitUrl": "'.$uniturl.'"
		},';
		 
		 
		  
		 
       
 } 
 }
 //2015-09-02
 $request = '{
	"checkinDate": "'.$startdate.'",
	"checkoutDate": "'.$enddate.'",
	"currencyCode": "USD",
	"occupancy": {
		"adultCount": '.$guest.',
		"childCount": 0
	},
	"vacationRentalQuoteSummaries": [';
 
 $request=$request . rtrim($vacationRentalQuoteSummaries,',') . ']}';
 
 
 

 
 

		
	    $ch = curl_init();
		 curl_setopt($ch, CURLOPT_URL, "https://channel.homeaway.com/channel/vacationRentalQuotes?_restfully=true");
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 $data_string="";
		 curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
		 curl_setopt($ch, CURLOPT_POST, true);
		 $headers = array();
		 $headers[] = "Authorization: Bearer ".$encodedHeader;
		 $headers[] = "Content-Type: application/json";
		 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		 $result = curl_exec($ch);
		 if (curl_errno($ch)) {
		  echo 'Error:' . curl_error($ch);
		 }
		
		 $objResponse = json_decode($result);
	   //  echo $result;
		
		
		
		 foreach ($objResponse->vacationRentalQuoteSummaries as $Summaries) {
			 
			 if($Summaries->quoteStatus->message=="Unit unavailable")
			 {
				 continue;
			 }
			 
			 $uniturl=$Summaries->unitUrl;
			 $amount=$Summaries->posaPrice->baseRent->value->amount;
			 
			 $date1=date_create($startdate);
			 $date2=date_create($enddate);
             		 $diff=date_diff($date1,$date2);
			 
			  $amount=$amount/$diff->format("%d");
			  
			  $sqlQryForInsert="INSERT INTO `vacationrentalcurrentavailable`(`uniqueid`, `uniturl`, `price`, `dateadded`) VALUES ('$uniqeKey','$uniturl',$amount,'$today');";
			
			  mysqli_query($con, $sqlQryForInsert) or die(mysqli_error($con)) ; 
			 
		 }
	
 
 
 curl_close ($ch);
}
}
}
?>