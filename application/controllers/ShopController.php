<?php 

class ShopController extends Zend_Controller_Action
{
    public function productAction()
    {
        $id = $this->getRequest()->getParam('id');        
    }
	
    public function allcategoriesAction(){
    	$categoryMapper = new Application_Model_Mapper_Category();
    	$this->view->categories = $categoryMapper->getList();
    }
    
	public function allproductsAction(){
    	$productMapper = new Application_Model_Mapper_Product();
    	$this->view->products = $productMapper->getList();
    }
    
	public function productsbycatidAction(){
		$categoryMapper = new Application_Model_Mapper_Category();
    	$this->view->categories = $categoryMapper->getList();
    }
    
}
