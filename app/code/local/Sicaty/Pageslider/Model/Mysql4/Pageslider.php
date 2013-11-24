<?php
class Sicaty_Pageslider_Model_Mysql4_Pageslider extends Mage_Core_Model_Mysql4_Abstract{
	public function _construct(){
		$this->_init('pageslider/entity', 'id');
	}
}