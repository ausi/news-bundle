<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package News
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 1,
[
	'news' =>
	[
		'tables'      => ['tl_news_archive', 'tl_news', 'tl_news_feed', 'tl_content'],
		'icon'        => 'vendor/contao/module-news/contao/assets/icon.gif',
		'table'       => ['TableWizard', 'importTable'],
		'list'        => ['ListWizard', 'importList']
	]
]);


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 2,
[
	'news' =>
	[
		'newslist'    => 'ModuleNewsList',
		'newsreader'  => 'ModuleNewsReader',
		'newsarchive' => 'ModuleNewsArchive',
		'newsmenu'    => 'ModuleNewsMenu'
	]
]);


/**
 * Cron jobs
 */
$GLOBALS['TL_CRON']['daily'][] = ['News', 'generateFeeds'];


/**
 * Register hook to add news items to the indexer
 */
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = ['News', 'purgeOldFeeds'];
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = ['News', 'getSearchablePages'];
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = ['News', 'generateFeeds'];


/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'news';
$GLOBALS['TL_PERMISSIONS'][] = 'newp';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeedp';
