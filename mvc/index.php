<?php

declare(strict_types=1);

require_once 'Router.php';
require_once 'klasa.php';

//włącz serwer 'php -S localhost' 
$router = new App\Router();

$router->get(route: '/', action: function () { echo 'Home'; });
$router->get(route: '/contact', action: function () { echo 'Contact'; });

$router->get('/klasa', [App\Klasa::class, 'index']);
$router->get('/klasa/create', [App\Klasa::class, 'create']);
$router->post('/klasa/create', [App\Klasa::class, 'store']);

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));

phpinfo();