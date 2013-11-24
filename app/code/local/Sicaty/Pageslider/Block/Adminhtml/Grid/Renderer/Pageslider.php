<?php
class Sicaty_Pageslider_Block_Adminhtml_Grid_Renderer_Pageslider extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract{
	
	public function render(Varien_Object $row)
	{
		if($row->getFilename()==""){
			return "No image yet";
		}
		else{
			return "<img src='".Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA)."bsimages/".$row->getFilename()."' height='40'/>";
		}
	}
}