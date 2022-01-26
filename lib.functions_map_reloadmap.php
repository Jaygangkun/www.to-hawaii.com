<?php
session_start();
require_once "lib.functions_map_functions.php";
$data = file_get_contents('php://input');
//echo $data;
$filearray = explode("&", $data);

$page="";
$area="";
$destination="";
$arriveDate="";
$departDate="";
$guestsadult="";
$newlat="";
$newlong="";
$hotel="";
while (list($var, $val) = each($filearray)) {
     ++$var;
     $val = trim($val);
	 
	 $vararray=explode("=", $val);
	 $var=$vararray[0];
	 $val=$vararray[1];
	if($var=='page')
	 {
		 $page=$val;
	 }
	 else if($var=='area')
	 {
		 $area=$val;
	 }
	  else if($var=='destination')
	 {
		 $destination=$val;
	 }
	  else if($var=='arriveDate')
	 {
		 $arriveDate=$val;
	 }
	 else if($var=='departDate')
	 {
		 $departDate=$val;
	 }
	 else if($var=='guestsadult')
	 {
		 $guestsadult=$val;
	 }
	 else if($var=='newlat')
	 {
		 $newlat=$val;
	 }
	 else if($var=='newlong')
	 {
		 $newlong=$val;
	 }
	 else if($var=='hotel')
	 {
		 $hotel=$val;
	 }
	 
	 
}


if($newlat=="NaN")
{
	$newlat="21.2759167";
}
if($newlong=="NaN")
{
	$newlong="-157.8233677";
}
//echo $newlat;
//echo $newlong;
// echo $page;
// echo $area;
// echo $destination;
// echo $arriveDate;
// echo $departDate;
// echo $guestsadult;
// echo $newlat;
// echo $newlong;

$orderBy="distance&asc";

$destination=str_replace('+',' ',$destination);
$area=str_replace('+',' ',$area);
$data_all = getObj($orderBy, $page, $area, $destination, $arriveDate, $departDate, $guestsadult,200,$newlat,$newlong,$hotel);
//echo count($data_all['data']);
if (count($data_all['data']) > 0) {
 if ($data_all['data']) {
        //echo "<pre>";print_r($data_all);exit;
        foreach ($data_all['data'] as $data) {
		$images = explode("|", $data['thumbnailUrl']);
        
            $lat           = $data['latitude'];
            $lng           = $data['longitude'];
            $property_type = $data['property_type'];
            $rating        = $data['rating'];
			$vrboURL = $data['href'];
            if(!empty($arriveDate) && !empty($departDate))
			  {
              $vrboURL.="&arrivalDate=$arriveDate&departureDate=$departDate&adultsCount=$guestsadult";
			  }
			  
			  $images_thumbnail=str_replace('c10.jpg','c3.jpg',$images[0]);
            
?>

<div style="display:none;" id="hdnplacevalue<?PHP  echo $lat;?><?PHP echo $lng;?>" class="qdiv" ><?PHP echo $lat;?>,<?PHP echo $lng;?>,<?PHP echo str_replace(',', '^', $data['headline']);?>,<?php
            echo $images_thumbnail;?>,<?PHP echo $data['price'];?>,<?PHP echo $vrboURL;?>,<?PHP echo $property_type;?>,<?PHP echo $rating;?>,<?php echo $data['review_count'];?> </div>				
			
<?php
        }
    }
}
?>
					
					
					
					
					
					
