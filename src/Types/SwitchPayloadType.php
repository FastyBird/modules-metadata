<?php declare(strict_types = 1);

/**
 * SwitchPayloadType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 * @since          0.1.0
 *
 * @date           03.03.20
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;

/**
 * Switch channel supported payload types
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class SwitchPayloadType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const TYPE_ON = 'on';
	public const TYPE_OFF = 'off';
	public const TYPE_TOGGLE = 'toggle';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
