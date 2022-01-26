<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Maili, Oahu</title>
<meta name="description" content="Maili is a small community on Oahu's leeward coast, located between Nanakuli and Waianae. Located in Maili is the Naval Radio Transmitter Facility Lualualei." />
<meta name="keywords" content="maili, oahu, hawaii, maili photos, map, reviews, location, weather" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/oahu/cities/maili.php" />
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
  <? include ("../../theme/top.html") ?><div itemscope="itemscope" itemtype="http://schema.org/TouristAttraction">
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
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../oahu/">
 <span itemprop="name">Oahu</span></a>
 <span itemprop="position" content="2">&raquo; </span>
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../oahu/cities/">
 <span itemprop="name">Cities and Towns</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Maili</li>
</ol>

</div>

<h1 class="title"><span itemprop="name">Ma'ili</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image"  alt="Ma'ili seen from the ocean" src="../../../oahu/cities/images/maili/maili_view_from_the_ocean.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a   rel=
"../../../oahu/cities/images/maili/maili_view_from_the_ocean.jpg"  class="galImg"><img src="../../../oahu/cities/images/maili/maili_view_from_the_ocean.jpg"  class="thumb" alt="Ma'ili seen from the ocean"  /></a></li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">Ma'ili, Oahu</h2>
                <p>Ma'ili (<a href="../../oahu/cities/p12.html" onclick="NewWindow(this.href,'name','2550','580','yes');return false">view panorama</a>) is a small community on Oahu's leeward coast, located between Nanakuli and Wai'anae. It has a nice long white-sand beach, <a href="../beaches/mailibeachpark.php">Ma'ili Beach Park</a>. In the Hawaiian language, ma'ili means &quot;pebbly,&quot; referring to the shoreline's rounded stones.</p>
                <? include ("../../theme/text.html") ?>
                <p>Located in Ma'ili is the Naval Radio Transmitter Facility Lualualei (NRTF Lualualei). The two tallest masts are 1,503 feet (458 m) tall. When they were built in 1972, they were the tallest man-made structure in the Western Hemisphere at the time. </p>
                <p>The facility is used to transmit high and low frequency radio signals to communicate with Navy vessels including submarines throughout the Pacific. Both the Navy and the Coast Guard use this facility.</p>
                
                <h3 class="big">Ma'ili Overview</h3>
                <ul type="disc" class="mylist">
                  <li>Small town on Oahu's leeward coast</li>
                  <li>Has a long white-sand beach and spacious beach park along Farrington Highway</li>
                  <li>Home to the Naval Radio Transmitter Facility Lualualei (NRTF Lualualei)</li>
                  <li>Population: 9,488 (2010 Census)</li>
                  <li>Zip code: 96792</li></ul> <div style="clear:both"></div>
                <br />
                <h3 class="big">Maili Vacation Rentals</h3>
               
                <?php
show_widgets('makaha','https://www.to-hawaii.com/oahu/vacationrentals/makaha.php');
?>
<div id="glowmenu" class="glowingtabs">
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
var myLatLng = new google.maps.LatLng(21.416677,-158.165882);
var mapOptions = {
zoom: 13,
center: myLatLng, 
mapTypeId: google.maps.MapTypeId.HYBRID
};
var map = new google.maps.Map(document.getElementById('map-canvas'),
mapOptions);
var myCoordinates = [
new google.maps.LatLng(21.428223,-158.180895),
new google.maps.LatLng(21.430220,-158.174028),
new google.maps.LatLng(21.413041,-158.151283),
new google.maps.LatLng(21.403372,-158.157978),
new google.maps.LatLng(21.401614,-158.163300),
new google.maps.LatLng(21.403852,-158.178921),
new google.maps.LatLng(21.406808,-158.179865),
new google.maps.LatLng(21.409206,-158.179607),
new google.maps.LatLng(21.412482,-158.178835),
new google.maps.LatLng(21.415438,-158.179264),
new google.maps.LatLng(21.418794,-158.180122),
new google.maps.LatLng(21.422230,-158.180294),
new google.maps.LatLng(21.427024,-158.181324),
new google.maps.LatLng(21.428302,-158.180938)
];
var polyOptions = {
path: myCoordinates,
strokeColor: '#00cc99',
strokeOpacity: 0.9,
strokeWeight: 3
}
var it = new google.maps.Polygon(polyOptions);
it.setMap(map);
}

</script>
                    <div id="map-canvas" style="width: 100%; height: 300px"></div>
                    <br />
                    <strong>Location:</strong>
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="addressLocality">Maili</span>, <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96792</span> </div>
                    <br />
                    <strong>Directions:</strong> Maili is a small town on Oahu's leeward (west) coast, between Nanakuli and Waianae.</div>
                  <div id="contenttab1" style="display:block;"><a class="weatherwidget-io" href="https://forecast7.com/en/21d44n158d18/waianae/?unit=us" data-label_1="WAIANAE" data-label_2="WEATHER" data-theme="pure" >WAIANAE WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <p>
                    <?php $id="1028"; include "../../reviews/main.php"; ?>
                  </p>
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
</div>
<? include ("../../theme/footers.html") ?>
</body>
</html>