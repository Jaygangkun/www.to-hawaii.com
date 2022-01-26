<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Waiakalua Beach, Kauai</title>
<meta name="description" content="Waiakalua Beach doesn't see all too many visitors, mainly because it is accessible only via a very steep dirt trail. However, those who make it here can enjoy a peaceful day on a remote beach without any crowds." />
<meta name="keywords" content="waiakalua beach, kauai, photos, reviews, map, weather, location, swimming" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/kauai/beaches/waiakaluabeach.php" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
      <? include ("../../theme/left-kauai.html") ?>
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
 <a itemprop="item" href="../../kauai/">
 <span itemprop="name">Kauai</span></a>
 <span itemprop="position" content="2">&raquo; </span>
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../kauai/beaches/">
 <span itemprop="name">Beaches</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Waiakalua Beach</div>
          <div itemscope="itemscope" itemtype="http://schema.org/TouristAttraction">
            <h1><span itemprop="name">Waiakalua Beach, Kauai</span></h1>
            <div class="new-custom">
              <div class="midpanel_row">
                <p>Waiakalua Beach doesn't see all too many visitors, mainly because it is accessible only via a very steep dirt trail. However, those who make it here can enjoy a peaceful day on a remote beach without crowds. </p>
                <p>Even though the beach is a nice spot for a picnic and there are some shady spots, it can be a challenge to carry  picnic supplies down to the beach and then back up again. </p>
                <p>Offshore is a long fringing reef. Snorkeling is possible here, but only when the ocean is calm. The nearshore ocean bottom is shallow and rip currents are often times present, so it is rather a spot for experienced snorkelers.</p>
                <p>It may be best just to stay on land and enjoy the surroundings. There is a freshwater spring at the far end of the beach and a rocky point, cutting Waiakalua Beach in half. A 15-30 minute walk east leads to the even more remote Pila'a Beach. </p>
                <? include ("../../theme/text-desktop-only.html") ?>
                <h2 class="big">Waiakalua Beach Overview</h2>
                <ul type="disc" class="mylist">
                  <li>Secluded beach - accessible via a steep trail (5-10 minute hike)</li>
                  <li>Freshwater spring at one end of the beach</li></ul>
                <div style="clear:both"></div>
<br />
<h3 class="big">Vacation Rentals near Waiakalua Beach</h3>
<?php
show_widgets('Kilauea','https://www.to-hawaii.com/kauai/vacationrentals/kilauea.php');
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
                    <script type="text/javascript">
function initialize() {
var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(22.215616,-159.37383),
	mapTypeId: google.maps.MapTypeId.HYBRID
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);
  setMarkers(map, beaches);
}
var beaches = [
  ['', 22.216247,-159.374919, 2],
  ['', 22.215546,-159.372135, 1]    
];

function setMarkers(map, locations) {
  var image = {
    url: '../../../images/beachmarker.png',
  };
  var shape = {
      coord: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
  };
  for (var i = 0; i < locations.length; i++) {
    var beach = locations[i];
    var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
        shape: shape,
        title: beach[0],
		zIndex: beach[3]

    });
  }
}

</script>
                    <div id="map-canvas" style="width: 100%; height: 300px;"></div>
                    <br />
                    <strong>Location:</strong>
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="addressLocality">North shore of Kauai</span>, <span itemprop="addressRegion">Hawaii</span> </div>
                    <div style="clear:both; height:15px;"></div>
                    <strong>Directions:</strong> From Kuhio Highway (Hwy 56), turn onto North Waiakalua Road. Just before the end of the road, take the dirt road on the left. From here, take the steep trail on your left that leads to the beach.</div>
                  <div id="contenttab1" style="display:block;">
                   <a class="weatherwidget-io" href="https://forecast7.com/en/22d21n159d41/kilauea/?unit=us" data-label_1="KILAUEA" data-label_2="WEATHER" data-theme="pure" >KILAUEA WEATHER</a>
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
                      <li>Limited snorkeling</li>
                    </ul>
                  </div>
                  <p>
                    <?php $id="348"; include "../../reviews/main.php"; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="space-inner"></div>
      <? include ("../../theme/right-kauai.html") ?>
      <div class="white-space"></div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<? include ("../../theme/footers.html") ?>
</body>
</html>