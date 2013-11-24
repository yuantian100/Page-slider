<?php

class Sicaty_Pageslider_Block_Adminhtml_Pageslider_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'pageslider_id';
        $this->_blockGroup = 'pageslider';
        $this->_controller = 'adminhtml_pageslider';
        
        $this->_updateButton('save', 'label', Mage::helper('pageslider')->__('Save Slider'));
        $this->_updateButton('delete', 'label', Mage::helper('pageslider')->__('Delete Slider'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('pageslider_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'pageslider_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'pageslider_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('pageslider_data') && Mage::registry('pageslider_data')->getId() ) {
            return Mage::helper('pageslider')->__("Edit slider '%s'", $this->htmlEscape(Mage::registry('pageslider_data')->getSlider_title()));
        } else {
            return Mage::helper('pageslider')->__('Add Slider');
        }
    }
}