<?php

/**
* MyBB Plugin:  Minimum of posts for signature.
* -------------------------------------------------------------------------------------------
* http://community.mybboard.net
* -------------------------------------------------------------------------------------------
* Author : Babjusi 
* http://community.mybboard.net
**/
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}
$plugins->add_hook("usercp_do_editsig_end", "sigminimumposts");


function sigminimumposts_info()
{
	return array(
		"name"			=> "Minimum of posts to be able to create signatures.",
		"description"	=> "It sets a minimum number of posts for your users in order to create signatures.",
		"website"		=> "http://community.mybboard.net/",
		"version"		=> "1.0",
		"author"		=> "babjusi",
		"authorsite"	=> "http://community.mybboard.net",
		"compatibility"  => "14*",
		'guid'        => ''
	);
}
function sigminimumposts_activate()
{
	global $db;
	
$settings_group = array(
		'name' => 'sigminimumposts',
		'title' => 'Minimum of posts to to create signatures.',
		'description' => 'Settings for the mod!',
		'disporder' => '1',
		'isdefault' => '1'
	);
	$db->insert_query('settinggroups',$settings_group);
	$gid = $db->insert_id();
	
	$setting = array(
		'name' => 'enablesigminimumposts',
		'title' => 'Enable the Minimum of posts to create signatures?',
		'description' => 'If enabled, you will be able to set a minimum number of posts for your users in order to create signatures.',
		'optionscode' => 'yesno',
		'value' => '1',
		'disporder' => '1',
		'gid' => intval($gid)
	);
	$db->insert_query('settings',$setting);
	
	$sig_minimumposts = array(
		"name" => "sig_minimumposts",
		"title" => "Number of posts required to create signatures.",
		"description" => "Enter below the number of posts required for your users in order to create signatures. By default it is set to 5 posts.",
		"optionscode" => "text",
		"value" => "5",
		"disporder" => "2",
		"gid" => intval($gid),
		);
	$db->insert_query("settings", $sig_minimumposts);

rebuild_settings();
}

function sigminimumposts_deactivate()
{
	global $db;

$db->query("DELETE FROM ".TABLE_PREFIX."settinggroups WHERE name='sigminimumposts'");
$db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='enablesigminimumposts'");	
$db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='sig_minimumposts'");

rebuild_settings();
}
	

function sigminimumposts()	
{
global $mybb, $db;	

	
if($mybb->settings['enablesigminimumposts'] == 1 && $mybb->user['postnum'] < intval($mybb->settings['sig_minimumposts'])) {
	
	error("An error has occurred. You must have ". $mybb->settings['sig_minimumposts']. " posts in order to create your signature.");

}

}
	

?>