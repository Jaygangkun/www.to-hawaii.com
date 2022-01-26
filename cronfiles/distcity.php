<?php
include('inf_gettoken.php');


$sqlindexfeed = "SELECT distinct `city`,`region` FROM `vacationrentalindex` WHERE `region`!=''";
$resultindexfeed = $con->query($sqlindexfeed);
if ($resultindexfeed->num_rows > 0) {
    // output data of each row
	echo '<table>';
    while($rowindexfeed = $resultindexfeed->fetch_assoc()) {
      echo '<tr><td>'.$rowindexfeed["city"].'</td><td>'.$rowindexfeed["region"].'</td></tr>';
	 
}
echo '</table>'; 
}







?>