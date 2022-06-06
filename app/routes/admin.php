<?php

use app\controllers\admin\LoginController;
use Slim\Routing\RouteCollectorProxy;

return function (Slim\App $app) {
    $app->group('/admin', function (RouteCollectorProxy $group) {
        $group->get('/login', [LoginController::class, 'index']);
    });
};
