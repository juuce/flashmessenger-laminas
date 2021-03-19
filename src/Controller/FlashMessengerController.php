<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Laminas\Mvc\Plugin\FlashMessenger\Controller;
/**
 * Description of DemoController
 *
 * @author web
 */
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class FlashmessengerController extends AbstractActionController
{
    public function indexAction()
    {
        $this->flashmessenger()->addSuccessMessage('Sample Success message');
        $this->flashmessenger()->addErrorMessage('Sample Error message.');
        $this->flashmessenger()->addInfoMessage('Sample Info message');
        $this->flashmessenger()->addWarningMessage('Sample warning message.');
        return new ViewModel();
    }
    
    public function jsAction(){
        //$this->getResponse()->getHeaders()->addHeaderLine('Content-type', 'application/javascript;charset=utf-8');
         header('Content-type:application/javascript;charset=utf-8');
        $js=  file_get_contents(__dir__."/../../asset/toastr.min.js");
        
        echo $js;
        exit;
    }
    public function cssAction(){
       
        header('Content-type:text/css;charset=utf-8');
        $css=  file_get_contents(__dir__."/../../asset/toastr.min.css");
        
        echo $css;
        exit;
    }
}
