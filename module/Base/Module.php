<?php
namespace Base;
use Zend\Authentication\AuthenticationService,
    Zend\Authentication\Storage\Session as SessionStorage;
use Zend\Mvc\MvcEvent;
use Base\Service\Caminho;
class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    public function getServiceConfig() {
    	return array(
    			'factories' => array(
    					'Base\Service\Caminho' => function($service){
    						$caminho = new Caminho($service);
    						return $caminho;
    					},
    			));
    }					
    public function onBootstrap($e)
    {
       
        $e->getApplication()->getEventManager()->attach('render', function($e) {
        	/*
    		 * title's
    		 */
            $matches    = $e->getRouteMatch()->getMatchedRouteName();
    		$viewHelperManager = $e->getApplication()->getServiceManager()->get('viewHelperManager');
    		$headTitleHelper   = $viewHelperManager->get('headTitle');
    		$siteName   = 'Bidtravel Brasil';
    		$headTitleHelper->setSeparator(' - ');
    		$headTitleHelper->append($siteName);
    		if($matches == "home") $headTitleHelper->append("Pagina Inicial");
        }, 100);
      
    }
}
