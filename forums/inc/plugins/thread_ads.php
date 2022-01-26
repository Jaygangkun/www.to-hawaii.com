<?php

$plugins -> add_hook("postbit", "thread_ads");

function thread_ads_info() {
	return array(
		"name" => "Thread Ads",
		"description" => "Adds advertisements to your threads.",
		"website" => "http://sambarrow.com/mybb-thread-ads-plugin",
		"author" => "Sam Barrow",
		"authorsite" => "http://sambarrow.com",
		"version" => "1.3",
		"guid" => "1c7274c3dd8a6ad850eac910dbd58e4c",
		"compatibility" => "16*"
	);
}

function thread_ads_activate() {

	global $db;
	
	require(MYBB_ROOT . "/inc/adminfunctions_templates.php");
	find_replace_templatesets("postbit", '#<table (.*)>(\s*)<tbody>#', "{\$post['ads_before']}<table \\1>\\2<tbody>");
	find_replace_templatesets("postbit", '#</tbody>(\s*)</table>#', "</tbody>\\1</table>{\$post['ads_after']}");
	find_replace_templatesets("postbit_classic", '#<table (.*)>(\s*)<tbody>#', "{\$post['ads_before']}<table \\1>\\2<tbody>");
	find_replace_templatesets("postbit_classic", '#</tbody>(\s*)</table>#', "</tbody>\\1</table>{\$post['ads_after']}");
	
	$setting_group = array(
		"name" => "thread_ads",
		"title" => "Thread Ads",
		"description" => "Settings for thread advertisements.",
		"isdefault" => "no"
	);
	$db -> insert_query("settinggroups", $setting_group);
	$gid = $db -> insert_id();
	
	$db -> insert_query("settings", array(
		"name" => "thread_ads_on",
		"title" => "On",
		"description" => "Do you want to show ads after posts?",
		"optionscode" => "yesno",
		"value" => "1",
		"disporder" => "1",
		"gid" => $gid
	));
	$db -> insert_query("settings", array(
		"name" => "thread_ads_first_only",
		"title" => "After First Post Only",
		"description" => "Do you want to only show ads after the first post in a thread?",
		"optionscode" => "yesno",
		"value" => "0",
		"disporder" => "2",
		"gid" => $gid
	));
	$db -> insert_query("settings", array(
		"name" => "thread_ads_before",
		"title" => "Start Above",
		"description" => "Enable this to start ads above the first post instead of below.",
		"optionscode" => "yesno",
		"value" => "0",
		"disporder" => "3",
		"gid" => $gid
	));
	$db -> insert_query("settings", array(
		"name" => "thread_ads_interval",
		"title" => "After Every X Posts",
		"description" => "Show ads at a certain interval. Leave blank to ignore this option.",
		"optionscode" => "text",
		"value" => "",
		"disporder" => "4",
		"gid" => $gid
	));
	$db -> insert_query("settings", array(
		"name" => "thread_ads_max_per_page",
		"title" => "Maximum Per Page",
		"description" => "The maximum number of ads to show per page. Leave blank to ignore this option.",
		"optionscode" => "text",
		"value" => "",
		"disporder" => "5",
		"gid" => $gid
	));
	$db -> insert_query("settings", array(
		"name" => "thread_ads_code",
		"title" => "Ad Code",
		"description" => "Please enter the ad code here.",
		"optionscode" => "textarea",
		"value" => "",
		"disporder" => "6",
		"gid" => $gid
	));
	$db -> insert_query("settings", array(
		"name" => "thread_ads_iframe",
		"title" => "IFrame",
		"description" => "Use an iframe for the ads? This may be necessary for Google AdSense.",
		"optionscode" => "yesno",
		"value" => "0",
		"disporder" => "7",
		"gid" => $gid
	));
	$db -> insert_query("settings", array(
		"name" => "thread_ads_iframe_width",
		"title" => "IFrame Width",
		"description" => "The width of the ad iframe.",
		"optionscode" => "text",
		"value" => "",
		"disporder" => "8",
		"gid" => $gid
	));
	$db -> insert_query("settings", array(
		"name" => "thread_ads_iframe_height",
		"title" => "IFrame Height",
		"description" => "The height of the ad iframe.",
		"optionscode" => "text",
		"value" => "",
		"disporder" => "9",
		"gid" => $gid
	));
	$db -> insert_query("settings", array(
		"name" => "thread_ads_forums",
		"title" => "Forums",
		"description" => "A comma separated list of the forums to show ads in, leave blank to show ads in all forums.",
		"optionscode" => "text",
		"value" => "",
		"disporder" => "10",
		"gid" => $gid
	));
	
	rebuild_settings();
	
}

