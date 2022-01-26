<?php
// Deny direct access
if(!defined('IN_MYBB')) die("This is a plugin. Direct initialization of this file is not allowed.<br />
								Dies ist ein Plugin. Ein Direktaufruf ist nicht erlaubt.");

// Provide the possibility to add an additional message for the install/uninstall, activate/deactivate notice
$plugins->add_hook("admin_config_plugins_activate_commit", "plugin_notice");
$plugins->add_hook("admin_config_plugins_deactivate_commit", "plugin_notice");
if(!function_exists("plugin_notice"))
{
	function plugin_notice()
	{
		global $message, $plugin_notice;
		$message .= $plugin_notice;
	}
}

// Declare the hooks where a plugin action should be done
$plugins->add_hook("member_do_register_end", "email_admin_new_member");

// Provide the plugin information
/*
 * Email-Benachrichtigung bei Registrierung 2.0.0
 * (c) 2005-2006 by MyBBoard.de
 * Website: http://www.mybboard.de
 */
function email_admin_new_member_info()
{
	return array(
		"name"			=> "Email about new members",
		"description"	=> "Send an email to an Admin if a registration was made",
		"website"		=> "http://www.mybboard.de",
		"author"		=> "MyBBoard.de",
		"authorsite"	=> "http://www.mybboard.de",
		"version"		=> "2.0.0",
		'guid'        => '607b9c2229c876d962a7dd3bab3a4f96',
		'compatibility' => '14*',
	);
}

// Activate
function email_admin_new_member_activate()
{
	global $db;
	$email_admin_new_member_group = array(
		"gid" => "NULL",
		"name" => "emailonreg",
		"title" => "Email about new members",
		"description" => "",
		"disporder" => "50",
		"isdefault" => "no",
		);
	$db->insert_query("settinggroups", $email_admin_new_member_group);
	$gid = $db->insert_id();
	
	$email_admin_new_member_group_setting_1 = array(
		"sid" => "NULL",
		"name" => "emailonreg_onoff",
		"title" => "Plugin Active",
		"description" => "Should an email being send if a new member has registered?",
		"optionscode" => "yesno",
		"value" => "0",
		"disporder" => "1",
		"gid" => intval($gid),
		);
	$db->insert_query("settings", $email_admin_new_member_group_setting_1);	
	$email_admin_new_member_group_setting_2 = array(
		"sid" => "NULL",
		"name" => "emailonreg_email",
		"title" => "Emailadresse",
		"description" => "To which emailadresse should the message being send?<br /><small>Seperate more than one adress with \",\"</small>",
		"optionscode" => "text",
		"value" => "email@domain.tld",
		"disporder" => "2",
		"gid" => intval($gid),
		);
	$db->insert_query("settings", $email_admin_new_member_group_setting_2);
	rebuild_settings();
}

// Deactivate
function email_admin_new_member_deactivate()
{
    global $db;	
	$db->delete_query("settinggroups","name='emailonreg'");
	$db->delete_query("settings","name IN('emailonreg_onoff','emailonreg_email')");
	rebuild_settings();
}

// Plugin functions
function email_admin_new_member()
{
    global $mybb, $db, $user_info;
	
	if ($mybb->settings['emailonreg_onoff'] != "0")
	{
		$query = $db->simple_select("users", "username, email, regip", "uid=".intval($user_info['uid'])."");
		$emaildata = $db->fetch_array($query);	
		my_mail(
			$mybb->settings['emailonreg_email'],
			"New registration at \"".$mybb->settings['bbname']."\"",
			"A new member has registered at \"".$mybb->settings['bbname']."\".\n
				\n
				Informations:\n
				User-ID: ".$user_info['uid']."\n
				Username: ".$emaildata['username']."\n
				Emailadresse: ".$emaildata['email']."\n
				IP-Adresse: ".$emaildata['regip']
		);
	}
}
?>