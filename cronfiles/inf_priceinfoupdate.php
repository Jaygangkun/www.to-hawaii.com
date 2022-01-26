<?php

$db = mysql_connect('localhost','tohawaii_vrwin5m','@dvrjj4%&ww') or die("Database error");

mysql_select_db('tohawaii_kania_hawaii', $db);

$arrival = date("Y-m-d");

$departure = date("Y-m-d", strtotime("+7 day"));

$query = "select i.uniturl,i.en_US_VRBO from vacationrentalindexfeed f, vacationrentalindex i WHERE f.enabled='1' AND f.unitUrl=i.unitUrl AND i.price=0 AND i.price_update=0 AND i.en_US_VRBO !='' LIMIT 1000";


$result = mysql_query($query);

$doc = new DOMDocument();
while ($row = mysql_fetch_assoc($result)){

	$part0 = explode('?URL=',$row['en_US_VRBO']);
	list($vrbo,$junk) = explode('?',$part0[1]);
	
	
	$content  = file_get_contents($vrbo."?adultsCount=2&arrival=".$arrival."&departure=".$departure);
	
	@$doc->loadHTML($content);
	
	$metas = $doc->getElementsByTagName('meta');
	
	for ($i = 0; $i < $metas->length; $i++)
	{
	    $meta = $metas->item($i);
	    if($meta->getAttribute('name') == 'description')
	        $description = $meta->getAttribute('content');
	}
	
	$amount="";
	$minimum="";
	$part0 = explode(' - $',$description);
	list($amount,$junk) = explode(' avg/night - ',$part0[1]);
	$amount = str_replace(',', '', $amount); 
	
	$part0 = explode(' Minimum stay from',$description);
	list($minimum,$junk) = explode(' night',$part0[1]);
	
	if ($amount =='') {
		$content  = file_get_contents($vrbo);
		
		@$doc->loadHTML($content);
		
		$metas = $doc->getElementsByTagName('meta');
		
		for ($i = 0; $i < $metas->length; $i++)
		{
		    $meta = $metas->item($i);
		    if($meta->getAttribute('name') == 'description')
		        $description = $meta->getAttribute('content');
		}
		
		$part0 = explode(' - $',$description);
		list($amount,$junk) = explode(' avg/night - ',$part0[1]);
		$amount = str_replace(',', '', $amount); 
		
		$part0 = explode(' Minimum stay from',$description);
		list($minimum,$junk) = explode(' night',$part0[1]);
	}
	
	if ($amount =='') {
		mysql_query("update vacationrentalindex set price_update=2 where uniturl='".$row['uniturl']."' ");
	}
	else {
		mysql_query("update vacationrentalindex set price=$amount, minimum_nights=$minimum, price_update=1 where uniturl='".$row['uniturl']."' ");
	}
	
	echo $row['uniturl'].' - '.$vrbo.' - '.$amount.' - '.$minimum.'<br>';
	//sleep(1);
	//exit;
}


?>