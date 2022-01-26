<?php
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

$plugins->add_hook("parse_message_end", "nofollowlink_changelink");

function nofollowlink_info()
	{

	return array(
		"name"		=> "Nofollow link",
		"description"		=> "A simple plugin that puts nofollow in your links",
		"website"		=> "http://community.mybboard.net/user-8198.html",
		"author"		=> "TimB.",
		"authorsite"		=> "http://community.mybboard.net/user-8198.html",
		"version"		=> "1.0",
		"guid" 			=> "0fead3ffd1a376ceb5cef3388df5d39d",
		"compatibility"	=> "*"
		);
	}

		function nofollowlink_changelink($message){

		$search = 'target="_blank"';
		$replace = 'target="_blank" rel="nofollow"';
	 $message = str_replace($search  , $replace  , $message);
	 return $message;
		}
?>