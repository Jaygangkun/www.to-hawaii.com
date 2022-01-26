<?php
require_once "lib.functions.all.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hawaii Vacation Rentals: Affordable Condos, Luxurious Villas, Hawaii Beachfront Homes</title>
<meta name="description" content="Find thousands of Hawaii Vacation Rentals by the owner ranging from affordable condos to luxurious beachfront homes and villas." />
<meta name="keywords" content="hawaii vacation rentals, affordable condos, hawaii villas, beachfront rentals, rent a home in hawaii" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="https://www.to-hawaii.com/vacation-rentals.php" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="theme/images/favicon.ico" />
<link href="https://www.to-hawaii.com/style/style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
a {
	border:none;
	outline:none;
}
</style>

<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9348498266149552",
    enable_page_level_ads: true
  });
</script>
</head>
<body>
<? include ("theme/vrtopad.html") ?>
<div class="mainbg">
<div class="sand">
<div class="wrapper">
<div id="main-left"></div>
<div id="main-right">
<div class="main">
  <div class="layout">
    <? include ("theme/top-vr.html") ?>
    <div class="contentarea">
      <div id="wrapper" class="content_bottom" >
        <div class="midpanel-vr">
          <div class="inner">
            <h1>Hawaii Vacation Rentals</h1>
            <div class="new-custom">
              <div class="midpanel_row">
                <div class="clear"></div>
                <table width="100%" border="0">
                  <tr>
                    <td width="33%">&raquo; <strong><a href="oahu/vacationrentals">Oahu</a></strong></td>
                    <td width="36%">&raquo; <strong><a href="big-island/vacationrentals">Big Island Hawaii</a></strong></td>
                    <td width="31%">&raquo; <strong><a href="molokai/vacationrentals">Molokai</a></strong></td>
                  </tr>
                  <tr>
                    <td>&raquo; <strong><a href="maui/vacationrentals">Maui</a></strong></td>
                    <td>&raquo; <strong><a href="kauai/vacationrentals">Kauai</a></strong></td>
                     <td>&raquo; <strong><a href="lanai/vacationrentals">Lanai</a></strong></td>
               
                  </tr>
                </table>
                <br />
                <div>
                  <?php
show_rentals_list();
?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="space-inner"></div>
        <div class="white-space"></div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
<? include ("theme/footer-vr.html") ?>
</body>
</html>