function thread_ads_deactivate() {
	global $db;
	require(MYBB_ROOT . "/inc/adminfunctions_templates.php");
	find_replace_templatesets("postbit", '#{\$post\[\'ads_before\'\]}#', "");
	find_replace_templatesets("postbit", '#{\$post\[\'ads_after\'\]}#', "");
	find_replace_templatesets("postbit_classic", '#{\$post\[\'ads_before\'\]}#', "");
	find_replace_templatesets("postbit_classic", '#{\$post\[\'ads_after\'\]}#', "");
	$query = $db -> query("SELECT `gid` FROM `" . TABLE_PREFIX . "settinggroups` WHERE `name` = 'thread_ads'");
	$g = $db -> fetch_array($query);
	$db -> query("DELETE FROM `" . TABLE_PREFIX . "settinggroups` WHERE `gid` = '" . $g['gid'] . "'");
	$db -> query("DELETE FROM `" . TABLE_PREFIX . "settings` WHERE `gid` = '" . $g['gid'] . "'");
	rebuild_settings();
}

function thread_ads($post) {
	global $mybb, $postcounter, $fid;
	if ($mybb -> settings['thread_ads_on']) {
		if ($mybb -> settings['thread_ads_forums']) {
			if (!in_array($fid, preg_split('/[\s]*\,[\s]*/', $mybb -> settings['thread_ads_forums']))) {
				return;
			}
		}
		$per_page = $mybb -> settings['postsperpage'];
		$page_counter = ($postcounter % $per_page) ? (($postcounter - 1) % $per_page) : $per_page - 1;
		$display = null;
		if ($mybb -> settings['thread_ads_before']) {
			if ($page_counter == 0) {
				if (thread_ads_show($postcounter, $page_counter)) {
					$post['ads_before'] = thread_ads_code();
				}
			}
			if (thread_ads_show($postcounter + 1, $page_counter + 1)) {
				$post['ads_after'] = thread_ads_code();
			}
		}
		else if (thread_ads_show($postcounter, $page_counter)) {
			$post['ads_after'] = thread_ads_code();
		}
	}
}
function thread_ads_code() {
	global $mybb;
	$output = '<div style="margin:3px 8px 8px 8px">';
		if ($mybb -> settings['thread_ads_iframe']) {
			$output .= '<iframe src="' . $mybb -> settings['bburl'] . '/thread-ads.php" scrolling="no" style="';
			if ($mybb -> settings['thread_ads_iframe_width']) {
				$output .= 'width:' . $mybb -> settings['thread_ads_iframe_width'] . 'px;';
			}
			if ($mybb -> settings['thread_ads_iframe_height']) {
				$output .= 'height:' . $mybb -> settings['thread_ads_iframe_height'] . 'px;';
			}
			$output .= 'border:none"></iframe>';
		}
		else {
			$output .= $mybb -> settings['thread_ads_code'];
		}
	$output .= '</div>';
	return $output;
}
function thread_ads_show($counter, $page_counter) {
	global $mybb;
	$interval = $mybb -> settings['thread_ads_interval'] ? $mybb -> settings['thread_ads_interval'] : 1;
	if ($mybb -> settings['thread_ads_first_only'] && $counter != 1) {
		return false;
	}
	if ($mybb -> settings['thread_ads_max_per_page']) {
		$already_displayed = floor($page_counter / $interval);
		if ($already_displayed >= $mybb -> settings['thread_ads_max_per_page']) {
			return false;
		}
	}
	if ($mybb -> settings['thread_ads_interval']) {
		if ($page_counter % $mybb -> settings['thread_ads_interval']) {
			return false;
		}
	}
	return true;
}
