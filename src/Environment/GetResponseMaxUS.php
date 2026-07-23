<?php

namespace Getresponse\Sdk\Environment;

/**
 * Class GetResponseMaxUS
 * @package Getresponse\Sdk\Environment
 */
class GetResponseMaxUS extends GetResponseMax
{
	public const URL = 'https://api3.getresponse360.com';

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return self::URL;
	}
}
