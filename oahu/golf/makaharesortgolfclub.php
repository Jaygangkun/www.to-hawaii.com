<?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Makaha Resort Golf Club, Oahu</title>
<meta name="description" content="A combination of a brilliantly designed layout and picturesque tropical landscaping make Makaha Resort Golf Club one of Oahu's most interesting courses." />
<meta name="keywords" content="makaha resort golf club, oahu, reviews, map, weather, location, photos" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/oahu/golf/makaharesortgolfclub.php" />
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
 <a itemprop="item" href="../../oahu/golf/">
 <span itemprop="name">Golf Courses</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; Makaha Resort Golf Club</div>
        <div itemscope="itemscope" itemtype="http://schema.org/TouristAttraction">
          <h1><span itemprop="name">Makaha Resort Golf Club, Oahu</span></h1>
          <div class="new-custom">
            <div class="midpanel_row">
              <p>The Makaha Resort Golf Club is located in the  enchanting Makaha Valley in Waianae on  Oahu&rsquo;s western coast. The golf course initially opened in 1967 and, in the  past, has been considered one of the best courses in Oahu. Designed by San Diego-based architect William  F Bell, the resort is comprised of 173 rooms in low-rise cottages, a restaurant  and lounge with an ocean view, a swimming pool, meeting rooms, a number of  multi-purpose sports courts, and a golf course.</p>
              
              <p>With a course rating of 74.3 and a slope rating of  137, the golf course at the  Makaha Resort is an 18-hole, par-71 challenge that will require the use of  every club in the bag if players are to command a high score. The course is  7,077 yards from the longest tees, and the layout demands a combination of  crafty shots in order to negotiate the myriad of trees and heavily bunkered  fairways that line the course. The opening par-4 hole takes players downwind  and then onwards through a series of challenging par-3s, attractive par-4s, and  three reasonably short par-5s.&nbsp; The 18th  hole is thought by many to be one of the toughest par-5 closing holes on Oahu,  providing 500 yards of play from its tips. To get a decent score, it is  necessary for players to avoid the lateral hazards and bunkers to the right  hand side of the 18th hole. The golf course and resort is set in 330  acres of tropical estate with the fairways and greens of the course laid with  Bermuda grass. </p>
              <p>The  Makaha Resort Golf Club offers every amenity visitors might require. It has its  own pro shop and restaurant. There is a driving range and facilities to rent  carts and clubs. The resort and golf course are open all year round and is an  entirely suitable venue for personal functions and business meetings. </p>
         <? include ("../../theme/text.html") ?>
              <h2 class="big">Makaha Resort Golf Club Overview</h2>
              <ul type="disc" class="mylist">
                <li>18 holes, par 72, 7040 yards</li>
                <li> Architect: William Francis Bell</li>
                <li> Rating: 74.3/71.3/73.9</li>
                <li> Slope: 137/134/129</li>
                <li> Open: 1969</li>
                <li>Phone: <span itemprop="telephone">(808) 695-9544</span><br />
                </li></ul> <div style="clear:both"></div>
                <br />
                <h3 class="big">Vacation Rentals near Makaha Resort Golf Club</h3>
               
                <?php
show_widgets('Waianae','https://www.to-hawaii.com/oahu/vacationrentals/waianae.php');
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
var myLatLng = new google.maps.LatLng(21.479288,-158.193365);
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
                  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">84-626 Makaha Valley Road</span>, <span itemprop="addressLocality">Waianae</span> <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96792</span> </div>
                  </div>
                  <div id="contenttab1" style="display:block;"><a class="weatherwidget-io" href="https://forecast7.com/en/21d44n158d18/waianae/?unit=us" data-label_1="WAIANAE" data-label_2="WEATHER" data-theme="pure" >WAIANAE WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <p>
                    <?php $id="164"; include "../../reviews/main.php"; ?>
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