<?php
error_reporting(E_ALL);

require_once "class.xmltoarray.php";
$db = mysql_connect('localhost','tohawaii_vrwin5m','@dvrjj4%&ww') or die("Database error");
mysql_select_db('tohawaii_kania_hawaii', $db);

mysql_query('TRUNCATE objects;');


for($i = 1; $i<=182; $i++)
{
    $url = "https://partner.homeaway.com/aggregator/homeaway/partners/search?partnerId=cj_all&format=cjAtom&affiliateId=4042034&queryString=hawaii&page=".$i;
    $xml_data = file_get_contents($url);
    $arrayData = xml2array($xml_data);
    $feed = $arrayData['feed']['entry'];
    store_objects($feed);
}

    /// parce block ///
/// $url = "https://partner.homeaway.com/aggregator/homeaway/partners/search?partnerId=cj_all&format=cjAtom&affiliateId=4042034&queryString=kailua";
/// $xml_data = file_get_contents($url);
/// $arrayData = xml2array($xml_data);
/// $feed = $arrayData['feed']['entry'];
 ///store_objects($feed);
    /// parce block ///

 


function store_objects($feed)
{
    static $i=0;
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

        $sql = gen_insert_sql($object, 'objects');
/*
        echo "<pre>";
        print_r($entry);
        print_r($object);
        echo $sql;
        die();
*/

        if(!mysql_query($sql))
        {
            echo mysql_error();//die();
        }

        echo ++$i % 100==0?$i:". ";
    }
}


function gen_insert_sql($values, $table)
{
    $r = array();
    foreach ($values as $k=>$value)
    {
        if(is_array($value)) continue;
        $r[] = "`".$k."`='".mysql_real_escape_string($value)."'";
    }

    $sql = 'INSERT INTO '.$table.' SET '.implode(',', $r);
    return $sql;
}
