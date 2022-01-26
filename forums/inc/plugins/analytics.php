<?php

/*
 @ Author: RadHazard
 @ Created: 03/04/09
 @ Version: 1.1
 @ Contact: radhazard.junk@gmail.com
*/

if(!defined("IN_MYBB"))
{
	die("You cannot directly access this file.");
}

$plugins->add_hook("index_start", "insert_analytics");

function analytics_info()
{
    return array(
		"name"        => "Google Analytics",
		"description"   => "Add Google Analytics code to your site.",
		"website"    => "http://radcltforums.freeo.net",
		"author"     => "Rad Hazard",
		"authorsite"    => "http://radclt.freeo.net",
		"version"     => "1.1",
		"guid" => "4966077341d0b855626674930e9d1a0b"
    );
}

function analytics_activate()
{
	global $db, $lang;
	$analytics = array(
		"name" => "analytics",
		"title" => "Google Analytics",
		"description" => "Add Google Analytics code to your site.",
		"disporder" => "402",
		"isdefault" => "no",
		);
	$group['gid'] = $db->insert_query("settinggroups", $analytics);
	$gid = $db->insert_id();
	
	$analytics_active = array(
		"name" => "analytics_active",
		"title" => "Analytics Active",
		"description" => "Enables Google Analytics Code",
		"optionscode" => "onoff",
		"value" => "0",
		"disporder" => "1",
		"gid" => intval($gid),
		);
	$db->insert_query("settings", $analytics_active);

	$analytics_code = array(
		"name" => "analytics_code",
		"title" => "Analytics Code",
		"description" => "Type your analytics code here. (e.g. UA-*******-*)",
		"optionscode" => "text",
		"value" => "UA-",
		"disporder" => "2",
		"gid" => intval($gid),
		);
	$db->insert_query("settings", $analytics_code);

	rebuild_settings();

	include MYBB_ROOT."/inc/adminfunctions_templates.php";

	find_replace_templatesets("index", "#".preg_quote('{$footer}')."#i", '{$analytics} {$footer}');
	
}

function analytics_deactivate()
{
	global $db;
	
	$db->delete_query("settinggroups", "name = 'analytics'");

	rebuild_settings();
	
	include MYBB_ROOT."/inc/adminfunctions_templates.php";

	find_replace_templatesets("index", "#".preg_quote('{$analytics} ')."#i", '', 0);
}

function insert_analytics()
{
	    	global $db, $mybb, $analytics;
	$analytics = "";

	if($mybb->settings['analytics_active'] == 1)
	{	
	
		$analytics = "<script type=\"text/javascript\">";
		$analytics .= "var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");";
		$analytics .= "document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));";
		$analytics .= "</script>";
		$analytics .= "<script type=\"text/javascript\">";
		$analytics .= "try {";
		$analytics .= "var pageTracker = _gat._getTracker(\"";
		$analytics .= "{$mybb->settings['analytics_code']}";
		$analytics .= "\");";
		$analytics .= "pageTracker._trackPageview();";
		$analytics .= "} catch(err) {}</script>";
	}
}
?>