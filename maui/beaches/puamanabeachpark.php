<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Puamana Beach Park, Maui</title>
<meta name="description" content="Puamana Beach Park has a shallow nearshore ocean bottom that extends all the way out to the edge of the reef." />
<meta name="keywords" content="puamana beach park, maui, photos, reviews, map, weather, location, swimming, surfing" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/maui/beaches/puamanabeachpark.php" />
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
 &raquo; Puamana Beach Park</li>
</ol>

</div><h1 class="title"><span itemprop="name">Puamana Beach Park</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image" alt="Puamana Beach Park" src="../../../maui/beaches/images/puamanabeach/puamana_beach.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a   rel="../../../maui/beaches/images/puamanabeach/puamana_beach.jpg"  class="galImg"><img src="../../../maui/beaches/images/puamanabeach/puamana_beach.jpg"  class="thumb" alt="Puamana Beach Park"  /></a></li>
                      <li><a  rel="../../../maui/beaches/images/puamanabeach/sunny_day_on_the_beach.jpg"  class="galImg"><img src="../../../maui/beaches/images/puamanabeach/sunny_day_on_the_beach.jpg"  class="thumb" alt="Sunny day on the beach"  /></a></li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">Puamana Beach Park, Maui</h2>
                <p>Puamana is a narrow detrital sand beach, located just south of downtown Lahaina. The beach has a shallow nearshore ocean bottom that extends all the way out to the edge of the reef. Because of that, the swimming conditions are poor. The beach is mainly used by fishermen and surfers, mainly beginners and longboarders since the waves are usually not too big and easy to catch.</p>
<? include ("../../theme/text.html") ?> 
                <h3 class="big">Puamana Beach Park Overview</h3>
                <ul type="disc" class="mylist">
                  <li>Detrital sand  beach located just south of the heart of Lahaina</li>
                  <li>Poor swimming conditions due to shallow and rocky ocean bottom</li>
                  <li>Mainly used by fishermen and surfers</li>
                </ul><div style="clear:both"></div>
<br />
<h3 class="big">Vacation Rentals near Puamana Beach Park</h3>
<?php
show_widgets('Launiupoko','https://www.to-hawaii.com/maui/vacationrentals/launiupoko.php');
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
var myLatLng = new google.maps.LatLng(20.855165,-156.663886);
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">Honoapiilani Highway</span>, <span itemprop="addressLocality">Lahaina</span> <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96761</span> </div>
                    <br />
                    <strong>Directions:</strong> The beach parking lot is accessible from Honoapiilani Highway (look for the Puamana beach park sign). </div>
                  <div id="contenttab1" style="display:block;">
                   <a class="weatherwidget-io" href="https://forecast7.com/en/20d88n156d68/lahaina/?unit=us" data-label_1="LAHAINA" data-label_2="WEATHER" data-theme="pure" >LAHAINA WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <div id="contenttab3" style="display:none;">
                    <ul type="disc" class="mylist">
                      <li>Portable toilets</li>
                      <li>Picnic tables</li>
                      <li>Parking</li>
                      <li>No lifeguards</li>
                    </ul>
                  </div>
                  <div id="contenttab4" style="display:none;">
                    <ul type="disc" class="mylist">
                      <li>Surfing</li>
                      <li>Fishing</li>
                    </ul>
                  </div>
                  <p>
                    <?php $id="810"; include "../../reviews/main.php"; ?>
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