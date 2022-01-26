<?php

// error_reporting(E_ALL);

// ini_set('display_errors', 1);

include('cronfiles/inf_checkrealtimeavailability.php');

session_start();

$db = mysql_connect('localhost','tohawaii_vrwin5m','@dvrjj4%&ww') or die("Database error");

mysql_select_db('tohawaii_kania_hawaii', $db);


function getObj($sort = null, $page = null, $region=null, $destination=null, $startdate=null, $enddate=null, $guest=null,$pagesize=null,$centerlatitude=null,$centerlongitude=null,$isHotel=null) {

	

	$centerlatitude = ($centerlatitude != null) ? $centerlatitude : "21.2759167";

	$centerlongitude = ($centerlongitude != null) ? $centerlongitude : "-157.8233677";

	

	

		

	//echo $sort;

	

	//echo $sort.'---'.$page.'---'.$region.'---'.$destination.'---'.$startdate.'---'.$enddate.'---'.$guest;

	

	$condition = '';

	

	if($isHotel=="hotel")

	{	 if(!empty($region) && empty($destination))

		 {

				$condition = "AND  (`address` like '%".mysql_real_escape_string($region)."%' OR `headline` like '%".mysql_real_escape_string($region)."%') ";

		 }

		 

	}

	else

	{

		 if(!empty($region) && empty($destination))

		 {

			$condition = "AND  (city = '" . mysql_real_escape_string($region) . "' OR postalCode = '" . mysql_real_escape_string($region) . "' OR  region like '%|".mysql_real_escape_string($region)."|%'  OR `headline` like '%".mysql_real_escape_string($region)."%')";

		   //$condition = " and region like '%|Waikiki|%'";

		 }

	}

	//echo $condition;

	

	if(!empty($destination)){

		$destination=str_replace(',','',$destination);

		$words = explode(' ',$destination);



		foreach($words as $key) {    

				if($key!='' && $key!='are' && $key!='am' && $key!='at' && $key!='they' && $key!='we' && $key!='the' && $key!='how' && $key!='is' && $key!='i' && $key!='or' && $key!='on' && $key!='of')

				{

					$key=str_replace('.','',$key);

					$condition .=" AND ((REPLACE(propertyName,'.','') like '%". mysql_real_escape_string($key) ."%') or region like '%|".mysql_real_escape_string($key)."|%') "; 

				}

		}

		 // $condition .=" AND (propertyName like '%". mysql_real_escape_string($destination) ."%' or address like '%". mysql_real_escape_string($destination) ."%' or  addre = '". mysql_real_escape_string($destination) ."')  ";

	}

	

	if(!empty($guest)){

		 $condition .=" AND sleeps>='".$guest."' ";

	}

	

	if(!empty($startdate)){

		$startdate = explode("/", $startdate);

		$startdate = $startdate[2]."-".$startdate[0]."-".$startdate[1];

		//$condition .=" AND unitUrl in ( select unitUrl from vacationRentalRates where '".$startdate."'>=beginDate )";

	}

	

	if(!empty($enddate)){

		$enddate = explode("/", $enddate);

		$enddate = $enddate[2]."-".$enddate[0]."-".$enddate[1];

		//$condition .=" AND unitUrl in ( select unitUrl from vacationRentalRates where '".$enddate."'<=endDate )";

	}

	

	

	

	if($centerlatitude!= "21.2759167")

	{

		//$condition .=" AND distance<50"; 

	}

	$masterquery="Select a.`postalCode`,a.`uniturl`, `bathrooms`, `bedrooms`,`registration_number`, `sleeps`,en_US_VRBO as href, `thumbnailUrl`, `headline`, description, `state`, `city`, `country`, `region`, `source`, `property_type`, `location_type`, `suitability`, `features`, `address`,round(price) as price,minimum_nights, `rating`, `review_count`,`latitude`, `longitude`,case when propertyName='' then trim(address) else CONCAT(CONCAT(propertyName,'(',trim(address)),'',')') end as addre,propertyName,

		(6371 *

			acos(

				cos( radians( $centerlatitude ) ) *

				cos( radians( `latitude` ) ) *

				cos(

					radians( `longitude` ) - radians( $centerlongitude )

				) +

				sin(radians($centerlatitude)) *

				sin(radians(`latitude`))

			)

		) as distance from `vacationrentalindex` a  inner join vacationrentalindexfeed b on a.uniturl=b.unitUrl and a.headline!='' and a.thumbnailUrl!='' and b.enabled=1";

		

		

    $uniqeKey=md5(uniqid(rand(), true));

// echo $sort;	

     // echo strpos($sort, 'distance');

	 $frommap=false;

	 if (strpos($sort, 'distance') !== false) {

    

	$frommap=true;

}

	    

	//if(!empty($startdate) &&  !empty($enddate) &&   !empty($destination)  && $frommap==false)

    if(!empty($startdate) &&  !empty($enddate) && $frommap==false)

	{

		$obj = new RealTimeAvilability();

		$var = $obj->getRealTimeAvilability("select * from ($masterquery) as vw where 1 and round(price)>0  and bedrooms>=0  $condition", $startdate, $enddate,$guest,$uniqeKey);

		$masterquery=str_replace('round(price)','round(cvr.price)',$masterquery);

		$masterquery.= " inner join  vacationrentalcurrentavailable cvr on cvr.uniqueid='$uniqeKey' and cvr.uniturl=a.uniturl";

		$_SESSION['uniqeKey_map'] =$uniqeKey;

		

	} 

	else if(!empty($startdate) &&  !empty($enddate)  && $frommap==true)

	{

		$masterquery=str_replace('round(price)','round(cvr.price)',$masterquery);

		$unk=$_SESSION['uniqeKey_map'];

		$masterquery.= " inner join  vacationrentalcurrentavailable cvr on cvr.uniqueid='$unk' and cvr.uniturl=a.uniturl";

		//echo $unk;

	}

		

	

	//echo $condition;

	

	include('oahu_regions.php');



	$registration = '';

	

	if (in_array(strtolower($region), $oahu_regions)) {

		//$registration = "and registration_number !=''";
		$registration = "and (registration_number like '%TA-%' or registration_number like '%TA %')";

	}

	

    $sql = "Select count(uniturl) as total from ($masterquery) as vw where 1 and round(price)>0  and bedrooms>=0 $registration $condition ";

	//echo $sql ;

    $res = mysql_fetch_assoc(mysql_query($sql));

    //print_r($res);

	

    $pages = getPages($res['total'], $page,$pagesize);

     //echo $pages ;

    //sorting

    $sort = explode('&', $sort);

    $orderBy = addslashes($sort[0]);

    $order = addslashes($sort[1]);

    $query = "select * from ($masterquery) as vw ";

    if ($order != null && $orderBy != null)

    {

        $query.= "WHERE 1 and round(price)>0 and bedrooms>=0 $registration $condition order by IF (ISNULL(`" . $orderBy . "`), 1,0), `" . $orderBy . "` " . $order . "";

		if($pagesize=="200")

		{

           $query.=" LIMIT " . 0 . ", " . $pagesize . " ";

		}

		else

		{

			$query.=" LIMIT " . $pages['startAt'] . ", " . $pages['perPage'] . " ";

		}

    }

	else

    {

        $query.=" where 1 and round(price)>0 and bedrooms>=0 $registration $condition order by  rating desc LIMIT " . $pages['startAt'] . ", " . $pages['perPage'] . " ";

    }

  

	

	

	// $file = 'test.txt';

	// file_put_contents($file, $query, FILE_APPEND | LOCK_EX);

	

	//echo $query;exit;

    $result = mysql_query($query);



	if ($result)

    {

        

		while ($row = mysql_fetch_assoc($result))

        {

            //$row['rates'] = json_decode($row['rates'], true);

            $data[] = $row;

        }



    }

	

	if(!isset ($data)){

		$data=array();

	}

	

    return array('data' => $data, 'totalPages' => $pages['totalPages']);

}



