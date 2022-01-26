<?php
	function my_session_start()
	{
		  $sn = session_name();
		  if (isset($_COOKIE[$sn])) {
			  $sessid = $_COOKIE[$sn];
		  } else if (isset($_GET[$sn])) {
			  $sessid = $_GET[$sn];
		  } else {
			  return session_start();
		  }

		 if (!preg_match('/^[a-zA-Z0-9,\-]{22,40}$/', $sessid)) {
			  return false;
		  }
		  return session_start();
	}

	if ( !my_session_start() ) {
		session_id( uniqid() );
		session_start();
		session_regenerate_id();
	}
	header("Expires: Mon, 26 Jul 1998 06:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header('Content-type: image/jpeg');
	//extract($_GET);
	//extract($_POST);
	//session_start();
	$alphanum  = "ABGKLMNPRSTUXZ";
	$rand = substr(str_shuffle($alphanum), 0, 5);
	$image = imagecreatetruecolor(65,25);
	$background = imagecolorallocate($image, 255, 255, 255);
	$border = imagecolorallocate($image, 128, 128, 128);
	$colors[] = imagecolorallocate($image, 128, 64, 192);
	$colors[] = imagecolorallocate($image, 192, 64, 128);
	$colors[] = imagecolorallocate($image, 108, 192, 64);
	imagefilledrectangle($image, 1, 1, 65 - 2, 25 - 2, $background);
	imagerectangle($image, 0, 0, 65 - 1, 25 - 1, $border);
	for ($i = 0; $i < 5; $i++)
	{
		$x1 = rand(0, 65 - 5);
		$y1 = rand(0, 25 - 5);
		$x2 = $x1 - 4 + rand(2, 8);
		$y2 = $y1 - 4 + rand(2, 8);
		imageline($image, $x1, $y1, $x2, $y2, $colors[rand(0, count($colors) - 1)]);
	}
	$textColor = imagecolorallocate ($image, 30, 30, 30);  
	imagestring ($image, 8, rand(8,10), rand(1,8),  $rand, $textColor);  
	$_SESSION['image_random_value'] = md5($rand); 
	imagejpeg($image); 
	imagedestroy($image); 
?>
