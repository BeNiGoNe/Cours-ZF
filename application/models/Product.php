<?php 

class Application_Model_Product
{
	private $_id;
	private $_category = null;
	private $_label;
	private $_desc;
	private $_price;
	

	public function getCategory() {
		return $this->_category;
	}
	public function getDesc() {
		return $this->_desc;
	}
	public function getPrice() {
		return $this->_price;
	}
	public function setCategory($_category) {
		$this->_category = $_category;
	}
	public function setDesc($_desc) {
		$this->_desc = $_desc;
	}
	public function setPrice($_price) {
		$this->_price = $_price;
	}
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

}