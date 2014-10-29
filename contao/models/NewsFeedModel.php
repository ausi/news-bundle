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

namespace Contao;

use Contao\Model\Collection;


/**
 * Reads and writes news feeds
 *
 * @package   Models
 * @author    Leo Feyer <https://github.com/leofeyer>
 * @copyright Leo Feyer 2005-2014
 */
class NewsFeedModel extends Model
{

	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_news_feed';


	/**
	 * Find all feeds which include a certain news archive
	 *
	 * @param int   $intId      The news archive ID
	 * @param array $arrOptions An optional options array
	 *
	 * @return Collection|null A collection of models or null if the news archive is not part of a feed
	 */
	public static function findByArchive($intId, array $arrOptions=[])
	{
		$t = static::$strTable;
		return static::findBy(["$t.archives LIKE '%\"" . intval($intId) . "\"%'"], null, $arrOptions);
	}


	/**
	 * Find news feeds by their IDs
	 *
	 * @param array $arrIds     An array of news feed IDs
	 * @param array $arrOptions An optional options array
	 *
	 * @return Collection|null A collection of models or null if there are no feeds
	 */
	public static function findByIds($arrIds, array $arrOptions=[])
	{
		if (!is_array($arrIds) || empty($arrIds))
		{
			return null;
		}

		$t = static::$strTable;
		return static::findBy(["$t.id IN(" . implode(',', array_map('intval', $arrIds)) . ")"], null, $arrOptions);
	}
}
