<?php 

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initRouter() {
		$router = Zend_Controller_Front::getInstance()->getRouter();		
		$routeConfig = new Zend_Config_Ini(CONFIG_PATH . DS . 'routes.ini', 'production');
		$router->addConfig($routeConfig, 'routes');
	}
}