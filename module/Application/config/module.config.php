<?php
namespace Application;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            controller\IndexController::class => InvokableFactory::class
        ],
    ],
    'console' => [
        'router' => [
            'routes' => [
                'hello-world' => [
                    'options' => [
                        'route' => 'hello-world',
                        'defaults' => [
                            'controller' => 'Application\controller\Index',
                            'action ' => 'welcomeMessage'
                        ]
                    ]
                ]
            ]
        ]
    ]
];