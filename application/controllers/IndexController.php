<?php 

class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
          $this->view->toto = 'index';  
    }
    
public function aboutAction()
    {
          $this->view->toto = 'about';  
    }
}
