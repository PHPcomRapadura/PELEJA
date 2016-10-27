<?php
use Phalcon\Di;

error_reporting(E_ALL);

define('BASE_PATH', __DIR__);
define('APP_PATH', BASE_PATH . '/app');

try {

    /**
     * The FactoryDefault Dependency Injector automatically registers
     * the services that provide a full stack framework.
     */
    $di = new Di();

    /**
     * Read services
     */
    include APP_PATH . "/config/services.php";

    /**
     * Get config service for use in inline setup below
     */
    $config = $di->getConfig();

    /**
     * Include Autoloader
     */
    include APP_PATH . '/config/loader.php';

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    $application->useImplicitView(false);

    $application->handle();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
