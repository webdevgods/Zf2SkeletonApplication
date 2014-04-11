<?php
define('ENV_PROD', 'production');
define('ENV_DEV', 'development');
define('APP_ENV', getenv('APP_ENV') === ENV_DEV ? ENV_DEV : ENV_PROD);

if(APP_ENV == ENV_PROD)
{
    ini_set("display_errors", "Off");
    ini_set("display_startup_errors", "Off");
    
    $error_log = ini_get('error_log');
    
    if(strlen($error_log))
    {
        ini_set("log_errors", "On");
        ini_set("error_reporting", "E_ALL");
    }
}

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
require 'init_autoloader.php';

//For ZendDeveloperTools
define('REQUEST_MICROTIME', microtime(true));
define('APPLICATION_ROOT', __DIR__);

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();