 <?php
require_once "../../widget/widget.lib.functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The Local Gentry, Lanai</title>
<meta name="description" content="The Local Gentry in Lanai City is a small women and men's clothing boutique featuring a variety of clothing items, such as swimsuits, sandals, shorts, Aloha shirts and many more." />
<meta name="keywords" content="local gentry, lanai, photos, reviews, map, boutique, location" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/lanai/shopping/thelocalgentry.php" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="../../theme/images/favicon.ico" />
<link href="../../style/style.css" rel="stylesheet" type="text/css" />

<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9348498266149552",
    enable_page_level_ads: true
  });
</script>
</head><body>
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
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../lanai/">
 <span itemprop="name">Lanai</span></a>
 <span itemprop="position" content="2">&raquo; </span>
  </li>
   <li itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a itemprop="item" href="../../lanai/shopping/">
 <span itemprop="name">Shopping</span></a>
 <span itemprop="position" content="3"></span>
 &raquo; The Local Gentry</li>
</ol>
</div>
            <h1 class="title"><span itemprop="name">The Local Gentry</span></h1>
            <div class="clear"></div>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="gallery-container">
                  <div class="feature"> <img  itemprop="image" alt="The Local Gentry"  src="../../../lanai/shopping/images/thelocalgentry/the_local_gentry.jpg" />
                    <div class="caption"></div>
                  </div>
                  <div class="gallery">
                    <ul class="thumb-list">
                      <li class="active"><a   rel="../../../lanai/shopping/images/thelocalgentry/the_local_gentry.jpg"  class="galImg"><img src="../../../lanai/shopping/images/thelocalgentry/the_local_gentry.jpg"  class="thumb" alt="The Local Gentry"  /></a></li>
                      <li><a  rel="../../../lanai/shopping/images/thelocalgentry/gifts_from_lanai.jpg"  class="galImg"><img src="../../../lanai/shopping/images/thelocalgentry/gifts_from_lanai.jpg"  class="thumb" alt="Gifts from Lanai"  /></a></li>
                    </ul>
                  </div>
                </div>
                <div style="clear:both"></div>
                <h2 class="small">The Local Gentry, Lanai</h2>
                <p>This small store in the heart of Lanai City is a favorite among locals and visitors alike. Established in 1999, Jenna (Gentry) Majkus&rsquo; store named the Local Gentry is a small women &amp; men&rsquo;s clothing boutique featuring a variety of clothing items, such as swimsuits, sandals, shorts, Aloha shirts and many more. Brands available include Iolani, Tiki, Telluride, Art Effects and Tommy Bahama. You&rsquo;ll also find wonderful mahogany wood lamps, sarongs, jewelry, bath products, jeans, picture frames and clothes for children.&nbsp;</p>
                <? include ("../../theme/text.html") ?>
                <h2 class="big">The Local Gentry Overview</h2>
                <ul type="disc" class="mylist">
                  <li>Small boutique in the heart of Lanai City</li>
                  <li>Clothing for women, men and children</li>
                  <li>Other items available as well, such as lamps, bath products, etc.</li></ul> <div style="clear:both"></div>
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
var myLatLng = new google.maps.LatLng(20.826024,-156.920346);
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
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">363 7th St</span>, <span itemprop="addressLocality">Lanai City</span> <span itemprop="addressRegion">HI</span> <span itemprop="postalCode">96763</span> </div>
                  </div>
                   <div id="contenttab1" style="display:block;">
                   <a class="weatherwidget-io" href="https://forecast7.com/en/20d83n156d92/lanai-city/?unit=us" data-label_1="LANAI CITY" data-label_2="WEATHER" data-theme="pure" >LANAI CITY WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                  </div>
                  <p>
                    <?php $id="242"; include "../../reviews/main.php"; ?>
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
