<?php
include('inf_gettoken.php');
$nextResults="";
$counter=0;

do
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $vacationRentalIndexFeedURL);
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

$objResponse = json_decode($result);
$nextResults=$objResponse->nextResults;


foreach ($objResponse->entries as $rowfeedurl) {
	$id="";
	$listingUrl="";
	$unitUrl="";
	$enabled=0;
	
	$id=$rowfeedurl->id;
	$listingUrl=$rowfeedurl->listingUrl;
	$unitUrl=$rowfeedurl->unitUrl;
	$enabled= intval($rowfeedurl->enabled);
	
	 if(!$rowfeedurl->enabled)
	 {
		 $enabled=0;
	 }
	 
	$sqlcheckFeedURL = "SELECT enabled FROM vacationrentalindexfeed where id='$id'  limit 1";
	$resultcheckFeedURL = $con->query($sqlcheckFeedURL);
	//echo 	$sqlcheckFeedURL;
    //print_r($resultcheckFeedURL);

	
	if($resultcheckFeedURL->num_rows > 0)
	 {
		$rowcheckFeedURL = $resultcheckFeedURL->fetch_assoc();
		
		//echo $enabled;
		//echo $rowcheckFeedURL["enabled"];
		
		if($enabled!=$rowcheckFeedURL["enabled"])
		{
		    //echo 'Gaj'.$enabled;
		  //  echo "update vacationrentalindexfeed set enabled=$enabled where id='$id'";
		  	$isnew ='';
			if ($enabled==1) { // added 2021-04-26
		  		$isnew =', isnew=1';
			}
			mysqli_query($con,"update vacationrentalindexfeed set enabled=$enabled $isnew where id='$id'"); 
		//exit;
		}
	}
	else
	{
	    
		$status=mysqli_query($con,"insert into vacationrentalindexfeed(id,listingUrl,unitUrl,enabled,nextResults,isnew) values('$id','$listingUrl','$unitUrl',$enabled,'$nextResults',1)"); 
		//echo 'gaj'."<br/>"; ;
	//	exit;
	}
	
}
curl_close ($ch);
$vacationRentalIndexFeedURL=$baseURl.$nextResults;
//echo $vacationRentalIndexFeedURL;

$counter++;

}while(strlen($nextResults)>0);
//}while($counter<5);
$todaysdate=date("Y-m-d"); 
mysqli_query($con,"update last_imported set last_imported_time='$todaysdate'"); 
?>