<?php
namespace app\controllers\site;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{
    public function index(Request $request, Response $response)
    {
        view('site/home', ['title' => 'Home']);
        return $response;
    }
}
