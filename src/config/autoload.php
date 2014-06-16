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
 * Register the templates
 */
TemplateLoader::addFiles(
[
	'mod_newsarchive'   => 'system/modules/news/templates/modules',
	'mod_newslist'      => 'system/modules/news/templates/modules',
	'mod_newsmenu'      => 'system/modules/news/templates/modules',
	'mod_newsmenu_day'  => 'system/modules/news/templates/modules',
	'mod_newsmenu_year' => 'system/modules/news/templates/modules',
	'mod_newsreader'    => 'system/modules/news/templates/modules',
	'news_full'         => 'system/modules/news/templates/news',
	'news_latest'       => 'system/modules/news/templates/news',
	'news_short'        => 'system/modules/news/templates/news',
	'news_simple'       => 'system/modules/news/templates/news',
]);
