<?php

class Application_Model_Mapper_Product
{
	private $_dbTable = null;
	
	protected function getDbTable(){
		if($this->_dbTable == null){
			$this->_dbTable = new Application_Model_DbTable_Product();
		}

		return $this->_dbTable;
		
	}
	
	public function getList(){
		$rowSet = $this->getDbTable()->fetchAll();
		$products = array();

		foreach ($rowSet as $row){
			$product = new Application_Model_Product();
			$product->setId($row->p_id);
			$product->setLabel($row->p_label);
			$product->setDesc($row->p_desc);
			$products[] = $product;
		}
		
		return $products;
	}
}