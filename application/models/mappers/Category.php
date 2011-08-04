<?php

class Application_Model_Mapper_Category
{
	private $_dbTable = null;
	
	protected function getDbTable(){
		if($this->_dbTable == null){
			$this->_dbTable = new Application_Model_DbTable_Category();
		}
		return $this->_dbTable;
	}
	
	public function getList(){
		$rowSet = $this->getDbTable()->fetchAll();
		$categories = array();
		
		foreach ($rowSet as $row){
			$category = new Application_Model_Category();
			$category->setId($row->c_id);
			$category->setLabel($row->c_label);
			
			$categories[] = $category;
		}
		
		return $categories;
	}
}