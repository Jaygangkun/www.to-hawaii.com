<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sacred Falls, Oahu</title>
<meta name="description" content="Sacred Falls is a waterfall on the windward coast of Oahu. After a tragic rockslide on Mother's Day 1999 that killed eight people and injured 50 others, the trail to the waterfall was closed indefinitely." />
<meta name="keywords" content="sacred falls, oahu, state park, waterfall, rockslide, hike, trail, reviews, location, hauula" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/oahu/waterfalls/sacredfalls.php" />
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
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../oahu/">
 <span itemprop="name">Oahu</span></a>
 <span itemprop="position" content="2">&raquo; </span>
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../oahu/waterfalls/">
 <span itemprop="name">Waterfalls</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Sacred Falls</li>
</ol>

</div>
<div itemscope="itemscope" itemtype="http://schema.org/TouristAttraction">
<h1 class="title"><span itemprop="name">Sacred Falls</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image" alt="Sacred Falls" src="../../../oahu/waterfalls/images/sacredfalls/sacred_falls.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a  rel="../../../oahu/waterfalls/images/sacredfalls/sacred_falls.jpg"  class="galImg"><img src="../../../oahu/waterfalls/images/sacredfalls/sacred_falls.jpg"  class="thumb" alt="Sacred Falls"  /></a></li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">Sacred Falls, Oahu</h2>
                <p>Sacred Falls, which is named after the 1,370-acre state park that it resides in, is a beautiful waterfall on Oahu that is surrounded by rocky cliffs and greenery. It drops 80 feet (24 m) down into a pool. This waterfall used to be one of the most popular ones on the island when it was still accessible via a hiking trail.<br />
                  <br />
                  However, on Mother's Day of 1999, the trail was closed indefinitely after eight people were killed and 50 others were injured when boulders and rocks collapsed into the narrow Sacred Falls valley where the visitors were unable to escape from the falling debris. <br />
                  <br />
                  Even before the incident, the area was known to be dangerous because the footing on the park's trail could become very slippery, and deaths had occurred on the waterfall trail when water from flash floods in the mountains swept hikers down the canyon.<br />
                  <br />
                  The park still remains closed to the public, though there has been advocacy to reopen it with restrictions. For now, the only way you can see the falls is by air, such as while on a helicopter tour.</p>
             <? include ("../../theme/text.html") ?>
                <h2 class="big">Sacred Falls Overview</h2>
                <ul type="disc" class="mylist">
                  <li>Trail to Sacred Falls is CLOSED indefinitely after rockslide tragedy</li>
                  <li>The only way to see the waterfall is with a helicopter tour</li></ul> <div style="clear:both"></div>
                <br />
                <h3 class="big">Vacation Rentals near Sacred Falls</h3>
               
                <?php
show_widgets('hauula','https://www.to-hawaii.com/oahu/vacationrentals/hauula.php');
?><div id="glowmenu" class="glowingtabs">
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
var myLatLng = new google.maps.LatLng(21.573428,-157.91286);
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="addressLocality">Hauula</span> <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96717</span> </div>
                  </div>
                  <div id="contenttab1" style="display:block;">
                   <a class="weatherwidget-io" href="https://forecast7.com/en/21d59n157d92/hauula/?unit=us" data-label_1="HAUULA" data-label_2="WEATHER" data-theme="pure" >HAUULA WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <p>
                    <?php $id="123"; include "../../reviews/main.php"; ?>
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