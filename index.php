<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';


$app = AppFactory::create();

$app->get('/json', function (Request $request, Response $response, $args) {
    $data = [
        'message' => 'Привет, мир!',
        'time' => time()
    ];

    $jsonResponse = $response->withJson($data);

    return $jsonResponse;
});

$app->run();