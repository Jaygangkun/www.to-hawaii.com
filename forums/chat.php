<?php
/*
Plugin PJIRC Chat
(c) 2006-2008 by MyBBoard.de
Website: http://www.mybboard.de
*/

define("IN_MYBB", 1);
define("KILL_GLOBALS", 1);

require "global.php";

// Plugin installiert?
if(!isset($mybb->settings['pjirc_onlymembers']))
{
	error("You have to activate the plugin!");
}

// Verbindungsdaten eingegeben?
if(empty($mybb->settings['pjirc_server']) || empty($mybb->settings['pjirc_channel']))
{
	error("You have to enter the server and the channel you want to connect with!");
}

// Navigation
add_breadcrumb("Chat");

// Nur Mitglieder?
if($mybb->settings['pjirc_onlymembers'] == "1")
{
    // Gäste ausschließen
    if ($mybb->user['uid'] == "0")
    {
		error_no_permission();
    }
}

// Gast?
if($mybb->user['uid'] == "0")
{
	$rand = rand(1000,9999);
	$username = "Guest".$rand."";
	$altusername = "Guest".$rand."";
	$usergroup = "Guest/Not logged in";
}
else
{
	// Benutzergruppe ermitteln
	$query = $db->query("SELECT title FROM ".TABLE_PREFIX."usergroups WHERE gid = '".$mybb->user['displaygroup']."' LIMIT 0,1");
	$get_groups = $db->fetch_array($query);

	$username = htmlspecialchars_uni($mybb->user['username']);
	$altusername = "Member".$mybb->user['uid']."";
	$usergroup = htmlspecialchars_uni($get_groups['title']);
}

$ircserver = $mybb->settings['pjirc_server'];
$ircchannel = $mybb->settings['pjirc_channel'];

// Output
eval("\$chat = \"".$templates->get("pjirc_chat")."\";");
output_page($chat);
?>