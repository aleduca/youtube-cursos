<?php

use Slim\Factory\AppFactory;

$app = AppFactory::create();

$site = require 'site.php';
$admin = require 'admin.php';

$site($app);
$admin($app);

if ($_ENV['ENV'] === 'production') {
    $app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
        $response->getBody()->write('Something wrong');
        
        return $response;
    });
}

$app->run();
