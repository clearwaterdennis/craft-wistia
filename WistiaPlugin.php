<?php
namespace Craft;

class WistiaPlugin extends BasePlugin
{
	public function getName()
	{
		return 'Wistia';
	}

	public function getDescription()
	{
		return 'Manage videos and output data using the Wistia API.';
	}

	public function getVersion()
	{
		return '0.1.0';
	}

	public function getDeveloper()
	{
		return 'Caddis';
	}

	public function getDeveloperUrl()
	{
		return 'https://www.caddis.co';
	}

	public function getDocumentationUrl()
	{
		return 'https://www.caddis.co/software/craft/wistia';
	}

	public function getSchemaVersion()
	{
		return '1.0.0';
	}

	public function hasCpSection()
	{
		return true;
	}

	protected function defineSettings()
	{
		return array(
			'apiKey' => [
				AttributeType::String
			],
			'cacheDuration' => [
				AttributeType::Number,
				24
			],
			'thumbnailPath' => [
				AttributeType::String,
				'/images/videos/'
			]
		);
	}

	public function getSettingsHtml()
	{
		return craft()->templates->render('wistia/plugin/settings', [
			'settings' => $this->getSettings()
		]);
	}
}