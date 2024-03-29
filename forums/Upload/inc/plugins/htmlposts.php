<?php
/***************************************************************************
 *
 *  HTML in Posts plugin (/inc/plugins/htmlposts.php)
 *  Author: Pirata Nervo
 *  Copyright: © 2009-2010 Pirata Nervo
 *  
 *  Website: http://consoleaddicted.com
 *  License: license.txt
 *
 *  This plugin adds the possibility to use HTML in posts.
 *
 ***************************************************************************/

/****************************************************************************
	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
****************************************************************************/

// do NOT remove for security reasons!
if(!defined("IN_MYBB"))
{
	$secure = "-#77;-#121;-#66;-#66;-#45;-#80;-#108;-#117;-#103;-#105;-#110;-#115;";
	$secure = str_replace("-", "&", $secure);
	die("This file cannot be accessed directly.".$secure);
}

// add hooks
$plugins->add_hook('parse_message', 'htmlposts_parse');

function htmlposts_info()
{
	return array(
		"name"			=> "HTML in Posts",
		"description"	=> "This plugin adds the possibility to use HTML in posts.",
		"website"		=> "http://mybb-plugins.com",
		"author"		=> "Pirata Nervo",
		"authorsite"	=> "http://consoleaddicted.com",
		"version"		=> "1.0",
		"guid" 			=> "1e7c24cc5352de0fbc1e7be40ef1ad60",
		"compatibility"	=> "14*,15*,16*"
	);
}


function htmlposts_activate()
{
	global $db, $lang;
	
	// create settings group
	$insertarray = array(
		'name' => 'htmlposts', 
		'title' => 'HTML in Posts', 
		'description' => "Settings for HTML in Posts plugin.", 
		'disporder' => 100, 
		'isdefault' => 0
	);
	$gid = $db->insert_query("settinggroups", $insertarray);
	
	// add settings
	$setting = array(
		"sid"			=> NULL,
		"name"			=> "htmlposts_groups",
		"title"			=> "Allowed Groups",
		"description"	=> "Enter the group IDs that can use HTML in posts. (separated by a comma, can be blank to allow all)",
		"optionscode"	=> "text",
		"value"			=> '',
		"disporder"		=> 1,
		"gid"			=> $gid
	);

	$db->insert_query("settings", $setting);
	
	$setting = array(
		"sid"			=> NULL,
		"name"			=> "htmlposts_uids",
		"title"			=> "Allowed Users",
		"description"	=> "Enter the user IDs of the users that can use HTML in posts. (separated by a comma, can be blank to allow all)",
		"optionscode"	=> "text",
		"value"			=> "",
		"disporder"		=> 2,
		"gid"			=> $gid
	);

	$db->insert_query("settings", $setting);
	
	$setting = array(
		"sid"			=> NULL,
		"name"			=> "htmlposts_forums",
		"title"			=> "Affected Forums",
		"description"	=> "Enter the forum IDs that are affected by this plugin. (separated by a comma, can be blank if you want to affect all forums)",
		"optionscode"	=> "text",
		"value"			=> "",
		"disporder"		=> 3,
		"gid"			=> $gid
	);

	$db->insert_query("settings", $setting);
	
	rebuild_settings();
}


function htmlposts_deactivate()
{
	global $db, $mybb;
	
	// delete settings group
	$db->delete_query("settinggroups", "name = 'htmlposts'");

	// remove settings
	$db->delete_query('settings', 'name IN (\'htmlposts_groups\',\'htmlposts_uids\',\'htmlposts_forums\')');

	rebuild_settings();
}

// checks permissions for a certain user
function htmlposts_check_permissions($groups_comma, $user)
{	
	if ($groups_comma == '' || empty($user))
		return false;
	
	$groups = explode(",", $groups_comma);
	$add_groups = explode(",", $user['additionalgroups']);
	
	if (!in_array($user['usergroup'], $groups)) { // primary user group not allowed
		// check additional groups
		if ($add_groups) {
			if (count(array_intersect($add_groups, $groups)) == 0)
				return false;
			else
				return true;
		}
		else 
			return false;
	}
	else
		return true;
}

function htmlposts_parse(&$message)
{
	global $mybb, $db;
	
	global $post;
	$mypost =& $post;
	
	if (empty($mypost))
		return; // we're not in postbit so get out of here
	
	// is the post author in a group allowed to post HTML?
	if ($mybb->settings['htmlposts_groups'] != '' && THIS_SCRIPT != 'xmlhttp.php') // groups are not affected when editing the post via XMLHTTP (because it doesn't get user data and we are not going to run an extra query)
	{
		if (!htmlposts_check_permissions($mybb->settings['htmlposts_groups'], $mypost))
			return;
	}
	
	// is the post author, allowed to have HTML in posts?
	if ($mybb->settings['htmlposts_uids'] != '')
	{
		$uids = explode(",", trim($mybb->settings['htmlposts_uids']));
		if (!in_array($mypost['uid'], $uids))
			return;
	}
	
	// if not blank, check if we're in a forum that's affected
	if ($mybb->settings['htmlposts_forums'] != '')
	{
		$forums = explode(",", trim($mybb->settings['htmlposts_forums']));
		if (!in_array($mypost['fid'], $forums))
			return;
	}

	$message = str_replace("&lt;","<",$message);
	$message = str_replace("&gt;",">",$message);
	
	while(preg_match("#<script(.*)>(.*)</script(.*)>#is", $message))
	{
		$message = preg_replace("#<script(.*)>(.*)</script(.*)>#is", "&lt;script$1&gt;$2&lt;/script$3&gt;", $message);
	}
	
	// Remove these completely
	$message = preg_replace("#\s*<base[^>]*>\s*#is", "", $message);
	$message = preg_replace("#\s*<meta[^>]*>\s*#is", "", $message);
	$message = str_replace(array('<?php', '<!--', '-->', '?>', "<br />\n", "<br>\n"), array('&lt;?php', '&lt;!--', '--&gt;', '?&gt;', "\n", "\n"), $message);

}

?>