<?php
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\LiteralField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\SiteConfig\SiteConfig;

class DivisionAnalyticsPageExtension extends DataExtension {

	public function updateCMSFields(FieldList $f) {
		$config = SiteConfig::current_site_config();
		if (!$config->GoogleAnalyticsID) {
			$f->addFieldToTab("Root.Analytics", new LiteralField("AnalyticsWarning",
				"<p class=\"message warning\">Google Analytics ID hasn't been set for this site. <a href=\"admin/settings/\"><em>You can set it in the site's settings &rarr;</em></a></p>"), "Title");
		}
	}

}
