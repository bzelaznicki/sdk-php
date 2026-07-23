<?php

namespace Getresponse\Sdk\Client\Test\Unit\Environment;

use Getresponse\Sdk\Client\Exception\InvalidDomainException;
use Getresponse\Sdk\Environment\GetResponseMaxUS;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;

/**
 * Class GetResponseMaxUSTest
 * @package Getresponse\Sdk\Client\Test\Unit\Environment
 */
class GetResponseMaxUSTest extends TestCase
{
	/**
	 * @var GetResponseMaxUS
	 */
	private $systemUnderTest;

	protected function setUp(): void
	{
		$this->systemUnderTest = new GetResponseMaxUS('custom-domain.getresponse360.com');
	}

	/**
	 * @test
	 */
	public function shouldReturnUrl()
	{
		self::assertEquals('https://api3.getresponse360.com', $this->systemUnderTest->getUrl());
	}

	/**
	 * @test
	 */
	public function shouldAddXDomainHeaderToRequestDuringProcessing()
	{
		$request = new Request('GET', 'https://api3.getresponse360.com/v3/accounts');

		$processedRequest = $this->systemUnderTest->processRequest($request);

		self::assertTrue($processedRequest->hasHeader('X-Domain'));
		self::assertEquals('custom-domain.getresponse360.com', $processedRequest->getHeaderLine('X-Domain'));
	}

	/**
	 * @test
	 * @dataProvider invalidDomainProvider
	 *
	 * @param string $domain
	 */
	public function shouldThrowExceptionIfDomainIsNotValid($domain)
	{
		$this->expectException(InvalidDomainException::class);
		new GetResponseMaxUS($domain);
	}

	/**
	 * @return array
	 */
	public static function invalidDomainProvider()
	{
		return [
			['invalid-domain'],
			['https://example.com'],
			['in:valid']
		];
	}
}
