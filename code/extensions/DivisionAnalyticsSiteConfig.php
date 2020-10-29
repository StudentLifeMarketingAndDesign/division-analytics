<?php
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;

class DivisionAnalyticsSiteConfig extends DataExtension {

	private static $db = array(
		'GoogleAnalyticsID' => 'Text',
		'DisableUITracking' => 'Boolean',
		//Leaving old internal analytics id in db in case we need to roll back:
		'InternalAnalyticsID' => 'Text',
	);

	private static $has_one = array(

	);

	private static $defaults = array(

	);

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.Analytics', new TextField('GoogleAnalyticsID', 'Google Analytics ID (UA-XXXXX-X)'));
		$fields->addFieldToTab('Root.Analytics', new CheckboxField('DisableUITracking', 'Disable UI Tracking Utility'));

		return $fields;
	}

}
