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

// Templates
TemplateLoader::addFiles(
[
	'mod_newsarchive'   => 'vendor/contao/module-news/contao/templates/modules',
	'mod_newslist'      => 'vendor/contao/module-news/contao/templates/modules',
	'mod_newsmenu'      => 'vendor/contao/module-news/contao/templates/modules',
	'mod_newsmenu_day'  => 'vendor/contao/module-news/contao/templates/modules',
	'mod_newsmenu_year' => 'vendor/contao/module-news/contao/templates/modules',
	'mod_newsreader'    => 'vendor/contao/module-news/contao/templates/modules',
	'news_full'         => 'vendor/contao/module-news/contao/templates/news',
	'news_latest'       => 'vendor/contao/module-news/contao/templates/news',
	'news_short'        => 'vendor/contao/module-news/contao/templates/news',
	'news_simple'       => 'vendor/contao/module-news/contao/templates/news',
]);
