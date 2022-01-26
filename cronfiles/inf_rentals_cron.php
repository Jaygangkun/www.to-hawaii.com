<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
require_once "class.xmltoarray.php";
$db = mysqli_connect('localhost','tohawaii_vrwin5m','@dvrjj4%&ww');
mysqli_select_db($db,'tohawaii_kania_hawaii');
//mysqli_query($db,'TRUNCATE objects;');
$url="";
$counter=1;
$LastPage=0;
do
{
    $url = "https://partner.homeaway.com/aggregator/homeaway/partners/search?partnerId=cj_all&format=cjAtom&affiliateId=4042034&queryString=hawaii&page=".$counter;    
    $xml_data = file_get_contents($url);
    $arrayData = xml2array($xml_data);
	
	 $links = $arrayData['feed']['link'];
	 $counterlink=0;
	if($LastPage==0)
	{		
		foreach($links as $link)
		{	if(!empty($link))
			{
				if($link["rel"]=="last")
				{
					$url=$link["href"];
					if(!empty($url))
					{
					 $arrayURLParts=explode('&',$url);
					 $pagecounter=0;
					 foreach($arrayURLParts as $page)
					 {
						
						  if (strpos($page, 'page') !== false) 
						  {
							  $LastPage=explode('=',$page)[1];
						  }
						 $pagecounter++;
					 }
					 
					 
					}
				}
			}
		}
	}
	
	
	//$LastPage=500;
	
	//echo $url;
	//var_dump($arrayData);
	//exit;
	
    $feed = $arrayData['feed']['entry'];
   
    foreach($feed as $entry)
    {
        $object = array();
        $object['unitId'] = $entry['content']['listing_attr']['unitId'];
        if($entry['content']['listing']['data_attr']['fullBathrooms']>0)
        {
           $bathroom = $entry['content']['listing']['data_attr']['fullBathrooms'];
        }
        else
        {
           $bathroom = $entry['content']['listing']['data_attr']['halfBathrooms'];
        }
        $object['bathrooms']    = $bathroom;
        $object['bedrooms']     = $entry['content']['listing']['data_attr']['bedrooms'];
        $object['sleeps']       = $entry['content']['listing']['data_attr']['sleeps'];

        $object['href']         = $entry['link_attr']['href'];
        $object['thumbnailUrl'] = $entry['content']['listing_attr']['thumbnailUrl'];
        $object['headline']     = $entry['content']['listing']['headline'];
        $object['description']  = $entry['content']['listing']['description'];
        $object['state']        = $entry['content']['listing']['data_attr']['state'];
        $object['city']         = $entry['content']['listing']['data_attr']['city'];
        $object['country']      = $entry['content']['listing']['data_attr']['country'];
        $object['lastModified'] = $entry['content']['listing_attr']['lastModified'];

        if(!empty($entry['content']['listing']['rates']['rate']))
        {
            $rates = array();
            foreach ($entry['content']['listing']['rates']['rate'] as $rate)
            {
                if(isset($rate['periodType']) and in_array($rate['periodType'], array('weekend', 'weekly', 'monthly', 'nightly-weekday', 'nightly-weekend', 'extra-night')))
                {
                    $rates[] = $rate;
                    $object[$rate['periodType']] = $rate['from'];
                }
               // elseif(isset($rate['periodType'])) {echo $rate['periodType'];}

                $object['rates'] = json_encode($rates);
            }
        }

        $object['region'] = '|'.implode('|', $entry['content']['listing']['regions']['region'])."|";
	    $resultunitId=mysqli_query($db,"SELECT `id` FROM `objects` WHERE unitId=".$entry['content']['listing_attr']['unitId']);
		//echo $object['unitId'];
		if(mysqli_num_rows($resultunitId))
		{
		    $sql = gen_update_sql($object, 'objects',$db);
			$sql=$sql.' where unitId='.$object['unitId'];
			mysqli_query($db,$sql);
		}
		else
		{
			$sql = gen_insert_sql($object, 'objects',$db);
			mysqli_query($db,$sql);
			
		}
       
    }
	$counter++;
}while($counter<=$LastPage);


function gen_insert_sql($values, $table,$db)
{
    $r = array();
    foreach ($values as $k=>$value)
    {
        if(is_array($value)) continue;
        $r[] = "`".$k."`='".mysqli_real_escape_string($db,$value)."'";
    }

    $sql = 'INSERT INTO '.$table.' SET '.implode(',', $r);
    return $sql;
}


function gen_update_sql($values, $table,$db)
{
    $r = array();
    foreach ($values as $k=>$value)
    {
        if(is_array($value)) continue;
        $r[] = "`".$k."`='".mysqli_real_escape_string($db,$value)."'";
    }

    $sql = 'Update '.$table.' SET '.implode(',', $r);
    return $sql;
}

?>
