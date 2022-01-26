<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hawaii Heritage Center, Oahu</title>
<meta name="description" content="The Hawaii Heritage Center is a nonprofit organization that educates people about the rich history of the Islands with the help of tours, workshops and public exhibits." />
<meta name="keywords" content="hawaii heritage center, honolulu, oahu, honolulu chinatown, museum, hours, admission" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/oahu/museums/hawaiiheritagecenter.php" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="../../theme/images/favicon.ico" />
<link href="../../style/style.css" rel="stylesheet" type="text/css" />

<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9348498266149552",
    enable_page_level_ads: true
  });
</script>
</head>
<body>
<? include ("../../theme/vrtopad.html") ?>
<div class="mainbg">
<div class="sand">
<div class="wrapper">
<div id="main-left"></div>
<div id="main-right">
<div class="main">
<div class="layout">
  <? include ("../../theme/top.html") ?>
  <div class="contentarea">
    <div id="wrapper" class="content_bottom" >
      <? include ("../../theme/left-oahu.html") ?>
      <div class="midpanel">
        <div class="inner">
  <div class="breadcrumbs" align="left">
   <ol class="breadcrumb2020" itemscope itemtype="http://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem"><a itemprop="item" href="../../../">
 <span itemprop="name">Home</span></a>
 <span itemprop="position" content="1">&raquo; </span>
  </li><li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../oahu/">
 <span itemprop="name">Oahu</span></a>
 <span itemprop="position" content="2">&raquo; </span>
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../oahu/museums/">
 <span itemprop="name">Museums</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Hawaii Heritage Center</li>
</ol>

</div>
<div itemscope="itemscope" itemtype="http://schema.org/TouristAttraction">
<h1 class="title"><span itemprop="name">Hawaii Heritage Center</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image" alt="Hawaii Heritage Center" src="../../../oahu/museums/images/hawaiiheritage/hawaii_heritage_center.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a  rel="../../../oahu/museums/images/hawaiiheritage/hawaii_heritage_center.jpg"  class="galImg"><img src="../../../oahu/museums/images/hawaiiheritage/hawaii_heritage_center.jpg"  class="thumb" alt="Hawaii Heritage Center"  /></a></li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">Hawaii Heritage Center, Oahu</h2>
                <p>The Hawaii Heritage Center is a nonprofit organization that educates people about the rich history of the Islands with the help of tours, workshops and public exhibits. The Center also organizes a bi-weekly guided tour of the nearby neighborhood Chinatown.</p>
                <p>The historical and cultural gallery at the Center was set up in 1980. The gallery has an amazing collection of historical artifacts on display, the majority of them discovered during the excavations carried out over the years by historians and archaeologists in the region. </p>
                <p><strong>Hours and admission:</strong><br />
                  <br />
                  Hawaii Heritage Center Gallery:
                  <time itemprop="OpeningHoursSpecification" datetime="Mo,Tu,We,Th,Fr,Sa 09:00-14:00">Mondays - Saturdays from 9 am to 2 pm </time>
                  <br />
                  Chinatown Historical Walking Tour: Wednesdays and Fridays, 9:30 am to 11:30 am (Tours will operate on holidays. Reservations not required.)<br />
                  Closed: Sundays and on all state holidays. The gallery is also closed on the last week of December and the first week of January.</p>
               <? include ("../../theme/text.html") ?>
                <h2 class="big">Hawaii Heritage Center Overview</h2>
                <ul type="disc" class="mylist">
                  <li>Museum provides informaton about the history and culture of Hawaii's multicultural heritage</li>
                  <li>Located in Honolulu's Chinatown</li></ul>
                 <div style="clear:both"></div>
                <br />
                <h3 class="big">Vacation Rentals near Hawaii Heritage Center</h3>
               
                <?php
show_widgets('honolulu','https://www.to-hawaii.com/oahu/vacationrentals/honolulu.php');
?><div style="clear:both"></div><div id="glowmenu" class="glowingtabs">
                  <table border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><ul>
                          <li class="selected" id="menu1"><a href="javascript: void(0)" onclick="product('1')"><span>Weather</span></a></li>
<li id="menu2"><a href="javascript: void(0)" onclick="product('2')"><span>Map</span></a></li>
                        </ul></td>
                    </tr>
                  </table>
                </div>
                <div id="tab_container">
                  <div id="contenttab2" style="display:none;">
                    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDD8fQd5oYYE3-H2HcOjd_qjJ1i1dWsjl4&sensor=false"></script>
                    <script>
function initialize() {
var myLatLng = new google.maps.LatLng(21.311690, -157.862747);
var mapOptions = {
    zoom: 17,
    center: myLatLng,
	mapTypeId: google.maps.MapTypeId.HYBRID
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);

  var image = '../../../images/beachmarker.png';
  var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });
}

</script>
                    <div id="map-canvas" style="width: 100%; height: 300px;"></div>
                    <br />
                    <strong>Location:</strong>
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">1040 Smith St</span>, <span itemprop="addressLocality">Honolulu</span> <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96817</span> </div>
                    <div style="clear:both; height:15px;"></div>
                    <strong>Directions:</strong> The Center is located in the heart of Honolulu's Chinatown, between N. King Street and N. Hotel Street.</div>
                  <div id="contenttab1" style="display:block;"><a class="weatherwidget-io" href="https://forecast7.com/en/21d31n157d86/honolulu/?unit=us" data-label_1="HONOLULU" data-label_2="WEATHER" data-theme="pure" >HONOLULU WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <p>
                    <?php $id="191"; include "../../reviews/main.php"; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="space-inner"></div>
      <? include ("../../theme/right-oahu.html") ?>
      <div class="white-space"></div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<? include ("../../theme/footers.html") ?>
</body>
</html>