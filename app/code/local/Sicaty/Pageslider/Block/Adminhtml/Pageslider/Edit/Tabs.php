<?php

class Sicaty_Pageslider_Block_Adminhtml_Pageslider_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('pageslider_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('pageslider')->__('Slider Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('pageslider')->__('Slider Information'),
          'title'     => Mage::helper('pageslider')->__('Slider Information'),
          'content'   => $this->getLayout()->createBlock('pageslider/adminhtml_pageslider_edit_tab_form')->toHtml(),
      ));
	  
	  
     
      return parent::_beforeToHtml();
  }
}