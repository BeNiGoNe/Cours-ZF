<?php 

class Application_Model_Category
{
	private $_id;
	private $_label;
	private $_products;
	

	public function getId() {
		return $this->_id;
	}
	public function setId($_id) {
		$this->_id = $_id;
	}
	public function getLabel() {
		return $this->_label;
	}
	public function setLabel($_label) {
		$this->_label = $_label;
	}
	
	public function getProducts() {
		if($this->_products == null){
			$productMapper = new Application_Model_Mapper_Product();
			$this->_products = $productMapper->getListByCategoryId($this->_id);
		}
		
		return $this->_products;
	}
	
	public function setProducts($_products) {
		$this->_products = $_products;
	}

}