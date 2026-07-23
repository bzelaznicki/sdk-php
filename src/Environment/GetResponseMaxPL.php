<?php

namespace Getresponse\Sdk\Environment;

/**
 * Class GetResponseMaxPL
 * @package Getresponse\Sdk\Environment
 */
class GetResponseMaxPL extends GetResponseMax
{
	public const URL = 'https://api3.getresponse360.pl';

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return self::URL;
	}
}
