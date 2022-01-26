<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ninole, Big Island</title>
<meta name="description" content="Ninole is a small community on the Big Island's lush Hamakua Coast. A nearby attraction is Waikaumalo Park." />
<meta name="keywords" content="ninole, big island, photos, reviews, map, weather, location" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/big-island/cities/ninole.php" />
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
  <? include ("../../theme/top-bigisland.html") ?>
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
 <a itemprop="item" href="../../big-island/cities/">
 <span itemprop="name">Towns</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Ninole</div>
          <div itemscope="itemscope" itemtype="http://schema.org/TouristAttraction">
            <h1><span itemprop="name">Ninole, Big Island</span></h1>
            <div class="new-custom">
              <div class="midpanel_row">
                <p>Ninole is a small community on the Big Island's lush Hamakua Coast. A nearby attraction is Waikaumalo Park. Even though the town is small, it has its own post office.</p>

                <h3 class="big">Ninole Overview</h3>
                <ul type="disc" class="mylist">
                  <li>Small town on the Hamakua Coast</li>
                  <li>Lush surroundings, near Waikaumalo Park</li>
                </ul><div style="clear:both"></div>
<br />
<h3 class="big">Vacation Rentals near Ninole</h3>
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
var myLatLng = new google.maps.LatLng(19.925546,-155.180261);
var mapOptions = {
zoom: 13,
center: myLatLng, 
mapTypeId: google.maps.MapTypeId.HYBRID
};
var map = new google.maps.Map(document.getElementById('map-canvas'),
mapOptions);
var myCoordinates = [
new google.maps.LatLng(19.946565,-155.174289),
new google.maps.LatLng(19.936762,-155.182958),
new google.maps.LatLng(19.924376,-155.192785),
new google.maps.LatLng(19.919857,-155.196648),
new google.maps.LatLng(19.915701,-155.191069),
new google.maps.LatLng(19.907712,-155.180984),
new google.maps.LatLng(19.920320,-155.167379),
new google.maps.LatLng(19.932525,-155.156693),
new google.maps.LatLng(19.946484,-155.174289)
];
var polyOptions = {
path: myCoordinates,
strokeColor: '#00cc99',
strokeOpacity: 0.9,
strokeWeight: 3
}
var it = new google.maps.Polygon(polyOptions);
it.setMap(map);
}

</script>
                    <div id="map-canvas" style="width: 100%; height: 300px"></div>
                    <br />
                    <strong>Location:</strong> Ninole, Hawaii 96773 </div>
                  <div id="contenttab1" style="display:block;">
                  <a class="weatherwidget-io" href="https://forecast7.com/en/19d94n155d17/ninole/?unit=us" data-label_1="NINOLE" data-label_2="WEATHER" data-theme="pure" >NINOLE WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <p>
                    <?php $id="574"; include "../../reviews/main.php"; ?>
                  </p>
                </div>
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
<? include ("../../theme/footers.html") ?>
</body>
</html>