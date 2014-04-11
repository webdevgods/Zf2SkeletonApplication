<?php
namespace Application;

return array(
    'view_manager' => array(
        'template_map' => array(
            'application/layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/error/404'               => __DIR__ . '/../view/error/404.phtml',
            'application/error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'module_layouts' => array(
        'Application' => 'application/layout/layout',
    ),
);
