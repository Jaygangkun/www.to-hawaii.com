<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Honomalino Bay, Big Island</title>
<meta name="description" content="This secluded gray-sand beach on the Big Island's southwestern shore is a real gem. Fringed by coconut palms, Honomalino Bay offers good swimming conditions when the ocean is calm." />
<meta name="keywords" content="honomalino bay, big island, photos, reviews, map, weather, location" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/big-island/beaches/honomalinobay.php" />
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
 &raquo; Honomalino Bay</li>
</ol>

</div><h1 class="title"><span itemprop="name">Honomalino Bay</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image"  alt="Honomalino Bay" src="../../../big-island/beaches/images/honomalino/honomalino_bay.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a  rel="../../../big-island/beaches/images/honomalino/honomalino_bay.jpg"  class="galImg"><img src="../../../big-island/beaches/images/honomalino/honomalino_bay.jpg"  class="thumb" alt="Honomalino Bay"  /></a> </li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">Honomalino Bay, Big Island</h2>
                <p>This secluded gray-sand beach on the Big Island's southwestern shore is a real gem. Fringed by coconut palms and kiawe trees, Honomalino Bay offers good swimming and snorkeling conditions when the ocean is calm. The beach is fronted by a shallow sandbar, which drops off sharply further out.</p>
                <p>The small bay is accessible via a 20-minute walk along a trail that begins at neighboring Miloli'i Beach Park. </p>
                <? include ("../../theme/text-desktop-only.html") ?>
                <h2 class="big">Honomalino Bay Overview</h2>
                <ul type="disc" class="mylist">
                  <li>Small, protected bay on the Big Island's southwest shore, south of Kona</li>
                  <li>Gray-sand beach backed by palm trees</li>
                  <li>Beach sand is a mixture of black sand from lava and white sand</li>
                  <li>Bay is never crowded and only accessible via a 20-minute walk</li>
                  <li>Beach has eroded considerably in the last century</li>
                </ul><div style="clear:both"></div>
<br />
<h3 class="big">Vacation Rentals near Honomalino Bay</h3>
<?php
show_widgets('Captain Cook','https://www.to-hawaii.com/big-island/vacationrentals/captain-cook.php');
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
var myLatLng = new google.maps.LatLng(19.172253,-155.906937);
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">Milolii Rd</span>, <span itemprop="addressLocality">Captain Cook</span> <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96704</span> </div>
                    <div style="clear:both; height:15px;"></div>
                    <strong>Directions: </strong>The trail begins at Miloli'i Beach Park between the yellow church and the restrooms. The trail leads along the coast. Keep in mind that some areas here are private property, so stay on the trail. If you come across a fork on the trail, go right to avoid trespassing. A few homes are located near the beach.</div>
                  <div id="contenttab1" style="display:block;">
                    <a class="weatherwidget-io" href="https://forecast7.com/en/19d50n155d92/captain-cook/?unit=us" data-label_1="CAPTAIN COOK" data-label_2="WEATHER" data-theme="pure" >CAPTAIN COOK WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <div id="contenttab3" style="display:none;">
                    <ul type="disc" class="mylist">
                      <li>None</li>
                    </ul>
                  </div>
                  <div id="contenttab4" style="display:none;">
                    <ul type="disc" class="mylist">
                      <li>Swimming</li>
                      <li>Snorkeling</li>
                    </ul>
                  </div>
                  <p>
                    <?php $id="609"; include "../../reviews/main.php"; ?>
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