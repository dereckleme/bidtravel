<?php

/**
 * Created by PhpStorm.
 * User: dereck
 * Date: 22/09/15
 * Time: 11:44
 */

namespace Usuario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UsuarioController extends AbstractActionController
{
    public function loginAction()
    {
       return new ViewModel();
    }
}