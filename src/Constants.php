<?php declare(strict_types = 1);

/**
 * Constants.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     common
 * @since          0.1.0
 *
 * @date           04.05.20
 */

namespace FastyBird\ModulesMetadata;

/**
 * Library constants
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     common
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class Constants
{

	public const RESOURCES_FOLDER = __DIR__ . '/../resources';

	public const EXCHANGE_CHANNEL_NAME = 'fb_exchange';

	/**
	 * Modules origins
	 */

	public const NOT_SPECIFIED_ORIGIN = '*';
	public const MODULE_ACCOUNTS_ORIGIN = 'com.fastybird.accounts-module';
	public const MODULE_DEVICES_ORIGIN = 'com.fastybird.devices-module';
	public const MODULE_TRIGGERS_ORIGIN = 'com.fastybird.triggers-module';
	public const MODULE_UI_ORIGIN = 'com.fastybird.ui-module';
	public const MODULE_WEB_UI_ORIGIN = 'com.fastybird.web-ui-module';

	/**
	 * Message bus routing keys
	 */

	/**
	 * Accounts module
	 */

	// Accounts
	public const MESSAGE_BUS_ACCOUNTS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.account';
	public const MESSAGE_BUS_ACCOUNTS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.account';
	public const MESSAGE_BUS_ACCOUNTS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.account';

	// Emails
	public const MESSAGE_BUS_EMAILS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.email';
	public const MESSAGE_BUS_EMAILS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.email';
	public const MESSAGE_BUS_EMAILS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.email';

	// Identities
	public const MESSAGE_BUS_IDENTITIES_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.identity';
	public const MESSAGE_BUS_IDENTITIES_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.identity';
	public const MESSAGE_BUS_IDENTITIES_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.identity';

	/**
	 * Devices module
	 */

	// Devices
	public const MESSAGE_BUS_DEVICES_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.device';
	public const MESSAGE_BUS_DEVICES_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.device';
	public const MESSAGE_BUS_DEVICES_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.device';

	public const MESSAGE_BUS_DEVICES_CONTROLS_ROUTING_KEY = 'fb.bus.control.device';

	// Devices properties
	public const MESSAGE_BUS_DEVICES_PROPERTY_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.device.property';
	public const MESSAGE_BUS_DEVICES_PROPERTY_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.device.property';
	public const MESSAGE_BUS_DEVICES_PROPERTY_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.device.property';

	public const MESSAGE_BUS_DEVICES_PROPERTIES_DATA_ROUTING_KEY = 'fb.bus.data.device.property';

	// Devices configuration
	public const MESSAGE_BUS_DEVICES_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.device.configuration';
	public const MESSAGE_BUS_DEVICES_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.device.configuration';
	public const MESSAGE_BUS_DEVICES_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.device.configuration';

	public const MESSAGE_BUS_DEVICES_CONFIGURATION_DATA_ROUTING_KEY = 'fb.bus.data.device.configuration';

	// Devices connectors
	public const MESSAGE_BUS_DEVICES_CONNECTOR_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.device.connector';
	public const MESSAGE_BUS_DEVICES_CONNECTOR_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.device.connector';
	public const MESSAGE_BUS_DEVICES_CONNECTOR_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.device.connector';

	// Channels
	public const MESSAGE_BUS_CHANNELS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.channel';
	public const MESSAGE_BUS_CHANNELS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.channel';
	public const MESSAGE_BUS_CHANNELS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.channel';

	public const MESSAGE_BUS_CHANNELS_CONTROLS_ROUTING_KEY = 'fb.bus.control.channel';

	// Channels properties
	public const MESSAGE_BUS_CHANNELS_PROPERTY_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.channel.property';
	public const MESSAGE_BUS_CHANNELS_PROPERTY_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.channel.property';
	public const MESSAGE_BUS_CHANNELS_PROPERTY_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.channel.property';

	public const MESSAGE_BUS_CHANNELS_PROPERTIES_DATA_ROUTING_KEY = 'fb.bus.data.channel.property';

	// Channels configuration
	public const MESSAGE_BUS_CHANNELS_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.channel.configuration';
	public const MESSAGE_BUS_CHANNELS_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.channel.configuration';
	public const MESSAGE_BUS_CHANNELS_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.channel.configuration';

	public const MESSAGE_BUS_CHANNELS_CONFIGURATION_DATA_ROUTING_KEY = 'fb.bus.data.channel.configuration';

	// Connectors configuration
	public const MESSAGE_BUS_CONNECTOR_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.connector';
	public const MESSAGE_BUS_CONNECTOR_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.connector';
	public const MESSAGE_BUS_CONNECTOR_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.connector';

	public const MESSAGE_BUS_CONNECTOR_CONTROLS_ROUTING_KEY = 'fb.bus.control.connector';

	/**
	 * Triggers module
	 */

	// Triggers
	public const MESSAGE_BUS_TRIGGERS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.trigger';
	public const MESSAGE_BUS_TRIGGERS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.trigger';
	public const MESSAGE_BUS_TRIGGERS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.trigger';

	public const MESSAGE_BUS_TRIGGER_CONTROLS_ROUTING_KEY = 'fb.bus.control.trigger';

	// Triggers actions
	public const MESSAGE_BUS_TRIGGERS_ACTIONS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.trigger.action';
	public const MESSAGE_BUS_TRIGGERS_ACTIONS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.trigger.action';
	public const MESSAGE_BUS_TRIGGERS_ACTIONS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.trigger.action';

	// Triggers notifications
	public const MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.trigger.notification';
	public const MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.trigger.notification';
	public const MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.trigger.notification';

	// Triggers conditions
	public const MESSAGE_BUS_TRIGGERS_CONDITIONS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.trigger.condition';
	public const MESSAGE_BUS_TRIGGERS_CONDITIONS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.trigger.condition';
	public const MESSAGE_BUS_TRIGGERS_CONDITIONS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.trigger.condition';

	/*
	 * JSON schemas mapping
	 */

	public const JSON_SCHEMAS_MAPPING = [
		self::NOT_SPECIFIED_ORIGIN   => [
			self::MESSAGE_BUS_DEVICES_CONTROLS_ROUTING_KEY            => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.device.control.json',
			self::MESSAGE_BUS_DEVICES_PROPERTIES_DATA_ROUTING_KEY     => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.device.property.json',
			self::MESSAGE_BUS_DEVICES_CONFIGURATION_DATA_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.device.configuration.json',
			self::MESSAGE_BUS_CHANNELS_CONTROLS_ROUTING_KEY           => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.channel.control.json',
			self::MESSAGE_BUS_CHANNELS_PROPERTIES_DATA_ROUTING_KEY    => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.channel.property.json',
			self::MESSAGE_BUS_CHANNELS_CONFIGURATION_DATA_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.channel.configuration.json',
			self::MESSAGE_BUS_CONNECTOR_CONTROLS_ROUTING_KEY          => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.connector.control.json',
			self::MESSAGE_BUS_TRIGGER_CONTROLS_ROUTING_KEY            => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.trigger.control.json',
		],
		self::MODULE_ACCOUNTS_ORIGIN     => [
			self::MESSAGE_BUS_ACCOUNTS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.account.json',
			self::MESSAGE_BUS_ACCOUNTS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.account.json',
			self::MESSAGE_BUS_ACCOUNTS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.account.json',

			self::MESSAGE_BUS_EMAILS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.email.json',
			self::MESSAGE_BUS_EMAILS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.email.json',
			self::MESSAGE_BUS_EMAILS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.email.json',

			self::MESSAGE_BUS_IDENTITIES_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.identity.json',
			self::MESSAGE_BUS_IDENTITIES_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.identity.json',
			self::MESSAGE_BUS_IDENTITIES_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.identity.json',
		],
		self::MODULE_DEVICES_ORIGIN  => [
			self::MESSAGE_BUS_DEVICES_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.json',
			self::MESSAGE_BUS_DEVICES_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.json',
			self::MESSAGE_BUS_DEVICES_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.json',

			self::MESSAGE_BUS_DEVICES_PROPERTY_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.property.json',
			self::MESSAGE_BUS_DEVICES_PROPERTY_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.property.json',
			self::MESSAGE_BUS_DEVICES_PROPERTY_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.property.json',

			self::MESSAGE_BUS_DEVICES_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.configuration.json',
			self::MESSAGE_BUS_DEVICES_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.configuration.json',
			self::MESSAGE_BUS_DEVICES_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.configuration.json',

			self::MESSAGE_BUS_DEVICES_CONNECTOR_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.connector.json',
			self::MESSAGE_BUS_DEVICES_CONNECTOR_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.connector.json',
			self::MESSAGE_BUS_DEVICES_CONNECTOR_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.connector.json',

			self::MESSAGE_BUS_CHANNELS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.json',
			self::MESSAGE_BUS_CHANNELS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.json',
			self::MESSAGE_BUS_CHANNELS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.json',

			self::MESSAGE_BUS_CHANNELS_PROPERTY_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.property.json',
			self::MESSAGE_BUS_CHANNELS_PROPERTY_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.property.json',
			self::MESSAGE_BUS_CHANNELS_PROPERTY_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.property.json',

			self::MESSAGE_BUS_CHANNELS_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.configuration.json',
			self::MESSAGE_BUS_CHANNELS_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.configuration.json',
			self::MESSAGE_BUS_CHANNELS_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.configuration.json',

			self::MESSAGE_BUS_CONNECTOR_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.json',
			self::MESSAGE_BUS_CONNECTOR_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.json',
			self::MESSAGE_BUS_CONNECTOR_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.json',
		],
		self::MODULE_TRIGGERS_ORIGIN => [
			self::MESSAGE_BUS_TRIGGERS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.json',
			self::MESSAGE_BUS_TRIGGERS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.json',
			self::MESSAGE_BUS_TRIGGERS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.json',

			self::MESSAGE_BUS_TRIGGERS_ACTIONS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.action.json',
			self::MESSAGE_BUS_TRIGGERS_ACTIONS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.action.json',
			self::MESSAGE_BUS_TRIGGERS_ACTIONS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.action.json',

			self::MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.notification.json',
			self::MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.notification.json',
			self::MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.notification.json',

			self::MESSAGE_BUS_TRIGGERS_CONDITIONS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.condition.json',
			self::MESSAGE_BUS_TRIGGERS_CONDITIONS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.condition.json',
			self::MESSAGE_BUS_TRIGGERS_CONDITIONS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.condition.json',
		],
	];

	/**
	 * Modules prefixes
	 */

	public const MODULE_ACCOUNTS_PREFIX = 'accounts-module';
	public const MODULE_DEVICES_PREFIX = 'devices-module';
	public const MODULE_TRIGGERS_PREFIX = 'triggers-module';
	public const MODULE_UI_PREFIX = 'ui-module';

	/**
	 * Devices & Channels control actions
	 */
	public const CONTROL_CONFIG = 'configure';
	public const CONTROL_RESET = 'reset';
	public const CONTROL_RECONNECT = 'reconnect';
	public const CONTROL_FACTORY_RESET = 'factory-reset';
	public const CONTROL_OTA = 'ota';
	public const CONTROL_SEARCH = 'search';
	public const CONTROL_RESTART = 'restart';
	public const CONTROL_TRIGGER = 'trigger';

}
