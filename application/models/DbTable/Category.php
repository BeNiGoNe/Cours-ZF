<?php 

class Application_Model_DbTable_Category extends Zend_Db_Table_Abstract
{
	public function __construct(){
		$options = array(
		'db' 	  => Zend_Controller_Front::getInstance()->getParam('bootstrap')
														 ->getResource('multidb')
														 ->getDb('db1'),
		'name' 	  => 'category',
		'primary' => 'c_id'
		);
		
		parent::__construct($options);
	}
}