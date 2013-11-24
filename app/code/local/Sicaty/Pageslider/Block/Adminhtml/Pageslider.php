<?php
class Sicaty_Pageslider_Block_Adminhtml_Pageslider extends Mage_Adminhtml_Block_Widget_Grid_Container {
	public function __construct() {
		$this->_controller = 'adminhtml_pageslider';
		$this->_blockGroup = 'pageslider';
		$this->_headerText = Mage::helper ( 'pageslider' )->__ ( 'Slider Manager' );
		$this->_addButtonLabel = Mage::helper ( 'pageslider' )->__ ( 'Add slider image' );
		parent::__construct ();
	}

}