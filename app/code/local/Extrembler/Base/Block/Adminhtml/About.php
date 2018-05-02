<?php
/**
/**
* @category Extrembler
* @package Extrembler_Base
* @author  Extrembler <gaurangpadhiyar1993@gmail.com>
*/
class Extrembler_Base_Block_Adminhtml_About extends Mage_Adminhtml_Block_Abstract implements Varien_Data_Form_Element_Renderer_Interface
{
    private $_helper;

    public function __construct()
    {
        $this->_helper = Mage::helper('extremblerbase');
        $this->_helper->run();
        parent::__construct();
    }

    /**
     * Render fieldset html
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
    */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $element  = null;
        $module = str_replace('_', ' ', $this->_helper->_module['module']);
        $version = $this->_helper->_module['version'];
        $class = get_class($this->_helper);
        $logopath = $class::EXTREMBLER_LOGO;

        $html = <<<HTML
                <div style="background:url('$logopath') no-repeat #e7efef; border:1px solid #ccc; min-height:100px; margin:5px 0; padding:68px 15px 15px 140px;">
                    <div style="padding:15px 15px 15px 140px;">
                        <p><strong>$module v $version</strong><br /></p>
                        <p>Review and Share, If you like</p>
                    </div>
                </div>
HTML;
        return $html;
    }
}
