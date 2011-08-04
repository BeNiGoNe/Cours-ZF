<?php

class Application_Model_Mapper_Product extends Application_Model_Mapper_Abstract
{
	
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
	
	public function getListByCategoryId($category){
		
		$rowSet = $this->getDbTable()->fetchAll("c_id = $category");		
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