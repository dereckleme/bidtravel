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
use Usuario\Form\CadastroForm;

class UsuarioController extends AbstractActionController
{
    public function loginAction()
    {
       return new ViewModel();
    }

    public function cadastroAction()
    {
        $formCadastro    = new CadastroForm();
        $request         = $this->getRequest();

        if ($request->isPost())
        {
            $formCadastro->setData($request->getPost());

            if ($formCadastro->isValid()) {
                $cadastro = $this->getServiceLocator()->get('Usuario\Service\Cadastro');
                $cadastro->insert(array(
                    'nome'  => $request->getPost('nome')
                ));


                die;
            }
        }

        return new ViewModel(array('form' => $formCadastro));
    }
}