<?php 
class Sicaty_Pageslider_Block_Pageslider extends Mage_Core_Block_Template {

	public function getImageCollection() {
		$collection = Mage::getModel('pageslider/pageslider')->getCollection()
			->addFieldToFilter('status',1);		
		$sliders = array();
		foreach ($collection as $slider) {			
				$sliders[] = $slider;
		}
		return $sliders;
	}
	
} 