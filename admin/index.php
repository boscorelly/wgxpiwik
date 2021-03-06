<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * wgXPiwik module for xoops
 *
 * @copyright       The XOOPS Project (http://xoops.org)
 * @license         GPL 2.0 or later
 * @package         wgxpiwik
 * @since           1.0
 * @min_xoops       2.5.7
 * @author          Goffy - Wedega.com - Email:<webmaster@wedega.com> - Website:<http://wedega.com>
 * @version         $Id: 1.0 index.php 1 Tue 2016/01/12 23:05:11Z Goffy - Wedega $
 */
include __DIR__ .'/header.php';
// Count elements
$countPerms = $permsHandler->getCountPerms();
$sites_list = $piwikHandler->wgxpiwikGetPiwikSites();
$users_list = $piwikHandler->wgxpiwikGetPiwikUsers();

// Template Index
$templateMain = 'wgxpiwik_admin_index.tpl';
// InfoBox Statistics
$adminMenu->addInfoBox(_AM_WGXPIWIK_STATISTICS);
// Info elements
$adminMenu->addInfoBoxLine(_AM_WGXPIWIK_STATISTICS, '<label>'._AM_WGXPIWIK_THEREARE_SITES.'</label>', count($sites_list));
$adminMenu->addInfoBoxLine(_AM_WGXPIWIK_STATISTICS, '<label>'._AM_WGXPIWIK_THEREARE_USERS.'</label>', count($users_list));
$adminMenu->addInfoBoxLine(_AM_WGXPIWIK_STATISTICS, '<label>'._AM_WGXPIWIK_THEREARE_PERMS.'</label>', $countPerms);
// Upload Folders

// Render Index
echo $adminMenu->addNavigation('index.php');
echo $adminMenu->renderIndex();
include __DIR__ .'/footer.php';
