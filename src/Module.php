<?php

namespace Laminas\Mvc\Plugin\FlashMessenger;

use Laminas\Mvc\ModuleRouteListener;
use Laminas\Mvc\MvcEvent;

class Module {
    public function onBootstrap(MvcEvent $e) {
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $ViewHelperManager=$e->getApplication()->getServiceManager()->get('ViewHelperManager');
        $e->getApplication()->getServiceManager()->get('ViewHelperManager')->setFactory('FlashMsg', function($sm) use ($ViewHelperManager) {
            
            $viewHelper = new \Zf3\Flashmessenger\View\Helper\FlashMsg(
                    $ViewHelperManager->get('FlashMessenger'),
                    $ViewHelperManager->get('inlinescript'),
                    $ViewHelperManager->get('HeadLink'),
                    $ViewHelperManager->get('url'));
                
                return $viewHelper;
            });
    }

    public function getConfig() {
        return include __DIR__ . '/../config/module.config.php';
    }

    /*public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__=> __DIR__ . '/src/',
                ),
            ),
        );
    }*/

}
