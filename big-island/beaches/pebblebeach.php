<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pebble Beach, Big Island</title>
<meta name="description" content="Pebble Beach on the Big Island gets its name from the black lava pebbles that line its coast, creating a unique and attractive landscape." />
<meta name="keywords" content="pebble beach, big island, photos, reviews, map, weather, location, diving, snorkeling" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/big-island/beaches/pebblebeach.php" />
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
  <? include ("../../theme/top-bigisland.html") ?><div itemscope="itemscope" itemtype="http://schema.org/TouristAttraction">
  <div class="contentarea">
    <div id="wrapper" class="content_bottom" >
      <? include ("../../theme/left-bigisland.html") ?>
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
 <a itemprop="item" href="../../big-island/">
 <span itemprop="name">Big Island</span></a>
 <span itemprop="position" content="2">&raquo; </span>
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../big-island/beaches/">
 <span itemprop="name">Beaches</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Pebble Beach</li>
</ol>

</div><h1 class="title"><span itemprop="name">Pebble Beach</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image"  alt="Pebble Beach" src="../../../big-island/beaches/images/pebblebeach/pebble_beach.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a  rel="../../../big-island/beaches/images/pebblebeach/pebble_beach.jpg"  class="galImg"><img src="../../../big-island/beaches/images/pebblebeach/pebble_beach.jpg"  class="thumb" alt="Pebble Beach"  /></a> </li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">Pebble Beach, Big Island</h2>
                <p>Located on the Big Island's Kona Coast, Pebble Beach gets its name from the black lava pebbles that line its coast, creating a unique and attractive landscape. The beach is home to a rich marine ecosystem. Just below the surface, there is a wide array of ridges, pinnacles and reefs, all teeming with fish and other native marine life. Some of these ridges lead to steep drop-offs. </p>
                <p>Even though this sounds like the perfect snorkeling or diving spot, the shorebreak is treacherous here and strong currents are almost always present. The beach is also not the best place to sit down for a picnic because there is no sand and the pebbles can get quite hot during mid-day and are not too comfortable to sit on. But it's still an interesting place to visit to listen to the surf wash ashore and toss the pebbles around.</p>
                <? include ("../../theme/text.html") ?>
                <h2 class="big">Pebble Beach Overview</h2>
                <ul type="disc" class="mylist">
                  <li>Remote beach with strong shorebreak</li>
                  <li>Shoreline is composed of pebbles</li>
                </ul><div style="clear:both"></div>
<br />
<h3 class="big">Vacation Rentals near Pebble Beach</h3>
<?php
show_widgets('Kona Coast','https://www.to-hawaii.com/big-island/vacationrentals/kona-coast.php');
?>
                <div id="glowmenu" class="glowingtabs">
                  <table border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><ul>
                          <li class="selected" id="menu1"><a href="javascript: void(0)" onclick="product('1')"><span>Weather</span></a></li>
<li id="menu2"><a href="javascript: void(0)" onclick="product('2')"><span>Map</span></a></li>
                          <li id="menu3"><a href="javascript: void(0)" onclick="product('3')"><span>Facilities</span></a></li>
                          <li id="menu4"><a href="javascript: void(0)" onclick="product('4')"><span>Activities</span></a></li>
                        </ul></td>
                    </tr>
                  </table>
                </div>
                <div id="tab_container">
                  <div id="contenttab2" style="display:none;">
                    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDD8fQd5oYYE3-H2HcOjd_qjJ1i1dWsjl4&sensor=false"></script>
                    <script>
function initialize() {
var myLatLng = new google.maps.LatLng(19.313271,-155.887784);
var mapOptions = {
    zoom: 15,
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">Mapuna Rd</span>, <span itemprop="addressLocality">Honaunau</span> <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96726</span> </div>
                    <div style="clear:both; height:15px;"></div>
                    <strong>Directions: </strong>Access to Pebble Beach is a bit of a challenge. The most common route is through the Kona Paradise subdivision, about an hour's drive south of Kona. Between mile markers 96 and 97 on Highway 11, turn towards the ocean. From here, you'll follow a very steep winding road leading to the beach (it is 6,000 feet long and drops 1,000 feet in elevation). A four-wheel drive vehicle is best for this terrain. Parking is limited. </div>
                  <div id="contenttab1" style="display:block;">
                   <a class="weatherwidget-io" href="https://forecast7.com/en/19d45n155d84/honaunau-napoopoo/?unit=us" data-label_1="HONAUNAU-NAPOOPOO" data-label_2="WEATHER" data-theme="pure" >HONAUNAU-NAPOOPOO WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <div id="contenttab3" style="display:none;">
                    <ul type="disc" class="mylist">
                      <li>No facilities</li>
                      <li>No lifeguards</li>
                    </ul>
                  </div>
                  <div id="contenttab4" style="display:none;">
                    <ul type="disc" class="mylist">
                      <li>None</li>
                    </ul>
                  </div>
                  <p>
                    <?php $id="644"; include "../../reviews/main.php"; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="space-inner"></div>
        <? include ("../../theme/right-bigisland.html") ?>
        <div class="white-space"></div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
<? include ("../../theme/footers.html") ?>
</body>
</html>