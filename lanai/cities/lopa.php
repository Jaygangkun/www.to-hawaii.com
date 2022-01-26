 <?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lopa, Lanai</title>
<meta name="description" content="Lopa is an ancient seaside village on Lanai, located on the southeastern coast of the island, 7 miles off the end of Keomuku Highway, down a rough dirt road, which is navigable only with a four-wheel drive." />
<meta name="keywords" content="lopa, lanai, photos, reviews, map, weather, location, fishpond" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/lanai/cities/lopa.php" />
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
      <? include ("../../theme/left-lanai.html") ?>

        <div class="midpanel">
          <div class="inner">
<div class="breadcrumbs" align="left">
   <ol class="breadcrumb2020" itemscope itemtype="http://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem"><a itemprop="item" href="../../../">
 <span itemprop="name">Home</span></a>
 <span itemprop="position" content="1">&raquo; </span>
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem"> <a itemprop="item" href="../../lanai/">
 <span itemprop="name">Lanai</span></a>
 <span itemprop="position" content="2">&raquo; </span>
  </li>
   <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../lanai/cities/">
 <span itemprop="name">Towns</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Lopa</li>
</ol>

</div>

<h1 class="title"><span itemprop="name">Lopa</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image" alt="Lopa Beach"  src="../../../lanai/cities/images/lopabeach/lopa_beach.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a   rel="../../../lanai/cities/images/lopabeach/lopa_beach.jpg" class="galImg"><img src="../../../lanai/cities/images/lopabeach/lopa_beach.jpg"  class="thumb" alt="Lopa Beach"   /></a></li>
                      <li><a  rel="../../../lanai/cities/images/lopabeach/lopa_beach_2.jpg"  class="galImg"><img src="../../../lanai/cities/images/lopabeach/lopa_beach_2.jpg"  class="thumb" alt="Remote Lanai beach"  /></a></li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">Lopa, Lanai</h2>
                <p>The ancient seaside village of Lopa is located on the southeastern coast of Lanai, 7 miles (11.3 km) off the end of Keomuku Highway, down a rough dirt road, which is navigable only with a four-wheel drive.</p>
                <p>Lopa is an old Hawaiian word meaning &quot;tenant farmer,&quot; but the reason behind how the area got its name is unknown. This former seaside village's most astounding feature is the ancient fishpond, which is called Loko Lopa. It has been designated as a seabird sanctuary. </p>
                <p>The secluded Lopa Beach features a long white-sand beach, which begins on the south side of Kikoa Point and ends just past the ancient fishpond. The nearshore ocean bottom is rocky and shallow, which makes swimming tricky here. The area is mainly frequented by local fishermen as there are no facilities.</p>
                   <? include ("../../theme/text.html") ?>
                <h2 class="big">Lopa Overview</h2>
                <ul type="disc" class="mylist">
                  <li>Ancient seaside village on Lanai's southeastern shore</li>
                  <li>Location of an ancient Hawaiian fishpond</li></ul> <div style="clear:both"></div>
                <br />
                <h3 class="big">Lanai Vacation Rentals</h3>
               
                <?php
show_widgets('96763','https://www.to-hawaii.com/lanai/vacationrentals/','price_asc');
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
var myLatLng = new google.maps.LatLng(20.804165, -156.808243);
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="addressLocality">Lopa (southeastern shore of the island)</span>, <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96763</span> </div>
                  </div>
                  <div id="contenttab1" style="display:block;">
                   <a class="weatherwidget-io" href="https://forecast7.com/en/20d83n156d92/lanai-city/?unit=us" data-label_1="LANAI CITY" data-label_2="WEATHER" data-theme="pure" >LANAI CITY WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <p>
                    <?php $id="236"; include "../../reviews/main.php"; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="space-inner"></div>
        <? include ("../../theme/right-lanai.html") ?>
        <div class="white-space"></div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
<? include ("../../theme/footers.html") ?>
</body>
</html>
