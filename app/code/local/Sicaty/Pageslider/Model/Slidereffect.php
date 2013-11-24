<?php
class Sicaty_Pageslider_Model_Slidereffect{
    protected $_options;
	const SLIDEREFFECT_IQ = 'easeInQuad';
	const SLIDEREFFECT_OQ = 'easeOutQuad';
	const SLIDEREFFECT_IOQ = 'easeInOutQuad';
	const SLIDEREFFECT_IC = 'easeInCubic';
	const SLIDEREFFECT_OC = 'easeOutCubic';
	const SLIDEREFFECT_IOC = 'easeInOutCubic';
	const SLIDEREFFECT_IQT = 'easeInQuart';
	const SLIDEREFFECT_OQT = 'easeOutQuart';
	const SLIDEREFFECT_IOQT = 'easeInOutQuart';
	const SLIDEREFFECT_IQU = 'easeInQuint';
	
	const SLIDEREFFECT_PQU = 'easeOutQuint';
	const SLIDEREFFECT_IOQU = 'easeInOutQuint';
	const SLIDEREFFECT_IS = 'easeInSine';
	const SLIDEREFFECT_OS = 'easeOutSine';
	const SLIDEREFFECT_IOS = 'easeInOutSine';
	const SLIDEREFFECT_IE = 'easeInExpo';
	const SLIDEREFFECT_OE = 'easeOutExpo';
	const SLIDEREFFECT_IOE = 'easeInOutExpo';
	const SLIDEREFFECT_ICC = 'easeInCirc';
	
	const SLIDEREFFECT_OCC = 'easeOutCirc';
	const SLIDEREFFECT_IOCC = 'easeInOutCirc';
	const SLIDEREFFECT_IEC = 'easeInElastic';
	const SLIDEREFFECT_OEC = 'easeOutElastic';
	const SLIDEREFFECT_IOEC = 'easeInOutElastic';
	
	const SLIDEREFFECT_IB = 'easeInBack';
	const SLIDEREFFECT_OB = 'easeOutBack';
	const SLIDEREFFECT_IOB = 'easeInOutBack';
	const SLIDEREFFECT_IBE = 'easeInBounce';	
	const SLIDEREFFECT_OBE = 'easeOutBounce';
	const SLIDEREFFECT_IOBE = 'easeInOutBounce';
      
    
    public function toOptionArray(){
        if (!$this->_options) {
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IQ,
			   'label'=>Mage::helper('pageslider')->__('easeInQuad')
			);
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_OQ,
			   'label'=>Mage::helper('pageslider')->__('easeOutQuad')
			);
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IOQ,
			   'label'=>Mage::helper('pageslider')->__('easeInOutQuad')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IQT,
			   'label'=>Mage::helper('pageslider')->__('easeInQuart')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_OQT,
			   'label'=>Mage::helper('pageslider')->__('easeOutQuart')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IOQT,
			   'label'=>Mage::helper('pageslider')->__('easeInOutQuart')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IQU,
			   'label'=>Mage::helper('pageslider')->__('easeInQuint')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_PQU,
			   'label'=>Mage::helper('pageslider')->__('easeOutQuint')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IOQU,
			   'label'=>Mage::helper('pageslider')->__('easeInOutQuint')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IS,
			   'label'=>Mage::helper('pageslider')->__('easeInSine')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_OS,
			   'label'=>Mage::helper('pageslider')->__('easeOutSine')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IOS,
			   'label'=>Mage::helper('pageslider')->__('easeInOutSine')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IE,
			   'label'=>Mage::helper('pageslider')->__('easeInExpo')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_OE,
			   'label'=>Mage::helper('pageslider')->__('easeOutExpo')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IOE,
			   'label'=>Mage::helper('pageslider')->__('easeInOutExpo')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_ICC,
			   'label'=>Mage::helper('pageslider')->__('easeInCirc')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_OCC,
			   'label'=>Mage::helper('pageslider')->__('easeOutCirc')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IOCC,
			   'label'=>Mage::helper('pageslider')->__('easeInOutCirc')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IEC,
			   'label'=>Mage::helper('pageslider')->__('easeInElastic')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_OEC,
			   'label'=>Mage::helper('pageslider')->__('easeOutElastic')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IOEC,
			   'label'=>Mage::helper('pageslider')->__('easeInOutElastic')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IB,
			   'label'=>Mage::helper('pageslider')->__('easeInBack')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_OB,
			   'label'=>Mage::helper('pageslider')->__('easeOutBack')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IOB,
			   'label'=>Mage::helper('pageslider')->__('easeInOutBack')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IBE,
			   'label'=>Mage::helper('pageslider')->__('easeInBounce')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_OBE,
			   'label'=>Mage::helper('pageslider')->__('easeOutBounce')
			);
			
			$this->_options[] = array(
			   'value'=>self::SLIDEREFFECT_IOBE,
			   'label'=>Mage::helper('pageslider')->__('easeInOutBounce')
			);
			
		
			
					

		}
		return $this->_options;
	}
}
