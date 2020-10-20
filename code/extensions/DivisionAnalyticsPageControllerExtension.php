<?php
use SilverStripe\Core\Extension;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\View\ArrayData;

class DivisionAnalyticsPageControllerExtension extends Extension {

	public function Analytics() {

		$config = SiteConfig::current_site_config();
		$data = new ArrayData(array(
			'GoogleAnalyticsID' => $config->GoogleAnalyticsID,
			'UITrackingID' => $config->UITrackingID,
		));
		return $data->renderWith('DivisionAnalytics');

	}
}
