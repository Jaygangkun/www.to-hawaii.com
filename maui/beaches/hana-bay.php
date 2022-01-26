<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hana Bay (Hana Beach Park), Maui</title>
<meta name="description" content="Located within Hana Bay is Hana Beach Park, which has a long black-sand beach and a grassy area with picnic tables. Local families like to gather here for a picnic." />
<meta name="keywords" content="hana bay, maui, black sand beach, hana beach park, lava, erosion, swimming, photos, reviews, map, weather, location" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/maui/beaches/hana-bay.php" />
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
      <? include ("../../theme/left-maui.html") ?>
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
 <a itemprop="item" href="../../maui/">
 <span itemprop="name">Maui</span></a>
 <span itemprop="position" content="2">&raquo; </span>
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../maui/beaches/">
 <span itemprop="name">Beaches</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Hana Bay</li>
</ol>

</div><h1 class="title"><span itemprop="name">Hana Beach Park</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image" alt="Hana Beach Park" src="../../../maui/beaches/images/hanabay/hana_beach_park.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a   rel="../../../maui/beaches/images/hanabay/hana_beach_park.jpg"  class="galImg"><img src="../../../maui/beaches/images/hanabay/hana_beach_park.jpg"  class="thumb" alt="Hana Beach Park"  /></a></li>
                      <li><a  rel="../../../maui/beaches/images/hanabay/hana_bay.jpg"  class="galImg"><img src="../../../maui/beaches/images/hanabay/hana_bay.jpg"  class="thumb" alt="Hana Bay"  /></a></li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">Hana Bay (Hana Beach Park), Maui</h2>
                <p>Located within Hana Bay is Hana Beach Park, which has a long black-sand beach and is the safest swimming beach along the East Maui coast. The bay is protected by a coral reef and harbored from big swells by its curved shape. Local families like to gather here and picnic. The beach park has a grassy area with picnic tables. On the right side of the park is Hana Pier. Outrigger canoe racing is frequently practiced in Hana Bay. </p>
              <? include ("../../theme/text.html") ?> 
                <h3 class="big">Hana Beach Park Overview</h3>
                <ul type="disc" class="mylist">
                  <li>Black-sand beach that was created after years of lava erosion from a nearby stream</li>
                  <li>Good beach for swimming when the ocean is calm</li>
                  <li>Main beach park in Hana - popular gathering spot among local residents</li>
                </ul><div style="clear:both"></div>
<br />
<h3 class="big">Vacation Rentals near Hana Bay</h3>
<?php
show_widgets('Hana','https://www.to-hawaii.com/maui/vacationrentals/hana.php');
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
var myLatLng = new google.maps.LatLng(20.755072,-155.983625);
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">Keawa Pl</span>, <span itemprop="addressLocality">Hana</span> <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96713</span> </div>
                  </div>
                  <div id="contenttab1" style="display:block;">
                   <a class="weatherwidget-io" href="https://forecast7.com/en/20d76n155d99/hana/?unit=us" data-label_1="HANA" data-label_2="WEATHER" data-theme="pure" >HANA WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <div id="contenttab3" style="display:none;">
                    <ul type="disc" class="mylist">
                      <li>Restrooms</li>
                      <li>Showers</li>
                      <li>Picnic tables</li>
                      <li>Pavilion</li>
                      <li>No lifeguards</li>
                    </ul>
                  </div>
                  <div id="contenttab4" style="display:none;">
                    <ul type="disc" class="mylist">
                      <li>Swimming</li>
                      <li>Snorkeling</li>
                      <li>Canoeing</li>
                    </ul>
                  </div>
                  <p>
                    <?php $id="481"; include "../../reviews/main.php"; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="space-inner"></div>
        <? include ("../../theme/right-maui.html") ?>
        <div class="white-space"></div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
<? include ("../../theme/footers.html") ?>
</body>
</html>