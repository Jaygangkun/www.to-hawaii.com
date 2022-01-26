<?php
error_reporting(0);
ini_set('display_errors', 0);
$dbhost="localhost";
$dbuser='tohawaii_vrwin5m';
$dbpwd='@dvrjj4%&ww';
$dbname="tohawaii_kania_hawaii";

$con = mysqli_connect($dbhost,$dbuser,$dbpwd);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$dbcom = mysqli_select_db($con,$dbname);

if(!$dbcom){
  die("Failed to connect to DB: ".mysqli_error());
}
//Stage
// $token_url='https://channel-stage.homeaway.com/channel/accessToken';
// $clientKey="fcfc7123-c2c0-47ae-9dbd-06b8b9c73ef9";
// $clientsecret="f0836dff-2d58-4275-a904-16e0ee2d3b77";

//Live
$token_url='https://channel.homeaway.com/channel/accessToken';
$clientKey="84049f80-66ba-47d1-81c5-31a6aff6fe93";
$clientsecret="d906554e-99fc-47c8-aad8-c0c2fe53b183";


$sql = "SELECT date(last_imported_time) as last_imported_time,last_imported_rates FROM last_imported order by id desc limit 1";
$result = $con->query($sql);
$fromdate=date("Y-m-d");
$fromdateRates="1900-01-01";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $fromdate= $row["last_imported_time"];
	   $fromdateRates=$row["last_imported_rates"];
    }
} 
//URLS Stage
// $vacationRentalIndexFeedURL="https://channel-stage.homeaway.com/channel/vacationRentalIndexFeed?_restfully=true&fromDate=$fromdate&paged=true";
// $baseURl="https://channel-stage.homeaway.com";
// $vacationRentalIndexURL="https://channel-stage.homeaway.com/channel/vacationRentalAdvertisement?_restfully=true&unitUrl=";
// $vacationRentalRatesFeedURL="https://channel-stage.homeaway.com/channel/vacationRentalRatesFeed?_restfully=true&fromDate=$fromdateRates&paged=true";
//Stage

//URLS LIVE
$baseURl="https://channel.homeaway.com";
$vacationRentalIndexFeedURL="https://channel.homeaway.com/channel/vacationRentalIndexFeed?_restfully=true&fromDate=$fromdate&paged=true&geoStateProvince=HI";
$vacationRentalIndexURL="https://channel.homeaway.com/channel/vacationRentalAdvertisement?_restfully=true&unitUrl=";
$vacationRentalRatesFeedURL="https://channel.homeaway.com/channel/vacationRentalRatesFeed?_restfully=true&fromDate=$fromdateRates&paged=true";
$vacationRentalRatesURL="https://channel.homeaway.com/channel/vacationRentalRates?_restfully=true&unitUrl=";
//URLS LIVE

?>
