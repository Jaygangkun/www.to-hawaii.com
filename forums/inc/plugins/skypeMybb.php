<?php

/**
 * Skype MyBB! plugin for MyBB 1.4.x
 * @author mavericck
 * @name Skype MyBB!
 * @version 1.4.1
 * @copyright Copyright (c) 2010, mavericck
 * @license http://www.gnu.org/licenses/gpl.txt GNU Public License
 */

/*
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
*/

// Disallow direct access to this file for security reasons
if(!defined('IN_MYBB'))
{
    die('Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.');
}

define('SKYPE_MYBB_DEFAULT_ACTION', 'call'); // choose between call/chat

$plugins->add_hook('postbit',              'skypeMybbParse');
$plugins->add_hook('postbit_pm',           'skypeMybbParse');
$plugins->add_hook('postbit_announcement', 'skypeMybbParse');
$plugins->add_hook('postbit_prev',         'skypeMybbParse');

function skypeMybb_info()
{
    return array('name'          => 'Skype MyBB!',
                 'description'   => 'Add a Skype&trade; status button to users posts, useful to start a call/chat',
                 'website'       => 'http://mybboard.it',
                 'author'        => 'mavericck',
                 'authorsite'    => 'http://mybboard.it',
                 'version'       => '1.4.1',
                 'guid'          => '66f9a95ec9fba2eb78c8a4448ad2bd16',
                 'compatibility' => '14*'
                );
}

function skypeMybb_activate()
{
    global $db;
    include MYBB_ROOT . '/inc/adminfunctions_templates.php';

    $skypeProfileField = array('name'        => 'Skype&trade; ID',
                               'description' => 'The unique ID used to connect to Skype',
                               'disporder'   => '4',
                               'type'        => 'text',
                               'length'      => '0',
                               'maxlength'   => '255',
                               'required'    => 0,
                               'editable'    => 1,
                               'hidden'      => 0,
                               );

    $db->insert_query('profilefields', $skypeProfileField);
    $skypeFid = (int) $db->insert_id();

    $db->query('ALTER TABLE ' . TABLE_PREFIX . 'userfields ADD fid' . $skypeFid . ' TEXT NOT NULL');

    $skypeMybbSetting1 = array('name'        => 'skype_mybb_fid',
                               'title'       => 'Skype profile field ID',
                               'description' => 'Unique ID of Skype profile field',
                               'optionscode' => 'text',
                               'value'       => $skypeFid,
                               'disporder'   => '1',
                               'gid'         => '0',
                               );

    $db->insert_query('settings', $skypeMybbSetting1);
    rebuildsettings();

    $find     = '#' . preg_quote('{$post[\'button_email\']}') . '#';
    $replace  = '{$post[\'fid' . $skypeFid . '\']}{$post[\'button_email\']}';

    find_replace_templatesets('postbit', $find, $replace, 1);
    find_replace_templatesets('postbit_classic', $find, $replace, 1);
}

function skypeMybb_deactivate()
{
    global $db, $mybb;
    include MYBB_ROOT . '/inc/adminfunctions_templates.php';

    $find    = preg_quote('{$post[\'fid' . $mybb->settings['skype_mybb_fid'] . '\']}');
    $find    = '#' . $find . '#';
    $replace = '';

    find_replace_templatesets('postbit', $find, $replace, 0);
    find_replace_templatesets('postbit_classic', $find, $replace, 0);

    $db->query('ALTER TABLE ' . TABLE_PREFIX . 'userfields DROP fid' . $mybb->settings['skype_mybb_fid']);
    $db->delete_query('profilefields', "name = 'Skype&trade; ID'");
    $db->delete_query('settings', "name = 'skype_mybb_fid'");
}

function skypeMybbParse($post)
{
    global $mybb;

    $skypeFid = $mybb->settings['skype_mybb_fid'];

    if (isset($post["fid$skypeFid"]) == true && $post["fid$skypeFid"] != '')
    {
        $post["fid$skypeFid"] = '<a href="skype:' . $post["fid$skypeFid"] . '?' . SKYPE_MYBB_DEFAULT_ACTION . '" title="Start a ' . SKYPE_MYBB_DEFAULT_ACTION . ' with ' . $post["fid$skypeFid"] . ' in Skype&etrade;"><img src="http://mystatus.skype.com/smallclassic/' . $post["fid$skypeFid"] . '" /></a>';
    }
}

?>