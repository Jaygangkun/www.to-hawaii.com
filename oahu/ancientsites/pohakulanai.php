<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pohaku Lanai, Oahu</title>
<meta name="description" content="Pohaku Lana'i is an ancient site located at Kaiaka Bay Beach Park. What looks like a giant stone mushroom are actually two limestones, one sitting on top of the other." />
<meta name="keywords" content="pohaku lanai, oahu, photos, kaiaka bay, balancing rock, map, reviews, location" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/oahu/ancientsites/pohakulanai.php" />
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
 <a itemprop="item" href="../../oahu/ancientsites/">
 <span itemprop="name">Ancient Sites</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Pohaku Lana'i</li>
</ol>

</div>
<div itemscope="itemscope" itemtype="http://schema.org/TouristAttraction">
<h1 class="title"><span itemprop="name">Pohaku Lana'i</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image" alt="Pohaku Lana'i" src="../../../oahu/ancientsites/images/pohakulanai/pohaku_lanai.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a  rel="../../../oahu/ancientsites/images/pohakulanai/pohaku_lanai.jpg"  class="galImg"><img src="../../../oahu/ancientsites/images/pohakulanai/pohaku_lanai.jpg"  class="thumb" alt="Pohaku Lana'i"  /></a></li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">Pohaku Lana'i, Oahu</h2>
                <p>What looks like a giant stone mushroom are actually two limestones, one sitting on top of the other (<a href="../../oahu/ancientsites/p5.html" onclick="NewWindow(this.href,'name','2550','850','yes');return false">view panorama</a>). This ancient site is also referred to as a balancing rock. The lower portion is about 6 feet (1.8 m) high and the top one is balanced on the lower platform. Altogether the two rocks are about 12 feet (3.7 m) high and 93 feet (28.3 m) in circumference.</p>
                <p>Legend has it that the limestone floated ashore from the distant land of Kahiki. Hawaiian chiefs used to worship their local god here. It is also believed that the stone was used as a lookout point for fishermen.</p>
  <? include ("../../theme/text.html") ?> 
                <h2 class="big">Pohaku Lana'i Overview</h2>
                <ul type="disc" class="mylist">
                  <li>Two limestones, one sitting on top of the other</li>
                  <li>Looks like a giant stone mushroom</li>
                  <li>Legend says that the stone floated across the Pacific from the distand land of Kahiki<br />
                  </li></ul>   <div style="clear:both"></div>
                 <br />  <h3 class="big">Vacation Rentals near Pohaku Lana'i</h3>
                <?php
show_widgets('haleiwa','https://www.to-hawaii.com/oahu/vacationrentals/haleiwa.php');
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
var myLatLng = new google.maps.LatLng(21.58651,-158.116914);
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">Kaiaka Bay Beach Park, 66-449 Haleiwa Road</span>, <span itemprop="addressLocality">Haleiwa</span> <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96712</span> </div>
                    <div style="clear:both; height:15px;"></div>
                    <strong>Directions:</strong> <span class="big">Pohaku Lanai is located on the west side of Kaiaka Bay Beach Park in Haleiwa on Oahu's north shore</span>. It can easily be spotted along the road that leads through the beach park.</div>
                  <div id="contenttab1" style="display:block;">
                 <a class="weatherwidget-io" href="https://forecast7.com/en/21d59n158d10/haleiwa/?unit=us" data-label_1="HALEIWA" data-label_2="WEATHER" data-theme="pure" >HALEIWA WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <p>
                    <?php $id="910"; include "../../reviews/main.php"; ?>
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