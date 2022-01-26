<?php
/*
Plugin PJIRC Chat
(c) 2006-2008 by MyBBoard.de
Website: http://www.mybboard.de
*/

//Informationen zum Plugin
function pjirc_mybb_info()
{
	return array(
		"name"        => "PJIRC Chat",
		"description" => "Adds the PJIRC Java Applet to your board.",
		"website"     => "http://www.mybboard.de",
		"author"      => "MyBBoard.de",
		"authorsite"  => "http://www.mybboard.de",
		"version"     => "1.2",
		'guid'        => 'c7d2ddaf7d54100f38153ce44c3e54f6',
        'compatibility' => '14*',
		);
}

// Aktivierung
function pjirc_mybb_activate() {

    global $db;
    
    //Navigation einfügen
    require MYBB_ROOT."/inc/adminfunctions_templates.php";
    find_replace_templatesets("header", '#toplinks_calendar}</a></li>#', "toplinks_calendar}</a></li><li><a href=\"\$settings[bburl]/chat.php\"><img src=\"\$settings[bburl]/images/chat.gif\" border=\"0\" alt=\"Chat\">Chat</a></li>");
    
    // Templates für dieses Plugin einfügen
	$templatearray = array(
		"tid" => "NULL",
		"title" => "pjirc_chat",
		"template" => "<html>
<head>
<title>\$settings[bbname] - Chat</title>
\$headerinclude
</head>
<body>
\$header
<!-- Applet Start -->
<br /><div style=\"text-align: center;\">
<applet code=IRCApplet.class archive=\"irc.jar,pixx.jar\" width=640 height=400>
<param name=\"CABINETS\" value=\"irc.cab,securedirc.cab,pixx.cab\">

<param name=\"nick\" value=\"\$username\">
<param name=\"alternatenick\" value=\"\$altusername\">
<param name=\"fullname\" value=\"\$usergroup\">
<param name=\"host\" value=\"\$ircserver\">
<param name=\"command1\" value=\"/join \$ircchannel\">
<param name=\"gui\" value=\"pixx\">

<param name=\"quitmessage\" value=\"See you!\">
<param name=\"asl\" value=\"true\">
<param name=\"useinfo\" value=\"true\">
<param name=\"language\" value=\"english\">

<param name=\"style:bitmapsmileys\" value=\"true\">
<param name=\"style:smiley1\" value=\":) img/sourire.gif\">
<param name=\"style:smiley2\" value=\":-) img/sourire.gif\">
<param name=\"style:smiley3\" value=\":-D img/content.gif\">
<param name=\"style:smiley4\" value=\":d img/content.gif\">
<param name=\"style:smiley5\" value=\":-O img/OH-2.gif\">
<param name=\"style:smiley6\" value=\":o img/OH-1.gif\">
<param name=\"style:smiley7\" value=\":-P img/langue.gif\">
<param name=\"style:smiley8\" value=\":p img/langue.gif\">
<param name=\"style:smiley9\" value=\";-) img/clin-oeuil.gif\">
<param name=\"style:smiley10\" value=\";) img/clin-oeuil.gif\">
<param name=\"style:smiley11\" value=\":-( img/triste.gif\">
<param name=\"style:smiley12\" value=\":( img/triste.gif\">
<param name=\"style:smiley13\" value=\":-| img/OH-3.gif\">
<param name=\"style:smiley14\" value=\":| img/OH-3.gif\">
<param name=\"style:smiley15\" value=\":\'( img/pleure.gif\">
<param name=\"style:smiley16\" value=\":$ img/rouge.gif\">
<param name=\"style:smiley17\" value=\":-$ img/rouge.gif\">
<param name=\"style:smiley18\" value=\"(H) img/cool.gif\">
<param name=\"style:smiley19\" value=\"(h) img/cool.gif\">
<param name=\"style:smiley20\" value=\":-@ img/enerve1.gif\">
<param name=\"style:smiley21\" value=\":@ img/enerve2.gif\">
<param name=\"style:smiley22\" value=\":-S img/roll-eyes.gif\">
<param name=\"style:smiley23\" value=\":s img/roll-eyes.gif\">
<param name=\"style:backgroundimage\" value=\"true\">
<param name=\"style:backgroundimage1\" value=\"all all 0 background.gif\">
<param name=\"style:sourcefontrule1\" value=\"all all Serif 12\">
<param name=\"style:floatingasl\" value=\"true\">

<param name=\"pixx:timestamp\" value=\"true\">
<param name=\"pixx:highlight\" value=\"true\">
<param name=\"pixx:highlightnick\" value=\"true\">
<param name=\"pixx:styleselector\" value=\"true\">
<param name=\"pixx:setfontonstyle\" value=\"true\">
<param name=\"pixx:language\" value=\"english\">

</applet>
<!-- Applet Ende -->
<div class=\"smalltext\">PJIRC Plugin by <a href=\"http://www.mybboard.de\" target=\"_blank\">MyBBoard.de</a></div>
</div>
\$footer
</body>
</html>",
		"sid" => "-1",
		);
		$db->insert_query("templates", $templatearray);
		
	// Einstellungsgruppe hinzufügen
	$pjirc_mybb_group = array(
		"gid" => "NULL",
		"name" => "PJIRC Chat",
		"title" => "PJIRC Chat",
		"description" => "Settings for the \"PJIRC Chat\"-Plugin.",
		"disporder" => "1",
		"isdefault" => "0",
		);
	$db->insert_query("settinggroups", $pjirc_mybb_group);
	$gid = $db->insert_id();
		
			// Einstellungen hinzufügen
	$pjirc_mybb_1 = array(
		"sid" => "NULL",
		"name" => "pjirc_onlymembers",
		"title" => "Only members?",
		"description" => "Is the chat only available for registered users?",
		"optionscode" => "yesno",
		"value" => "0",
		"disporder" => "1",
		"gid" => intval($gid),
		);
	$db->insert_query("settings", $pjirc_mybb_1);
	
	$pjirc_mybb_2 = array(
		"sid" => "NULL",
		"name" => "pjirc_server",
		"title" => "Server",
		"description" => "Enter the hostname of the IRC server.",
		"optionscode" => "text",
		"value" => "",
		"disporder" => "2",
		"gid" => intval($gid),
		);
	$db->insert_query("settings", $pjirc_mybb_2);
	
	$pjirc_mybb_3 = array(
		"sid" => "NULL",
		"name" => "pjirc_channel",
		"title" => "Channel",
		"description" => "Enter the name of the channel.",
		"optionscode" => "text",
		"value" => "",
		"disporder" => "3",
		"gid" => intval($gid),
		);
	$db->insert_query("settings", $pjirc_mybb_3);
	
	// settings.php erneuern
	rebuild_settings();
}

