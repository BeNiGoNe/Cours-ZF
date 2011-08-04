<?php

class Application_Model_Mapper_Category extends Application_Model_Mapper_Abstract
{

	public function getList(){
		$rowSet = $this->getDbTable()->fetchAll();
		$categories = array();
		
		foreach ($rowSet as $row){
			$category = new Application_Model_Category();
			$category->setId($row->c_id);
			//$category->setProducts($row->findDependentRowset('Application_Model_DbTable_Product'));
			$category->setLabel($row->c_label);
			
			$categories[] = $category;
		}
		
		return $categories;
	}

}