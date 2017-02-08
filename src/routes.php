<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->view->render($response, 'index.html', [
        'tela' => 'Tela de Login'
    ]);
});

$app->get('/autenticar', function (Request $request, Response $response) {
    return $this->view->render($response, 'autenticar/index.html', [
        'tela' => 'Tela de Login'
    ]);
});

$service = $di->get('SaleProducts\Application\ProductService');
$app->get('/products', function (Request $request, Response $response) use ($service) {
    try {
        $result = $service->add('Hello products');
        $response->getBody()->write($result);
        return $response;
    } catch (Throwable $e) {
        echo $e->getMessage();
    }
});
