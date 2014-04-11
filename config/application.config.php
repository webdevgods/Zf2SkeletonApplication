<?php
$modules = array(
        'DoctrineModule',
        'DoctrineORMModule',
        'ZendDeveloperTools',
        'EdpModuleLayouts',
        'ZfcBase',
        'Application',
    );

return array(
    // This should be an array of module namespaces used in the application.
    'modules' => $modules,

    // These are various options for the listeners attached to the ModuleManager
    'module_listener_options' => array(
        // This should be an array of paths in which modules reside.
        // If a string key is provided, the listener will consider that a module
        // namespace, the value of that key the specific path to that module's
        // Module class.
        'module_paths' => array(
            './module',
            './vendor',
        ),
        // An array of paths from which to glob configuration files after
        // modules are loaded. These effectively overide configuration
        // provided by modules themselves. Paths may use GLOB_BRACE notation.
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        // Whether or not to enable a configuration cache.
        // If enabled, the merged configuration will be cached and used in
        // subsequent requests.
        'config_cache_enabled' => (!defined("APP_ENV") || APP_ENV === ENV_PROD),
        // The key used to create the configuration cache file name.
        'config_cache_key' => "2245023265ae4cf87d02c8b6ba991139", 
        // Whether or not to enable a module class map cache.
        // If enabled, creates a module class map cache which will be used
        // by in future requests, to reduce the autoloading process.
        'module_map_cache_enabled' => (!defined("APP_ENV") || APP_ENV === ENV_PROD),
        // The key used to create the class map cache file name.
        'module_map_cache_key' => "496fe9daf9baed5sd03314f04518b928",         
        // The path in which to cache merged configuration.
        'cache_dir' => "./data/cache",
    ),
);