// Deaktivierung
function pjirc_mybb_deactivate() {

    global $db;
    
    // Navigation entfernen
    require MYBB_ROOT."/inc/adminfunctions_templates.php";
    find_replace_templatesets("header", '#<li><a href="\$settings\[bburl\]/chat.php"><img src="\$settings\[bburl\]/images/chat.gif" border="0" alt="Chat">Chat</a></li>#', "", 0);
    
    // Templates von dieses Plugin entfernen
	$db->query("DELETE FROM ".TABLE_PREFIX."templates WHERE title='pjirc_chat'");
	
	// Einstellungsgruppen löschen
	$query = $db->query("SELECT gid FROM ".TABLE_PREFIX."settinggroups WHERE name='PJIRC Chat'");
	$g = $db->fetch_array($query);
	$db->query("DELETE FROM ".TABLE_PREFIX."settinggroups WHERE gid='".$g['gid']."'");

	// Einstellungen löschen
	$db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE gid='".$g['gid']."'");

	// Rebuilt settings.php
	rebuild_settings();
}

function pjirc_mybb()
{
}

// Einstellungen erneuern
if(!function_exists("rebuild_settings"))
{
	function rebuild_settings()
	{
		global $db;
		$query = $db->query("SELECT * FROM ".TABLE_PREFIX."settings ORDER BY title ASC");
		while($setting = $db->fetch_array($query))
		{
			$setting['value'] = addslashes($setting['value']);
			$settings .= "\$settings['".$setting['name']."'] = \"".$setting['value']."\";\n";
		}
		$settings = "<?php\n/*********************************\ \n  DO NOT EDIT THIS FILE, PLEASE USE\n  THE SETTINGS EDITOR\n\*********************************/\n\n$settings\n?>";
		$file = fopen(MYBB_ROOT."/inc/settings.php", "w");
		fwrite($file, $settings);
		fclose($file);
	}
}
?>