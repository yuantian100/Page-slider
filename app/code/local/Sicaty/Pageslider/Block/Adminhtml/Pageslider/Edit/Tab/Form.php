<?php

class Sicaty_Pageslider_Block_Adminhtml_Pageslider_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('pageslider_form', array('legend'=>Mage::helper('pageslider')->__('Slider information')));

  
	  
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('pageslider')->__('Image Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('pageslider')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('pageslider')->__('Disabled'),
              ),
          ),
      ));
         $fieldset->addField('filename', 'image', array(
          'label'     => Mage::helper('pageslider')->__('Image'),
          'required'  => false,
          'name'      => 'filename',
	  ));	
	     $fieldset->addField('weblink', 'text', array(
          'label'     => Mage::helper('pageslider')->__('Image Url'),
		  'class'     => 'validate-url',
          'required'  => false,
		  'after_element_html' => "<small>Image URL</small>",
          'name'      => 'weblink',
      ));
      $fieldset->addField('slider_title', 'text', array(
      		'label'     => Mage::helper('pageslider')->__('Slider Title'),
      		'class'     => 'required-entry',
      		'required'  => true,
      		'name'      => 'slider_title',
      ));    
      $fieldset->addField('slider_content', 'editor', array(
      		'name'      => 'slider_content',
      		'label'     => Mage::helper('pageslider')->__('Slider Content'),
      		'title'     => Mage::helper('pageslider')->__('Slider Content'),
      		'style'     => 'width:280px; height:100px;',
      		'wysiwyg'   => false,
      		'required'  => false,
      ));
        
      $fieldset->addField('page_title', 'text', array(
      		'label'     => Mage::helper('pageslider')->__('Page Title'),
      		'class'     => 'required-entry',
      		'required'  => true,
      		'name'      => 'page_title',
      ));
           
      $fieldset->addField('page_content', 'editor', array(
          'name'      => 'page_content',
          'label'     => Mage::helper('pageslider')->__('Page Content'),
          'title'     => Mage::helper('pageslider')->__('Page Content'),
          'style'     => 'width:280px; height:100px;',
          'wysiwyg'   => false,
          'required'  => false,
      ));

      if ( Mage::getSingleton('adminhtml/session')->getImageSliderData() )
      {
          $data = Mage::getSingleton('adminhtml/session')->getImageSliderData();
          Mage::getSingleton('adminhtml/session')->setImageSliderData(null);
      } elseif ( Mage::registry('pageslider_data') ) {
          $data = Mage::registry('pageslider_data')->getData();
      }
	  $data['store_id'] = explode(',',$data['stores']);
	  $form->setValues($data);
	  
      return parent::_prepareForm();
  }
}