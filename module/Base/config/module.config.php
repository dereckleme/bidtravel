<?php
namespace Base;

return array(
    'router' => array(
        'routes' => array(
            'navegacao' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Base\Controller\Navigation',
                        'action'     => 'index',
                    ),
                ),
				'may_terminate' => true,
				'child_routes' => array(
					'cadastro' => array(
						'type' => 'Zend\Mvc\Router\Http\Literal',
						'options' => array(
							'route'    => 'cadastro',
							'defaults' => array(
								'action'     => 'cadastro',
							),
						),
					),
					'promocoes' => array(
						'type' => 'Zend\Mvc\Router\Http\Literal',
						'options' => array(
							'route'    => 'promocoes',
							'defaults' => array(
								'action'     => 'promocoes',
							),
						),
					),
				),
            ),
        ),
    ),
    'controllers' => array(
    		'invokables' => array(
    				'Base\Controller\Navigation' => 'Base\Controller\NavigationController',
					'Base\Controller\Usuario' 	 => 'Base\Controller\UsuarioController',
    		),
    ),
    'view_manager' => array(
    		'display_not_found_reason' => true,
    		'display_exceptions'       => true,
    		'doctype'                  => 'HTML5',
    		'not_found_template'       => 'error/404',
    		'exception_template'       => 'error/navigation',
    		'template_map' => array(
    				'layout/layout'           => __DIR__ . '/../view/layout/empty.phtml',
    				'layout/site'           => __DIR__ . '/../view/layout/navigation.phtml',
    		        'layout/site_logado'           => __DIR__ . '/../view/layout/index_logado.phtml',
    		        'layout/site_logado_adm'           => __DIR__ . '/../view/layout/index_logado_adm.phtml',
    		        'layout/carrinho'                   => __DIR__ . '/../view/layout/layoutCarrinho.phtml',
    		    'layout/caminho'                   => __DIR__ . '/../view/layout/caminho.phtml',
    				'base/navigation/navigation' => __DIR__ . '/../view/base/navigation/navigation.phtml',
    				'error/404'               => __DIR__ . '/../view/error/404.phtml',
    				'error/navigation'             => __DIR__ . '/../view/error/navigation.phtml',
    		),
    		'template_path_stack' => array(
    				__DIR__ . '/../view',
    		),
        'strategies' => array(
        		'ViewJsonStrategy'
        )
    ),


	'doctrine' => array(
		'eventmanager' => array(
			'orm_default' => array(
				'subscribers' => array(
					// pick any listeners you need
					'Gedmo\Tree\TreeListener',
					'Gedmo\Timestampable\TimestampableListener',
					'Gedmo\Sluggable\SluggableListener',
					'Gedmo\Loggable\LoggableListener',
					'Gedmo\Sortable\SortableListener'
				),
			),
		),
		'driver' => array(
			__NAMESPACE__ . '_driver' => array(
				'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
				'cache' => 'array',
				'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
			),
			'orm_default' => array(
				'drivers' => array(
					__NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
				),
			),
		),
	),
);