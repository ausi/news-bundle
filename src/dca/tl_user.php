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
 * Extend default palette
 */
$GLOBALS['TL_DCA']['tl_user']['palettes']['extend'] = str_replace('fop;', 'fop;{news_legend},news,newp,newsfeeds,newsfeedp;', $GLOBALS['TL_DCA']['tl_user']['palettes']['extend']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['custom'] = str_replace('fop;', 'fop;{news_legend},news,newp,newsfeeds,newsfeedp;', $GLOBALS['TL_DCA']['tl_user']['palettes']['custom']);


/**
 * Add fields to tl_user_group
 */
$GLOBALS['TL_DCA']['tl_user']['fields']['news'] =
[
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['news'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'foreignKey'              => 'tl_news_archive.title',
	'eval'                    => ['multiple'=>true],
	'sql'                     => "blob NULL"
];

$GLOBALS['TL_DCA']['tl_user']['fields']['newp'] =
[
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['newp'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options'                 => ['create', 'delete'],
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => ['multiple'=>true],
	'sql'                     => "blob NULL"
];

$GLOBALS['TL_DCA']['tl_user']['fields']['newsfeeds'] =
[
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['newsfeeds'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'foreignKey'              => 'tl_news_feed.title',
	'eval'                    => ['multiple'=>true],
	'sql'                     => "blob NULL"
];

$GLOBALS['TL_DCA']['tl_user']['fields']['newsfeedp'] =
[
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['newsfeedp'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options'                 => ['create', 'delete'],
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => ['multiple'=>true],
	'sql'                     => "blob NULL"
];
