<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{

$page=$_POST['page'];
$tab=$_POST['tab'];

$db = mysql_connect('localhost','tohawaii_vrwin5m','@dvrjj4%&ww') or die("Database error");
mysql_select_db('tohawaii_tabdata', $db);


$query = mysql_query("SELECT * FROM tab_content WHERE tab=$tab AND page='$page'");
$row=mysql_fetch_array($query);
	
echo $row['content'].'[]';

//echo $page.'[]';


}


?>