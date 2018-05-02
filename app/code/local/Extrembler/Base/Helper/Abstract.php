<?php
/**
* @category Extrembler
* @package Extrembler_Base
* @author  Extrembler <gaurangpadhiyar1993@gmail.com>
*/
abstract class Extrembler_Base_Helper_Abstract extends Mage_Core_Helper_Abstract
{	
	/**
	* Current Store Id
	* @return int
	*/
	protected function storeId()
	{
		return Mage::app()->getStore()->getId();
	}
}