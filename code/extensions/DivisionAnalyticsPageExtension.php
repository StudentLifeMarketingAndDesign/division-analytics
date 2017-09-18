<?php
class DivisionAnalyticsPageExtension extends Extension {


	public function Analytics(){
		
		if(Director::isLive()){
			$config = SiteConfig::current_site_config(); 
			$data = new ArrayData(array(
				'GoogleAnalyticsID' => $config->GoogleAnalyticsID,
				'UITrackingID' => $config->UITrackingID
			));
			echo 'hello';			
			return $data->renderWith('DivisionAnalytics');
		}
	}

}

