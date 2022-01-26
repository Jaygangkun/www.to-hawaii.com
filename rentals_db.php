<?php

$db = mysql_connect('localhost','tohawaii_vrwin5m','@dvrjj4%&ww') or die("Database error");
mysql_select_db('tohawaii_kania_hawaii', $db);

function getObj($sort = null, $page = null)
{
    $sql = "Select count(id) as total from objects ";
    $res = mysql_fetch_assoc(mysql_query($sql));
    $pages = getPages($res['total'], $page);

    //sorting
    $sort = explode('&', $sort);
    $orderBy = $sort[0];
    $order = $sort[1];
    $query = "Select * from `objects` ";
    if ($order != null && $orderBy != null)
    {
        $query.= "order by IF (ISNULL(`" . $orderBy . "`), 1,0), `" . $orderBy . "` " . $order . "";
        $query.=" LIMIT " . $pages['startAt'] . ", " . $pages['perPage'] . " ";
    } else
    {
        $query.=" where 1 LIMIT " . $pages['startAt'] . ", " . $pages['perPage'] . " ";
    }
    $result = mysql_query($query);
    if ($result)
    {
        while ($row = mysql_fetch_assoc($result))
        {
            $row['rates'] = json_decode($row['rates'], true);
            $data[] = $row;
        }
//echo "<pre>";
//var_export($data);
//echo "</pre>";
    }
    return array('data' => $data, 'totalPages' => $totalPages);
}

function getObjByCity($city, $page=null)
{
    $sql = "Select count(id) as total from `objects` where city = '" . $city . "'";
    $res = mysql_fetch_assoc(mysql_query($sql));
    $totalPages = getPages($res['total'], $page);

    $query = "Select * from `objects` where city = '" . $city . "'";
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

function getPages($count, $page)
{
    //pagination
    $perPage = 35;
    $page = ($page != null) ? (int) $page : 1;
    $startAt = $perPage * ($page - 1);
    $totalPages = ceil($r['total'] / $perPage);
    return array('totalPages' => $totalPages, 'startAt' => $startAt, 'perPage'=>$perPage);
}

function printPage($countPage, $activePage = 1)
{

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
