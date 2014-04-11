<?php
return array(
    'view_manager' => array(
        'doctype'                  => 'HTML5',
        'display_not_found_reason' => (defined("APP_ENV") && APP_ENV === ENV_DEV),
        'display_exceptions'       => (defined("APP_ENV") && APP_ENV === ENV_DEV),
        'not_found_template'       => 'application/error/404',
        'exception_template'       => 'application/error/index',
    ),
    'module_layouts' => array(
        'NotFound' => 'application/layout/layout',
    ),
);