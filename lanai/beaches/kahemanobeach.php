 <?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Kahemano Beach, Lanai</title>
<meta name="description" content="Kahemano Beach on Lanai with photos, map, reviews and beach info." />
<meta name="keywords" content="kahemano beach, lanai, photos, reviews, map, weather, fishing, location, sharks" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/lanai/beaches/kahemanobeach.php" />
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
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../lanai/">
 <span itemprop="name">Lanai</span></a>
 <span itemprop="position" content="2">&raquo; </span>
  </li> <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../lanai/beaches/">
 <span itemprop="name">Beaches</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Kahemano Beach</div>
          <div itemscope="itemscope" itemtype="http://schema.org/TouristAttraction">
            <h1><span itemprop="name">Kahemano Beach, Lanai</span></h1>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="clear"></div>
                <p>If you like to fish, Kahemano Beach is the perfect spot. There are all kinds of Hawaiian fish to catch. However, it&rsquo;s not a good beach for swimming because the inshore ocean bottom is very shallow and rocky.<br />
                  <br />
                  The Hawaiian meaning of the name Kahemano is &ldquo;school (of) sharks.&rdquo; The name refers to the common Hawaiian reef sharks that are often times seen here. They swim through the shallow channels in the reef, but why they are drawn to this beach is not known.</p>
                <p>So it&rsquo;s best to stay on land and relax in the sun. Kahemano Beach is mainly frequented by local fishermen. You need a four-wheel drive vehicle to access this beach, which is located on Lanai's east shore. </p>
               <? include ("../../theme/text-desktop-only.html") ?>
                <h2 class="big">Kahemano Beach Overview</h2>
                <ul type="disc" class="mylist">
                  <li>Good fishing beach, but not recommended for swimming</li>
                  <li>Rocky ocean bottom and shallow reef</li>
                  <li>Reef sharks frequent this beach</li></ul> <div style="clear:both"></div>
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
var myLatLng = new google.maps.LatLng(20.78895,-156.816811);
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">Keomuku Rd</span>, <span itemprop="addressLocality">Lanai City</span> <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96763</span> </div>
                  </div>
                  <div id="contenttab1" style="display:block;">
                   <a class="weatherwidget-io" href="https://forecast7.com/en/20d83n156d92/lanai-city/?unit=us" data-label_1="LANAI CITY" data-label_2="WEATHER" data-theme="pure" >LANAI CITY WEATHER</a>
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
                      <li>Fishing</li>
                    </ul>
                  </div>
                  <p>
                    <?php $id="255"; include "../../reviews/main.php"; ?>
                  </p>
                </div>
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
<? include ("../../theme/footers.html") ?>
</body>
</html>