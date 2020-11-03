<?php
use SilverStripe\Control\Director;
use SilverStripe\Core\Extension;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\View\ArrayData;

class DivisionAnalyticsPageControllerExtension extends Extension {

	public function Analytics() {
		if (Director::isLive()) {
			$config = SiteConfig::current_site_config();
			$data = new ArrayData(array(
				'GoogleAnalyticsID' => $config->GoogleAnalyticsID,
			));
			return $data->renderWith('DivisionAnalytics');
		}
	}

	public function GlobalAnalytics() {
		if (Director::isLive()) {
			$data = new ArrayData();
			return $data->renderWith('GlobalAnalytics');
		}
	}

}
