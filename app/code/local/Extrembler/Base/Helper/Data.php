<?php
/**
* @category Extrembler
* @package Extrembler_Base
* @author  Extrembler <gaurangpadhiyar1993@gmail.com>
*/
class Extrembler_Base_Helper_Data extends Extrembler_Base_Helper_Abstract
{
	const EXTREMBLER_LOGO = 'data:image/png;base64,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' ;

	public $_module;

	private function getModuleDetails()
	{
		$modules = Mage::getConfig()->getNode('modules')->children();
        $modulesArray = (array)$modules;
        $module = '';
		$version = '';
        foreach($modulesArray as $k => $v){
            if(strpos(strtolower($k), Mage::app()->getRequest()->getParam('section')) !== false){
                $module = $k;
            };
        }
        if(!is_null($module)){
        	$version = Mage::getConfig()->getNode()->modules->$module->version;
        }
        $this->_module = array('module'=>$module,'version'=>$version);
	}
	
	public function run()
	{
		$this->getModuleDetails();
		return $this;
	}
}