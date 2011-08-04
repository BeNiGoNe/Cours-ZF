<?php 

class Application_Model_DbTable_Product extends Zend_Db_Table_Abstract
{
	public function __construct(){
		$options = array(
		'db' 	  	   => Zend_Controller_Front::getInstance()->getParam('bootstrap')
														 ->getResource('multidb')
														 ->getDb('db1'),
		'name' 	 	   => 'product',
		'primary' 	   => 'p_id',
		'referenceMap' => array('Category' => array(
									'columns' 	    => array('c_id'),
									'refTableClass' => 'Application_Model_DbTable_Category',
									'refColumns'    => array('c_id'),
									'onDelete'      => self::CASCADE,
									'onUpdate'      => self::CASCADE
									)
								)
		);
		
		parent::__construct($options);
	}
}