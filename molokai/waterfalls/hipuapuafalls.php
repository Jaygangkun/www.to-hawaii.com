 <?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hipuapua Falls, Molokai</title>
<meta name="description" content="Hipuapua Falls is one of two main waterfalls in Halawa Valley (the other one is Moa'ula Falls). This one is the taller of the two, dropping 500 feet (152 m)." />
<meta name="keywords" content="hipuapua falls, molokai, photos, reviews, map, weather, location, hipuapua waterfall, halawa valley" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/molokai/waterfalls/hipuapuafalls.php" />
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
      <? include ("../../theme/left-molokai.html") ?>

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
 <a itemprop="item" href="../../molokai/">
 <span itemprop="name">Molokai</span></a>
 <span itemprop="position" content="2">&raquo; </span>
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../molokai/waterfalls/">
 <span itemprop="name">Waterfalls</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Hipuapua Falls</li>
</ol>

</div>

            <h1 class="title"><span itemprop="name">Hipuapua Falls</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image" alt="Hipuapua Falls" src="../../../molokai/waterfalls/images/hipuapuafalls/hipuapua_falls.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a   rel="../../../molokai/waterfalls/images/hipuapuafalls/hipuapua_falls.jpg"   class="galImg"><img src="../../../molokai/waterfalls/images/hipuapuafalls/hipuapua_falls.jpg"  class="thumb" alt="Hipuapua Falls" /></a></li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">Hipuapua Falls, Molokai</h2>
                <p>Hipuapua Falls is one of two main waterfalls in <a href="../attractions/halawa-valley.php">Halawa Valley</a> (the other one is Moa'ula Falls). This one is the taller of the two, dropping 500 feet (152 m). It is also more difficult to access. It is a 4.5-mile (7.2 km) roundtrip hike. However, since one has to cross private lands to access it, one has to join a guided hike with a local tour operator (they have a permit to hike here). Like Moa'ula Falls, Hipuapua Falls can be seen from several lookout points along Highway 450. This is the easiest way to see the waterfall without requiring a strenuous hike. </p>
                             <? include ("../../theme/text.html") ?>
                <h2 class="big"><span class="small">Hipuapua Falls</span> Overview</h2>
                <ul type="disc" class="mylist">
                  <li>500-foot (152 m) waterfall in Halawa Valley</li>
                  <li>Trail to the waterfall leads through private lands - local tour operators who have obtained permission offer guided hikes</li>
                  <li>Hike is about 4.5 miles (7.2 km) long and involves crossing Halawa Stream</li>
                  <li>Bring mosquito repellent, water, and wear sturdy shoes</li></ul>  <div style="clear:both"></div>
                <br />
                <h3 class="big">Molokai Vacation Rentals</h3>
               
                <?php
show_widgets('96748','https://www.to-hawaii.com/molokai/vacationrentals/','rating_desc');
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
  var myLatLng = new google.maps.LatLng(21.155898, -156.766194);
  var mapOptions = {
    zoom: 13,
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="addressLocality">Halawa</span>, <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96748</span> </div>
                  </div>
                  <div id="contenttab1" style="display:block;">
                   <a class="weatherwidget-io" href="https://forecast7.com/en/21d09n157d02/kaunakakai/?unit=us" data-label_1="KAUNAKAKAI" data-label_2="WEATHER" data-theme="pure" >KAUNAKAKAI WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <p>
                    <?php $id="808"; include "../../reviews/main.php"; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="space-inner"></div>
        <? include ("../../theme/right-molokai.html") ?>
        <div class="white-space"></div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
<? include ("../../theme/footers.html") ?>
</body>
</html>