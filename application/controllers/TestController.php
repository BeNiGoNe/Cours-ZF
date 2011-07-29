<?php 

class TestController extends Zend_Controller_Action
{
	public function testAction(){
		$this->view->lol = 'test';
	}
	
	public function test2Action(){
		$this->view->lol = 'test2';
	}
}