<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Nanue Falls, Big Island</title>
<meta name="description" content="Nanue Falls is actually a series of waterfalls on the Big Island's Hamakua Coast (about 18 miles north of Hilo). What most people see of the waterfall is the lower end of it. Further upstream are larger waterfalls, but getting there requires a hike along Nanue Stream." />
<meta name="keywords" content="nanue falls, big island, hawaii, nanue falls photos, waterfall, reviews, map, weather, location" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/big-island/waterfalls/nanuefalls.php" />
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
 <a itemprop="item" href="../../big-island/waterfalls/">
 <span itemprop="name">Waterfalls</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Nanue Falls</li>
</ol>

</div>

<h1 class="title"><span itemprop="name">Nanue Falls</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image"  alt="Nanue Falls"  src="../../../big-island/waterfalls/images/nanuefalls/nanue_falls.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a  rel="../../../big-island/waterfalls/images/nanuefalls/nanue_falls.jpg" class="galImg"><img src="../../../big-island/waterfalls/images/nanuefalls/nanue_falls.jpg"  class="thumb" alt="Nanue Falls"  /></a></li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">Nanue Falls, Big Island</h2>
                <p>Nanue Falls is actually a series of waterfalls on the Big Island's Hamakua Coast (about 18 miles/29 km north of Hilo). What most people see of the waterfall is the lower end of it. Further upstream are larger waterfalls, but getting there requires a hike along Nanue Stream. </p>
                <p>It is a rather steep and unpleasant trail and involves boulder hopping along the stream, and there are many mosquitoes in this area. Downstream from the bridge is another waterfall, the top of which can be reached by following the steep trail that leads down from the guardrail 75 feet (23 m) beyond the bridge.</p>
                <p>Hiking along the stream is not a good idea because the boulders are slippery and there is always the danger of flash floods (sudden floods that can sweep you off your feet and injure you). So it is best to just view the stream and waterfall from the Nanue Stream bridge on Old Mamalahoa Highway (the name &quot;Nanue&quot; is etched into the stone bridge).</p>
                <? include ("../../theme/text.html") ?>
                <h2 class="big">Nanue Falls Overview</h2>
                <ul type="disc" class="mylist">
                  <li>Series of waterfalls along Nanue Stream</li>
                  <li>Best be seen from the Nanue Stream bridge</li>
                </ul><div style="clear:both"></div>
<br />
<h3 class="big">Vacation Rentals near Nanue Falls</h3>
<?php
show_widgets('96710','https://www.to-hawaii.com/big-island/vacationrentals/hamakua-coast.php');
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
var myLatLng = new google.maps.LatLng(19.925889,-155.158251);
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">Old Mamalahoa Highway</span>, <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96728</span> </div>
                    <div style="clear:both; height:15px;"></div>
                    <strong>Directions: </strong>Located on the Nanue Stream bridge on Old Mamalahoa Highway. There is a pullout area before the bridge.</div>
                  <div id="contenttab1" style="display:block;">
                   <a class="weatherwidget-io" href="https://forecast7.com/en/19d87n155d12/honomu/?unit=us" data-label_1="HONOMU" data-label_2="WEATHER" data-theme="pure" >HONOMU WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <p>
                    <?php $id="958"; include "../../reviews/main.php"; ?>
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