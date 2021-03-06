<?php declare(strict_types = 1);

namespace Tests\Cases;

use FastyBird\ModulesMetadata\Schemas;
use Nette\Utils;
use Ninjify\Nunjuck\TestCase\BaseTestCase;
use Tester\Assert;

require_once __DIR__ . '/../../../bootstrap.php';

/**
 * @testCase
 */
final class ValidatorTest extends BaseTestCase
{

	/**
	 * @param string $data
	 * @param string $schema
	 * @param mixed[] $expected
	 *
	 * @dataProvider ./../../../fixtures/Schemas/validateValidData.php
	 */
	public function testValidateValidInput(
		string $data,
		string $schema,
		array $expected
	): void {
		$validator = new Schemas\Validator();

		$result = $validator->validate($data, $schema);

		Assert::type(Utils\ArrayHash::class, $result);

		foreach ($expected as $key => $value) {
			Assert::same($value, $result->offsetGet($key));
		}
	}

	/**
	 * @param string $data
	 * @param string $schema
	 *
	 * @dataProvider ./../../../fixtures/Schemas/validateInvalidData.php
	 *
	 * @throws FastyBird\ModulesMetadata\Exceptions\InvalidDataException
	 */
	public function testValidateDevicePropertyInvalid(
		string $data,
		string $schema
	): void {
		$validator = new Schemas\Validator();

		$validator->validate($data, $schema);
	}

}

$test_case = new ValidatorTest();
$test_case->run();
