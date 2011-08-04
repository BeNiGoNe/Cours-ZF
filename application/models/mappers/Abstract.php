<?php

class Application_Model_Mapper_Abstract
{
	private $_dbTable = null;
	
	protected function getDbTable(){
		if($this->_dbTable == null){
			$class = str_replace('Mapper', 'DbTable', get_class($this));
			$this->_dbTable = new $class;
		}
		return $this->_dbTable;
	}
}