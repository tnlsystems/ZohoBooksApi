<?php

namespace Webleit\ZohoBooksApi\Modules\Settings;

use Webleit\ZohoBooksApi\Modules\Module;

/**
 * Class Tags
 * @package Webleit\ZohoBooksApi\Modules
 */
class Tags extends Module
{
	/**
	 * @return string
	 */
	public function getUrlPath()
	{
		return 'settings/tags';
	}

	/**
	 * @return string
	 */
	public function getModelClassName()
	{
		return '\\Webleit\\ZohoBooksApi\\Models\\Settings\\Tag';
	}
	
	/**
	 * Return Zoho API name
	 *
	 * This overrides getResourceKey in Module, which normally
	 * returns strtolower of name. However, Zoho returns "reporting_tags"
	 * instead of the expected 'tags' key.
	 */
	public function getResourceKey()
	{
		return "reporting_tags";
	}
}