<?php
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\View\Parsers\URLSegmentFilter;

class DivisionAnalyticsSiteConfig extends DataExtension {

	private static $db = array(
		'GoogleAnalyticsID' => 'Text',
		'DisableUITracking' => 'Boolean',
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

	public function UITrackingID() {
		$siteName = $this->InternalAnalyticsID;
		$prefix = 'uiowa.edu.md-';
		$filteredSiteName = $this->generateNiceSiteName($siteName);
		return $prefix . $filteredSiteName;

	}

	public function generateNiceSiteName($name) {
		$filter = URLSegmentFilter::create();
		$filteredSiteName = $filter->filter($name);

		return $filteredSiteName;
	}

	public function requireDefaultRecords() {
		parent::requireDefaultRecords();

		$config = SiteConfig::current_site_config();
		$siteName = $config->Title;

		if (!$config->InternalAnalyticsID) {
			$config->InternalAnalyticsID = $this->generateNiceSiteName($siteName);
			$config->write();
		}

	}
}
