<?php
namespace usuario\Form;

use Zend\Form\Form;
use Zend\Validator;

class CadastroForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('cadastro');

        $this->add(array(
            'name' => 'nome',
            'attributes' => array(
                'type'  => 'Text',
                'class'=>'form-control input-lg nome-cr-conta',
                'placeholder' => 'Nome'
            ),
        ));
        $this->add(array(
            'name' => 'cpf',
            'attributes' => array(
                'type'  => 'Text',
                'class'=>'form-control input-lg',
                'placeholder' => 'CPF'
            ),
        ));
        $this->add(array(
            'name' => 'email',
            'attributes' => array(
                'type'  => 'Text',
                'class'=>'form-control input-lg',
                'placeholder' => 'E-Mail'
            ),
            'required' => true,
            'filters'  => array(
                array('name' => 'Zend\Filter\StringTrim'),
            ),
            'validators' => array(
                new Validator\EmailAddress(),
            ),
        ));
        $this->add(array(
            'name' => 're_email',
            'attributes' => array(
                'type'  => 'Text',
                'class'=>'form-control input-lg',
                'placeholder' => 'Repita o E-Mail'
            ),
        ));

        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type'  => 'Password',
                'class'=>'form-control input-lg',
                'placeholder' => 'Senha'
            ),
            'validators' => array(
                array(
                    'name'      => 'StringLength',
                    'options' => array(
                        'min'      => 4,
                        'max'      => 18,
                    ),
                ),
            ),
        ));

        $this->add(array(
            'name' => 're_password',
            'attributes' => array(
                'type'  => 'Password',
                'class'=>'form-control input-lg',
                'placeholder' => 'Confirmação de Senha'
            ),
        ));
    }
}