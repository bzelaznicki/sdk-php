<?php

namespace Getresponse\Sdk\Client\Test\Unit;

use Getresponse\Sdk\Client\GetresponseClient;
use Getresponse\Sdk\GetresponseClientFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class GetresponseClientFactoryTest
 * @package Getresponse\Sdk\Client\Test\Unit
 */
class GetresponseClientFactoryTest extends TestCase
{
	/**
	 * @test
	 */
	public function shouldCreateWithApiKey()
	{
		$client = GetresponseClientFactory::createWithApiKey('apiKey');

		self::assertInstanceOf(GetresponseClient::class, $client);
	}

	/**
	 * @test
	 */
	public function shouldCreateMaxPLWithApiKey()
	{
		$client = GetresponseClientFactory::createMaxPLWithApiKey('apiKey', 'domain.com');

		self::assertInstanceOf(GetresponseClient::class, $client);
	}

	/**
	 * @test
	 */
	public function shouldCreateMaxUSWithApiKey()
	{
		$client = GetresponseClientFactory::createMaxUSWithApiKey('apiKey', 'domain.com');

		self::assertInstanceOf(GetresponseClient::class, $client);
	}

	/**
	 * @test
	 */
	public function shouldCreateWithAccessToken()
	{
		$client = GetresponseClientFactory::createWithAccessToken('accessToken');

		self::assertInstanceOf(GetresponseClient::class, $client);
	}

	/**
	 * @test
	 */
	public function shouldCreate360PLWithAccessToken()
	{
		$client = GetresponseClientFactory::createMaxPLWithAccessToken('accessToken', 'domain.com');

		self::assertInstanceOf(GetresponseClient::class, $client);
	}

	/**
	 * @test
	 */
	public function shouldCreateMaxUSWithAccessToken()
	{
		$client = GetresponseClientFactory::createMaxUSWithAccessToken('accessToken', 'domain.com');

		self::assertInstanceOf(GetresponseClient::class, $client);
	}
}
