<?php

/**
 * dereck
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Base\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class NavigationController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function cadastroAction()
    {
        return new ViewModel();
    }
}