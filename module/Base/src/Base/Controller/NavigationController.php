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
use Zend\Authentication\AuthenticationService,
    Zend\Authentication\Storage\Session as SessionStorage;


class NavigationController extends AbstractActionController
{
    public function indexAction()
    {
        $em       = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $destinos = $em->getRepository('Base\Entity\Passagem')->findLeiloes();
        $auth     = new AuthenticationService;
        $auth->setStorage(new SessionStorage("Usuario"));

        return new ViewModel(array(
            'destinos' => $destinos,
            'auth'     => $auth
        ));
    }

    public function cadastroAction()
    {
        return new ViewModel();
    }
}