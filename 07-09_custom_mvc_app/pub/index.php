<?php
/*
 * The model-view-controller (MVC) pattern (...) lets you break up code into logical objects that serve very specific purposes.
 * Models serve as a data access layer where data is fetched and returned in formats usable throughout your application.
 * Controllers handle the request, process the data returned from models and load views to send in the response.
 * And views are display templates (markup, xml, etc) that are sent in the response to the web browser.
 * Source: https://phptherightway.com/pages/Design-Patterns.html
 */

define('BP', dirname(__DIR__));

// autoloader
spl_autoload_register(function ($class) {
    $class = lcfirst($class);
    $filename = BP . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    if (file_exists($filename)) {
        require_once $filename;
    }
});

$router = new \App\Core\Router();
$application = new \App\Core\Application($router);

try {
    $response = $application->run();
} catch (\App\Exception\RouterException $e) {
    $response = '<h1>404</h1>';
} catch (\Exception $e) {
    $response = '<h1>500</h1>';
}

echo $response;
