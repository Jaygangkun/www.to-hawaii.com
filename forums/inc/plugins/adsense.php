<?php

// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
{
    die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}
$plugins->add_hook('global_start','adsense_code_insert_header');
$plugins->add_hook('index_start','adsense_code_insert_footer');

function adsense_info()
{
global $db;

    return array(
        'name'            => 'Simple Code Banner',
        'description'    => 'Add your code (even Google AdSense codes!) to your index.',
        'website'        => 'http://mods.mybb.com/',
        'author'        => 'Blake',
        'authorsite'    => 'http://mcmines.com',
        'version'        => '1.4',
        'compatibility'    => '16*',
        'guid'           => 'dc9443796a5dfaeb9d75fd5d0bf08be2'
    );
}

function adsense_activate()
{

global $db;
require MYBB_ROOT."/inc/adminfunctions_templates.php";
      $confirm_group = array(
        'gid'            => 'NULL',
        'name'            => 'google_adsense',
        'title'            => 'Adsense Code',
        'description'    => 'Edit your Ad details in here.',
        'disporder'        => "1",
        'isdefault'        => '0',
    );
    $db->insert_query('settinggroups', $confirm_group);
    $gid = $db->insert_id();
    
$adsense_setting_1 = array(
    "sid"            => "NULL",
    "name"            => "adsense_on_off_header",
    "title"            => "Is the plugin active for the header?",
    "description"    => "No means off",
    "optionscode"    => "yesno",
    "value"            => "no",
    "disporder"        => "1",
    "gid"            => intval($gid),
    );
    
    $adsense_setting_2 = array(
    "sid"            => "NULL",
    "name"            => "adsense_code_header",
    "title"            => "Header Code",
    "description"    => "Post your Code in here",
    "optionscode"    => "textarea",
    "value"            => '',
    "disporder"        => "2",
    "gid"            => intval($gid),
    );
    
    $adsense_setting_3 = array(
    "sid"            => "NULL",
    "name"            => "adsense_on_off_footer",
    "title"            => "Is the plugin active for the footer?",
    "description"    => "No means off",
    "optionscode"    => "yesno",
    "value"            => "no",
    "disporder"        => "3",
    "gid"            => intval($gid),
    );
    
    $adsense_setting_4 = array(
    "sid"            => "NULL",
    "name"            => "adsense_code_footer",
    "title"            => "Footer Code",
    "description"    => "Post your Code in here",
    "optionscode"    => "textarea",
    "value"            => '',
    "disporder"        => "4",
    "gid"            => intval($gid),
    );
    
    $adsense_setting_5 = array(
    "sid"            => "NULL",
    "name"            => "adsense_logo_name",
    "title"            => "Banner Title",
    "description"    => "Give your banner\'s a title. Note! If you are using this mod for Google adsense codes keep the default!",
    "optionscode"    => "textarea",
    "value"            => 'Sponsored Links',
    "disporder"        => "5",
    "gid"            => intval($gid),
    );
    
    $db->insert_query('settings', $adsense_setting_1);
    $db->insert_query('settings', $adsense_setting_2);
    $db->insert_query('settings', $adsense_setting_3);
    $db->insert_query('settings', $adsense_setting_4);
    $db->insert_query('settings', $adsense_setting_5);
    rebuild_settings();
    
     require_once MYBB_ROOT."/inc/adminfunctions_templates.php";
    find_replace_templatesets("header", "#".preg_quote("{\$pending_joinrequests}")."#i", "{\$pending_joinrequests} <br/>{\$adsense_code_header}");
     require_once MYBB_ROOT."/inc/adminfunctions_templates.php";
    find_replace_templatesets("footer", "#".preg_quote("<br style=\"clear: both\" />")."#i", "<br style=\"clear: both\" /> <br /> {\$adsense_code_footer}");
}

function adsense_deactivate()
{
global $db;
    require_once MYBB_ROOT."/inc/adminfunctions_templates.php";
    $db->delete_query("settings", "name='adsense_on_off'");
    $db->delete_query("settings", "name='adsense_on_off_footer'");
    $db->delete_query("settings", "name='adsense_code_footer'");
    $db->delete_query("settings", "name='adsense_code_header'");
    $db->delete_query("settings", "name='adsense_logo_name'");
    $db->delete_query("settinggroups", "name='google_adsense'");
    rebuild_settings();
    
    require_once MYBB_ROOT."/inc/adminfunctions_templates.php";
    find_replace_templatesets("footer", "#".preg_quote("<br /> {\$adsense_code_footer}")."#i", "", 0);
    
    require_once MYBB_ROOT."/inc/adminfunctions_templates.php";
    find_replace_templatesets("header", "#".preg_quote("<br/>{\$adsense_code_header}")."#i", "", 0);
}

//Header Insert
function adsense_code_insert_header()
{
    global $mybb, $adsense_code_header;
    
    if($mybb->settings['adsense_on_off_header'] == "1")
    {
        $adsense_code_header = "<div style=\"padding: 6px 0px 0px 0px\">
<table class=\"tborder\" cellpadding=\"6\" cellspacing=\"1\" border=\"0\" width=\"100%\" align=\"center\"> 
  
<tr>
<td class=\"thead\">
{$mybb->settings['adsense_logo_name']}
</td>
</tr>
<tr>
<td class=\"alt1\" align=\"center\">
{$mybb->settings['adsense_code_header']}
</td> 
</tr>
</table> 
<br>
</div>";
    }
}
    
//Footer Insert
function adsense_code_insert_footer()
{
    global $mybb, $adsense_code_footer;
    
    if($mybb->settings['adsense_on_off_footer'] == "1")
    {
        $adsense_code_footer = "<div style=\"padding: 6px 0px 0px 0px\">
<table class=\"tborder\" cellpadding=\"6\" cellspacing=\"1\" border=\"0\" width=\"100%\" align=\"center\"> 
  
<tr>
<td class=\"thead\">
{$mybb->settings['adsense_logo_name']}
</td>
</tr>
<tr>
<td class=\"alt1\" align=\"center\">
{$mybb->settings['adsense_code_footer']}
</td> 
</tr>
</table> 
<br>
</div>";
    }
}

//Header Remove
    global $mybb, $adsense_code_header;
    require_once MYBB_ROOT."/inc/adminfunctions_templates.php";
    if($mybb->settings['adsense_on_off_header'] == "0")
    {
        find_replace_templatesets("header", "#".preg_quote("<br/>{\$adsense_code_header}")."#i", "", 0);
    }
    
    //Footer Remove
    global $mybb, $adsense_code_footer;
    require_once MYBB_ROOT."/inc/adminfunctions_templates.php";
    if($mybb->settings['adsense_on_off_header'] == "0")
    {
        find_replace_templatesets("index", "#".preg_quote("<br /> {\$adsense_code_footer}")."#i", "", 0);
    }
?>