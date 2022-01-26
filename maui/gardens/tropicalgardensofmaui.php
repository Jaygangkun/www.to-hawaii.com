<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tropical Gardens of Maui</title>
<meta name="description" content="Tropical Gardens of Maui is a four-acre botanical garden and commercial nursery that occupies a gorgeous stretch of land in the Wailuku area near the historic Iao Valley." />
<meta name="keywords" content="tropical gardens of maui, wailuku, photos, reviews, map, weather, location, hours, admission" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/maui/gardens/tropicalgardensofmaui.php" />
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
      <? include ("../../theme/left-maui.html") ?>
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
 <a itemprop="item" href="../../maui/">
 <span itemprop="name">Maui</span></a>
 <span itemprop="position" content="2">&raquo; </span>
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../maui/gardens/">
 <span itemprop="name">Botanical Gardens</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Tropical Gardens of Maui</li>
</ol></div>
          <div itemscope="itemscope" itemtype="http://schema.org/TouristAttraction">
            <h1><span itemprop="name">Tropical Gardens of Maui</span></h1>
            <div class="new-custom">
              <div class="midpanel_row">
                <p>This four-acre botanical garden and commercial nursery occupies a gorgeous stretch of land in the Wailuku area of Maui near the historic <a href="../attractions/iaovalleystatepark.php">Iao Valley</a>. Established in 1987, the Tropical Gardens of Maui sit at an elevation of 800 feet (244 m) above sea level. Plant lovers and botanists alike can appreciate the stunning diversity of plants here ranging from tropical flowering trees to desert cacti and rare orchids. </p>
                
                <p>                  The tropical micro climate of these gardens provides ideal growing conditions for hundreds of plants from around the globe. Specimens include grammatophyllum speciosum, the largest orchid in the world; the lovely amherstia nobilis, considered to be one of the world's most beautiful flowers; the caryota gigas or Thai Mountain Giant; and the raphia palm, which has the longest leaves of any plant. You'll also find a grove of banyan trees that provides a habitat for dozens of orchids. Plants are marked, so you can identify them by their botanical name, common name and place of origin. </p>
                <p>                  The Tropical Gardens of Maui's commercial nursery offers a unique opportunity to take home some exotic and rare plants from Hawaii and beyond. The nursery's massive plant inventory includes genra, catteleya and oncidium alliance orchids as well as hibiscus, aroids, heliconia, ginvers, palms and other exotic plants. All plants are certified for export to the U.S. mainland. </p>
                <p>                  Visitors are welcome to explore the gardens and grounds. The self-guided tour takes 30 to 40 minutes and passes through all the gardens, a koi pond, palm grotto and Iao Stream. Visitors will also find a gift shop and picnic table area.  Call (808) 244-3085 for more information. </p>
                <p><strong>Hours: </strong><br />
                  <time itemprop="OpeningHoursSpecification" datetime="Mo,Tu,We,Th,Fr,Sa 09:00-17:00">Monday through Saturday: 9 am to 5 pm</time>
                  <br />
                </p>
               <? include ("../../theme/text.html") ?> 
                <h2 class="big">Tropical Gardens of Maui Overview</h2>
                <ul type="disc" class="mylist">
                  <li>Features a stunning diversity of plants here ranging from tropical flowering trees to desert cacti and rare orchids</li>
                  <li>Nursery offers a unique opportunity to take home some exotic and rare plants</li>
                </ul><div style="clear:both"></div>
<br />
<h3 class="big">Vacation Rentals near Tropical Gardens of Maui</h3>
<?php
show_widgets('Wailuku','https://www.to-hawaii.com/maui/vacationrentals/wailuku.php');
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
var myLatLng = new google.maps.LatLng(20.882589,-156.517381);
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">200 Iao Valley Road</span>, <span itemprop="addressLocality">Wailuku</span> <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96793</span> </div>
                    <div style="clear:both; height:15px;"></div>
                    <strong>Directions: </strong>The plantation is located just west of Wailuku.</div>
                  <div id="contenttab1" style="display:block;">
                   <a class="weatherwidget-io" href="https://forecast7.com/en/20d89n156d50/wailuku/?unit=us" data-label_1="WAILUKU" data-label_2="WEATHER" data-theme="pure" >WAILUKU WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <p>
                    <?php $id="672"; include "../../reviews/main.php"; ?>
                  </p>
                </div>
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
<? include ("../../theme/footers.html") ?>
</body>
</html>