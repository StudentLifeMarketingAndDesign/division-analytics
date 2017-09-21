<?php
class DivisionAnalyticsPageExtension extends DataExtension {

	public function updateCMSFields(FieldList $f){
		$config = SiteConfig::current_site_config(); 
		if(!$config->GoogleAnalyticsID) {
			$f->addFieldToTab("Root.Main", new LiteralField("AnalyticsWarning",
				"<p class=\"message warning\">Google Analytics ID hasn't been set for this site. <a href=\"admin/settings/\"><em>You can set it in the site's settings &rarr;</em></a></p>"), "Title");
		}

		if($config->Title == 'Your Site Name'){
			$f->addFieldToTab("Root.Main", new LiteralField("AnalyticsWarning",
				"<p class=\"message warning\">The site title is set to the default text and needs to be set for UI analytics to work properly. <a href=\"admin/settings/\"><em>You can set the site title in the settings &rarr;</em></a></p>"), "Title");			
		}
	}



}

