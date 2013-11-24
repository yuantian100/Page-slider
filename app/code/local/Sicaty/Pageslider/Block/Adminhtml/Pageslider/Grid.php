<?php

Class Sicaty_Pageslider_Block_Adminhtml_Pageslider_Grid extends Mage_Adminhtml_Block_Widget_Grid{
	
	public function __construct()
	{
		parent::__construct();
		$this->setId('pagesliderGrid');
		$this->setDefaultSort('id');
		$this->setDefaultDir('ASC');
		$this->setSaveParametersInSession(true);
	}
	protected function _prepareCollection()
	{
		$collection = Mage::getModel('pageslider/pageslider')->getCollection();
		$this->setCollection($collection);
		return parent::_prepareCollection();
	}
	protected function _prepareColumns()
	{
		$this->addColumn('id', array(
				'header'    => Mage::helper('pageslider')->__('ID'),
				'align'     =>'right',
				'width'     => '50px',
				'index'     => 'id',
		));
	
		$this->addColumn('slider_title', array(
				'header'    => Mage::helper('pageslider')->__('Slider Title'),
				'align'     => 'left',	
				'index'     => 'slider_title',						
		));
		$this->addColumn('slider_content', array(
				'header'    => Mage::helper('pageslider')->__('Slider Content'),
				'align'     => 'left',
				'index'     => 'slider_content',
		));
		
		$this->addColumn('filename', array(
				'header'    => Mage::helper('pageslider')->__('Slider image'),
				'align'     => 'center',
				'width'		=>'120px',
				//show imgage thumbnail
				'renderer'	=> 'pageslider/adminhtml_grid_renderer_pageslider',
				'index'     => 'filename',
		));
		
		
		$this->addColumn('status', array(
				'header'    => Mage::helper('pageslider')->__('Status'),
				'align'     => 'left',
				'width'     => '80px',
				'index'     => 'status',
				'type'      => 'options',
				'options'   => array(
						1 => 'Enabled',
						2 => 'Disabled',
				),
		));
		 
		$this->addColumn('action',
				array(
						'header'    =>  Mage::helper('pageslider')->__('Action'),
						'width'     => '100',
						'type'      => 'action',
						'getter'    => 'getId',
						'actions'   => array(
								array(
										'caption'   => Mage::helper('pageslider')->__('Edit'),
										'url'       => array('base'=> '*/*/edit'),
										'field'     => 'id'
								)
						),
						'filter'    => false,
						'sortable'  => false,
						'index'     => 'stores',
						'is_system' => true,
				));
	
		//$this->addExportType('*/*/exportCsv', Mage::helper('pageslider')->__('CSV'));
		//$this->addExportType('*/*/exportXml', Mage::helper('pageslider')->__('XML'));
		 
		return parent::_prepareColumns();
	}
	
	
	
	
	protected function _prepareMassaction()
	{
		$this->setMassactionIdField('pageslider_id');
		$this->getMassactionBlock()->setFormFieldName('pageslider');
	
		$this->getMassactionBlock()->addItem('delete', array(
				'label'    => Mage::helper('pageslider')->__('Delete'),
				'url'      => $this->getUrl('*/*/massDelete'),
				'confirm'  => Mage::helper('pageslider')->__('Are you sure?')
		));
	
		$statuses = Mage::getSingleton('pageslider/status')->getOptionArray();
	
		array_unshift($statuses, array('label'=>'', 'value'=>''));
		$this->getMassactionBlock()->addItem('status', array(
				'label'=> Mage::helper('pageslider')->__('Change status'),
				'url'  => $this->getUrl('*/*/massStatus', array('_current'=>true)),
				'additional' => array(
						'visibility' => array(
								'name' => 'status',
								'type' => 'select',
								'class' => 'required-entry',
								'label' => Mage::helper('pageslider')->__('Status'),
								'values' => $statuses
						)
				)
		));
		return $this;
	}
	
	
	
	
	
	
	
	
	public function getRowUrl($row)
	{
		return $this->getUrl('*/*/edit', array('id' => $row->getId()));
	}
}