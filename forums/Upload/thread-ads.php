<?php

define("IN_MYBB", 1);
define('THIS_SCRIPT', 'thread-ads.php');

require_once "global.php";

?>

<html>
	<head>
		<title>Ads</title>
		<style type="text/css">
			body {
				margin: 0;
			}
		</style>
	</head>
	<body>
		<?= $mybb -> settings["thread_ads_code"] ?>
	</body>
</html>
