<?php

	class DivisionAnalyticsPageControllerExtension extends Extension {
		
		public function Analytics(){
			if(Director::isLive()){
				$config = SiteConfig::current_site_config(); 
				$data = new ArrayData(array(
					'GoogleAnalyticsID' => $config->GoogleAnalyticsID,
					'UITrackingID' => $config->UITrackingID
				));			
				return $data->renderWith('DivisionAnalytics');
			}
		}
	}