<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use app\controllers\site\HomeController;

return function (Slim\App $app) {
    $app->get('/', [HomeController::class,'index']);
};
