<?php
/* Advanced Stats on Index/Portal 3.1 AJAX-GET File
 * Author: Smethead (smethead@gmail.com)
 * Date modified: 22 May 2009
*/

if(!defined("IN_MYBB"))
{
	define("IN_MYBB", 1);
	require "global.php";
	$stats = array(
		"asoi_mvt",
		"asoi_mrt",
		"asoi_nrp",
		"asoi_nth",
		"asoi_nep",
		"asoi_top",
		"asoi_tod",
		"asoi_nmb",
		"asoi_tof",
		"asoi_rep"
		);
	if(in_array($stats, $mybb->input['asoi']))
		die("Direct initialization of this file is not allowed.");
	echo do_asoi($mybb->input['asoi'], $mybb->input['limit']);
}

function do_asoi($type, $limit=5)
{
	global $db, $lang, $mybb;
	$lang->load("asoi");
	$fidnot = asoi_forumperms();
	$num = 1;
	$lines = "";
	if($type == "asoi_mvt")
	{ //MOST VIEWED THREADS
		$query = $db->query("SELECT t.tid, t.subject, t.views, t.uid, t.icon, u.username, u.usergroup, u.displaygroup, i.* FROM ".$db->table_prefix."threads t LEFT JOIN ".$db->table_prefix."icons i ON i.iid=t.icon LEFT JOIN ".$db->table_prefix."users u ON u.uid=t.uid WHERE ".$fidnot." ORDER BY t.views DESC LIMIT ".$limit);
		if($db->num_rows($query) > 0)
		{
			$num = 0;
			while($thread = $db->fetch_array($query))
			{
				$icon = "";
				if($thread['icon'] != 0)
					$icon = "<img src=\"".$thread['path']."\" alt=\"".$thread['name']."\" style=\"vertical-align:middle;\" height=\"12\" width=\"12\" /> ";
				$lines .= $icon."<a href=\"".get_thread_link($thread['tid'])."\">".$thread['subject']."</a> ".$lang->asoi_by." ";
				$lines .= build_profile_link(format_name($thread['username'], $thread['usergroup'], $thread['displaygroup']), $thread['uid']);
				$lview = ($thread['views'] == 1)?$lang->asoi_view:$lang->asoi_views;
				$lines .= " (".$thread['views']." ".$lview.")<br />\n";
				$num++;
			}
		}
		else
			$lines = $lang->asoi_no_threads."<br />\n";
	}
	else if($type == "asoi_mrt")
	{ //MOST REPLIED-TO THREADS
		$query = $db->query("SELECT t.tid, t.subject, t.replies, t.uid, t.icon, u.username, u.usergroup, u.displaygroup, i.* FROM ".$db->table_prefix."threads t LEFT JOIN ".$db->table_prefix."icons i ON i.iid=t.icon LEFT JOIN ".$db->table_prefix."users u ON u.uid=t.uid WHERE ".$fidnot." ORDER BY t.replies DESC LIMIT ".$limit);
		if($db->num_rows($query) > 0)
		{
			$num = 0;
			while($thread = $db->fetch_array($query))
			{
				$icon = "";
				if($thread['icon'] != 0)
					$icon = "<img src=\"".$thread['path']."\" alt=\"".$thread['name']."\" style=\"vertical-align:middle;\" height=\"12\" width=\"12\" /> ";
				$lines .= $icon."<a href=\"".get_thread_link($thread['tid'])."\">".$thread['subject']."</a> ".$lang->asoi_by." ";
				$lines .= build_profile_link(format_name($thread['username'], $thread['usergroup'], $thread['displaygroup']), $thread['uid']);
				$lreply = ($thread['replies'] == 1)?$lang->asoi_reply:$lang->asoi_replies;
				$lines .= " (".$thread['replies']." ".$lreply.")<br />\n";$num++;
			}
		}
		else
			$lines = $lang->asoi_no_threads."<br />\n";
	}
	else if($type == "asoi_nrp")
	{ //NEWEST REPLIES
		$query = $db->query("SELECT p.tid, p.pid, p.subject, p.icon, p.dateline, u.uid, u.username, u.usergroup, u.displaygroup, i.* FROM ".$db->table_prefix."posts p LEFT JOIN ".$db->table_prefix."users u ON u.uid=p.uid LEFT JOIN ".$db->table_prefix."icons i ON i.iid=p.icon WHERE ".$fidnot." AND p.replyto != 0 ORDER BY p.dateline DESC LIMIT ".$limit);
		if($db->num_rows($query) > 0)
		{
			$num = 0;
			while($reply = $db->fetch_array($query))
			{
				$icon = "";
				if($reply['icon'] != 0)
					$icon = "<img src=\"".$reply['path']."\" alt=\"".$reply['name']."\" style=\"vertical-align:middle;\" height=\"12\" width=\"12\" /> ";
				$lines .= $icon."<a href=\"".get_post_link($reply['pid'], $reply['tid'])."\">".$reply['subject']. "</a> (".$lang->asoi_by." ";
				$lines .= build_profile_link(format_name($reply['username'], $reply['usergroup'], $reply['displaygroup']), $reply['uid']);
				$lines .= " ".$lang->asoi_on." <em>".my_date($mybb->settings['dateformat'], $reply['dateline'])." ".my_date($mybb->settings['timeformat'], $reply['dateline'])."</em>)<br />\n";
				$num++;
			}
		}
		else
			$lines = $lang->asoi_no_replies."<br />\n";
	}
	else if($type == "asoi_nth")
	{ //NEWEST THREADS
		$query = $db->query("SELECT t.tid, t.subject, t.icon, t.dateline, u.uid, u.username, u.usergroup, u.displaygroup, i.* FROM ".$db->table_prefix."threads t LEFT JOIN ".$db->table_prefix."users u ON u.uid=t.uid LEFT JOIN ".$db->table_prefix."icons i ON i.iid=t.icon WHERE ".$fidnot." ORDER BY t.dateline DESC LIMIT ".$limit);
		if($db->num_rows($query) > 0)
		{
			$num = 0;
			while($thread = $db->fetch_array($query))
			{
				$icon = "";
				if($thread['icon'] != 0)
					$icon = "<img src=\"".$thread['path']."\" alt=\"".$thread['name']."\" style=\"vertical-align:middle;\" height=\"12\" width=\"12\" /> ";
				$lines .= $icon."<a href=\"".get_thread_link($thread['tid'])."\">".$thread['subject']."</a> (".$lang->asoi_by." ";
				$lines .= build_profile_link(format_name($thread['username'], $thread['usergroup'], $thread['displaygroup']), $thread['uid']);
				$lines .= " ".$lang->asoi_on." <em>".my_date($mybb->settings['dateformat'], $thread['dateline'])." ".my_date($mybb->settings['timeformat'], $thread['dateline'])."</em>)<br />\n";
				$num++;
			}
		}
		else
			$lines = $lang->asoi_no_threads."<br />\n";
	}
	else if($type == "asoi_nep")
	{ //NEWEST POLLS
		$now = time();
		$query = $db->query("SELECT p.pid, p.tid, p.question, p.numvotes, p.dateline, t.icon, u.uid, u.username, u.usergroup, u.displaygroup, i.* FROM ".$db->table_prefix."polls p LEFT JOIN ".$db->table_prefix."threads t ON t.tid=p.tid LEFT JOIN ".$db->table_prefix."users u ON u.uid=t.uid LEFT JOIN ".$db->table_prefix."icons i ON i.iid=t.icon WHERE ".$fidnot." AND ((p.dateline+p.timeout*86400)>".$now." OR p.timeout=0) ORDER BY p.dateline DESC LIMIT ".$limit);
		if($db->num_rows($query) > 0)
		{
			$num = 0;
			while($poll = $db->fetch_array($query))
			{
				$icon = "";
				if($poll['icon'] != 0)
					$icon = "<img src=\"".$poll['path']."\" alt=\"".$poll['name']."\" style=\"vertical-align:middle;\" height=\"12\" width=\"12\" /> ";
				$lines .= $icon."<a href=\"".get_thread_link($poll['tid'])."\">".$poll['question']."</a> ".$lang->asoi_by." ";
				$lines .= build_profile_link(format_name($poll['username'], $poll['usergroup'], $poll['displaygroup']), $poll['uid']);
				$lines .= " ".$lang->asoi_on." <em>".my_date($mybb->settings['dateformat'], $poll['dateline'])." ".my_date($mybb->settings['timeformat'], $poll['dateline'])."</em>";
				$lvote = ($poll['numvotes'] == 1)?$lang->asoi_vote:$lang->asoi_votes;
				$lines .= " (<a href=\"polls.php?action=showresults&pid=".$poll['pid']."\">".$poll['numvotes']." ".$lvote."</a>)<br />\n";
				$num++;
			}
		}
		else
			$lines = $lang->asoi_no_polls."<br />\n";
	}
	else if($type == "asoi_top")
	{ //TOP POSTERS
		$query = $db->query("SELECT u.uid, u.username, u.usergroup, u.displaygroup, u.postnum, COUNT(p.pid) AS replies FROM ".$db->table_prefix."users u LEFT JOIN ".$db->table_prefix."posts p ON u.uid=p.uid AND p.replyto != 0 GROUP BY p.uid ORDER BY u.postnum DESC LIMIT ".$limit);
		if($db->num_rows($query) > 0)
		{
			$num = 0;
			while($user = $db->fetch_array($query))
			{
				$user['threads'] = $user['postnum']-$user['replies'];
				$lpost = ($user['postnum'] == 1)?$lang->asoi_post:$lang->asoi_posts;
				$lthread = ($user['threads'] == 1)?$lang->asoi_thread:$lang->asoi_threads;
				$lreply = ($user['replies'] == 1)?$lang->asoi_reply:$lang->asoi_replies;
				$lines .= build_profile_link(format_name($user['username'], $user['usergroup'], $user['displaygroup']), $user['uid'])." (<a href=\"search.php?action=finduser&uid=".$user['uid']."\">".$user['postnum']." ".$lpost."</a>: ".$user['threads']." ".$lthread." ".$lang->asoi_and." ".$user['replies']." ".$lreply.")<br />\n";
				$num++;
			}
		}
		else
			$lines = $lang->asoi_no_members."<br />\n";
	}
	else if($type == "asoi_tod")
	{ //TODAY'S TOP POSTERS
		$timesearch = asoi_getstamps();
		$query = $db->query("SELECT u.uid, u.username, u.usergroup, u.displaygroup, COUNT(p.pid) AS poststoday, COUNT(q.pid) AS replies FROM ".$db->table_prefix."posts p LEFT JOIN ".$db->table_prefix."users u ON p.uid=u.uid LEFT JOIN ".$db->table_prefix."posts q ON p.pid=q.pid AND q.replyto != 0  WHERE p.dateline >= ".$timesearch." AND p.uid != 0 GROUP BY p.uid ORDER BY poststoday DESC LIMIT ".$limit);
		if($db->num_rows($query) > 0)
		{
			$num = 0;
			while($user = $db->fetch_array($query))
			{
				$user['threads'] = $user['poststoday']-$user['replies'];
				$lpost = ($user['poststoday'] == 1)?$lang->asoi_post:$lang->asoi_posts;
				$lthread = ($user['threads'] == 1)?$lang->asoi_thread:$lang->asoi_threads;
				$lreply = ($user['replies'] == 1)?$lang->asoi_reply:$lang->asoi_replies;
				$lines .= build_profile_link(format_name($user['username'], $user['usergroup'], $user['displaygroup']), $user['uid'])." (<a href=\"search.php?action=finduser&uid=".$user['uid']."\">".$user['poststoday']." ".$lpost."</a>: ".$user['threads']." ".$lthread." ".$lang->asoi_and." ".$user['replies']." ".$lreply.")<br />\n";
				$num++;
			}
		}
		else
			$lines = $lang->asoi_no_members."<br />\n";
	}
	else if($type == "asoi_nmb")
	{ //NEWEST MEMBERS
		$query = $db->query("SELECT u.uid, u.username, u.usergroup, u.displaygroup, u.postnum, u.regdate, COUNT(p.pid) AS replies FROM ".$db->table_prefix."users u LEFT JOIN ".$db->table_prefix."posts p ON u.uid=p.uid AND p.replyto != 0 GROUP BY p.uid ORDER BY u.regdate DESC LIMIT ".$limit);
		if($db->num_rows($query) > 0)
		{
			$num = 0;
			while($user = $db->fetch_array($query))
			{
				$user['threads'] = $user['postnum']-$user['replies'];
				$lpost = ($user['postnum'] == 1)?$lang->asoi_post:$lang->asoi_posts;
				$lthread = ($user['threads'] == 1)?$lang->asoi_thread:$lang->asoi_threads;
				$lreply = ($user['replies'] == 1)?$lang->asoi_reply:$lang->asoi_replies;
				$lines .= build_profile_link(format_name($user['username'], $user['usergroup'], $user['displaygroup']), $user['uid'])." ".$lang->asoi_on." <em>".my_date($mybb->settings['dateformat'], $user['regdate'])." ".my_date($mybb->settings['timeformat'], $user['regdate'])."</em> (<a href=\"search.php?action=finduser&uid=".$user['uid']."\">".$user['postnum']." ".$lpost."</a>: ".$user['threads']." ".$lthread." ".$lang->asoi_and." ".$user['replies']." ".$lreply.")<br />\n";
				$num++;
			}
		}
		else
			$lines = $lang->asoi_no_members."<br />\n";
	}
	else if($type == "asoi_tof")
	{ //TOP FORUMS
		require_once "inc/functions_indicators.php";
		$query = $db->simple_select("forums", "fid, name, threads, posts", $fidnot." AND type='f'", array("limit" => $limit, "order_by" => "posts", "order_dir" => "DESC"));
		if($db->num_rows($query) > 0)
		{
			$num = 0;
			while($forum = $db->fetch_array($query))
			{
				$nr = fetch_unread_count($forum['fid']);
				if($nr > 0)
					$icon = "images/minion.gif";
				else
					$icon = "images/minioff.gif";
				$forum['replies'] = $forum['posts']-$forum['threads'];
				$lthread = ($forum['threads'] == 1)?$lang->asoi_thread:$lang->asoi_threads;
				$lreply = ($forum['replies'] == 1)?$lang->asoi_reply:$lang->asoi_replies;
				$lines .= "<img src=\"".$icon."\" alt=\"\" style=\"vertical-align:middle;margin:-2px;\" /><a href=\"".get_forum_link($forum['fid'])."\">".$forum['name']."</a> (".$forum['threads']." ".$lthread." ".$lang->asoi_and." ".$forum['replies']." ".$lreply.")<br />\n";
				$num++;
			}
		}
		else
			$lines = $lang->asoi_no_forums."<br />\n";
	}
	else if($type == "asoi_rep")
	{ //HIGHEST REPPED
		$query = $db->simple_select("users", "uid, username, usergroup, displaygroup, reputation", "", array("limit" => $limit, "order_by" => "reputation", "order_dir" => "DESC"));
		if($db->num_rows($query) > 0)
		{
			$lang->load("reputation");
			$num = 0;
			while($user = $db->fetch_array($query))
			{
				$lines .= build_profile_link(format_name($user['username'], $user['usergroup'], $user['displaygroup']), $user['uid'])." (".get_reputation($user['reputation'], $user['uid'])."<img src=\"images/asoi_rate.gif\" onClick=\"MyBB.reputation(".$user['uid'].")\" alt=\"\" title=\"".$lang->rate_user."\" style=\"vertical-align:middle;\" height=\"12px\" width=\"12px\" />)<br />\n";
				$num++;
			}
		}
		else
			$lines = $lang->asoi_no_members."<br />\n";
	}
	else if($type == "asoi_evt")
	{ //UPCOMING EVENTS
		$limit2 = $limit;
		$num = 0;
		$tomorrow = asoi_gettodays(1);
		$dayafter = asoi_gettodays(2);
		$query = $db->query("SELECT COUNT(uid) AS birthdays, birthday FROM ".$db->table_prefix."users WHERE birthdayprivacy='all' AND (birthday LIKE '".$tomorrow."%' OR birthday LIKE '".$dayafter."%') GROUP BY birthday");
		while($bday = $db->fetch_array($query))
		{
			if($bday['birthdays'] != 0 && $limit2 != 0)
			{
				if(preg_match('#'.$tomorrow.'#', $bday['birthday']))
					$dateline = asoi_getstamps(1);
				else if(preg_match('#'.$dayafter.'#', $bday['birthday']))
					$dateline = asoi_getstamps(2);
				$bdayparts = explode("-", my_date("j-n-Y", $dateline));
				$lbday = ($bday['birthdays'] == 1)?$lang->asoi_birthday:$lang->asoi_birthdays;
				$lines .= "<img src=\"images/star.gif\" alt=\"\" style=\"vertical-align:middle\" width=\"12px\" height=\"12px\" /> <a href=\"".get_calendar_link(1, $bdayparts[2], $bdayparts[1], $bdayparts[0])."\">".$bday['birthdays']." ".$lbday."</a> ".$lang->asoi_on." <em>".my_date($mybb->settings['dateformat'], $dateline)."</em><br />";
				$limit2--;
				$num++;
			}
		}
		require_once "inc/functions_calendar.php";
		$calendar_permissions = get_calendar_permissions();
		$calendars = cache_calendars();
		if(is_array($calendars) && $limit2 != 0)
		{
			foreach($calendars as $calendar)
			{
				if($calendar_permissions[$calendar['cid']]['canviewcalendar'] == 0)
					continue;
				if($cids != "") $cids .= ", ";
				$cids .= $calendar['cid'];
			}
			$now = time();
			$query = $db->simple_select("events", "eid, cid, name, starttime, endtime", "cid IN (".$cids.") AND (private=0 OR (private=1 AND uid=".$mybb->user['uid'].")) AND (starttime+86400>".$now." OR (starttime<".$now." AND endtime>".$now."))", array("limit" => $limit2, "order_by" => "starttime", "order_dir" => "ASC"));
			if($db->num_rows($query) > 0)
			{
				$lang->load("calendar");
				while($event = $db->fetch_array($query))
				{
					$lines .= "<img src=\"images/toplinks/calendar.gif\" alt=\"\" style=\"vertical-align:middle\" width=\"12px\" height=\"12px\" /> <a href=\"".get_event_link($event['eid'])."\">".$event['name']."</a> ";
					$lines .= ($event['endtime'] != 0)?$lang->asoi_from." <em>".my_date($mybb->settings['dateformat'], $event['starttime'])."</em> ".$lang->asoi_till." <em>".my_date($mybb->settings['dateformat'], $event['endtime']):$lang->asoi_on." <em>".my_date($mybb->settings['dateformat'], $event['starttime']);
					$lines .= "</em><br />\n";
					$num++;
				}
			}
		}
		if($num == 0) $lines = $lang->asoi_no_events."<br />\n";
	}
	while($num < $limit)
	{
		$lines .= "<br />\n";
		$num++;
	}
	return $lines;
}

function asoi_forumperms()
{
	$nothreads = get_unviewable_forums(true);
	$fidnot = ($nothreads != "")?"fid NOT IN (".$nothreads.")":"1=1";
	return $fidnot;
}

function asoi_gettodays($off=0)
{
	global $mybb;
	$stamp = TIME_NOW;
	return my_date("j-n-", $stamp + ($off * 86400));
}

function asoi_getstamps($off=0)
{
	global $mybb;
	$stamp = TIME_NOW;
	$date = my_date("j-n-Y", $stamp + ($off * 86400));
	$dateparts = explode("-", $date);
	if($off != 0) $dateparts[0]++;
	return mktime(0, 0, 0, $dateparts[1], $dateparts[0], $dateparts[2]);
}
?>