function getObjByCity($city, $page=null) {

    $sql = "Select count(a.uniturl) as total from vacationrentalindex a inner join vacationrentalindexfeed b on a.uniturl=b.unitUrl and b.enabled=1   where city = '" . $city . "'";

    $res = mysql_fetch_assoc(mysql_query($sql));

    $totalPages = getPages($res['total'], $page);



    $query = "Select * from `vacationrentalindex` where city = '" . $city . "'";

    $result = mysql_query($query);

    if ($result)

    {

        while ($row = mysql_fetch_assoc($result))

        {

            $data[] = $row;

        }

    }

    return array('data' => $data, 'totalPages' => $totalPages);

}



function getPages($count, $page,$pagesize=null) {

	$perPage = ($pagesize != null) ? (int) $pagesize : 15;

	//pagination

    $page = ($page != null) ? (int) $page : 1;

    $startAt = $perPage * ($page - 1);

    $totalPages = ceil($count / $perPage);

    return array('totalPages' => $totalPages, 'startAt' => $startAt, 'perPage'=>$perPage);

}



function printPage($countPage, $activePage = 1) {



    //if count page 0 or 1  - empty

    if ($countPage == 0 || $countPage == 1)

        return array();

    //if count page >10

    if ($countPage > 10)

    {

        if ($activePage <= 4 || $activePage + 3 >= $countPage)

        {

            for ($i = 0; $i <= 4; $i++)

            {

                $pageArray[$i] = $i + 1;

            }

            $pageArray[5] = "...";

            for ($j = 6, $k = 4; $j <= 10; $j++, $k--)

            {

                $pageArray[$j] = $countPage - $k;

            }

        } else

        {

            $pageArray[0] = 1;

            $pageArray[1] = 2;

            $pageArray[2] = "...";

            $pageArray[3] = $activePage - 2;

            $pageArray[4] = $activePage - 1;

            $pageArray[5] = $activePage;

            $pageArray[6] = $activePage + 1;

            $pageArray[7] = $activePage + 2;

            $pageArray[8] = "...";

            $pageArray[9] = $countPage - 1;

            ;

            $pageArray[10] = (int) $countPage;

        }

    }

    //if count page <10 - show all

    else

    {

        for ($n = 0; $n < $countPage; $n++)

        {

            $pageArray[$n] = $n + 1;

        }

    }

    return $pageArray;

}



function tokenTruncate($string, $your_desired_width) {

	

	

 if(strlen($string)<=145)

  {

	  return $string;

  }	  

  else

  {

	

  $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);

  $parts_count = count($parts);



  $length = 0;

  $last_part = 0;

  for (; $last_part < $parts_count; ++$last_part) {

    $length += strlen($parts[$last_part]);

    if ($length > $your_desired_width) { break; }

  }



	$retuen145=implode(array_slice($parts, 0, $last_part));

	echo $retuen145.'...';

  

  }

}

