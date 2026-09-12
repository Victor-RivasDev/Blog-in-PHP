<?php

use App\Controllers\AboutController;
use App\Controllers\HomeController;
use App\Controllers\LinksController;
use App\Controllers\PostController;
use Framework\Middleware\Authenticated;


$router->get('/',       [HomeController::class,     'index']);
$router->get('/post',   [PostController::class,     'index']);
$router->get('/about',  [AboutController::class,    'index']);
//$router->get('/blog',   [BlogController::class,     'index']);

$router->get('/links',              [LinksController::class,     'index']);
$router->get('/links/create',       [LinksController::class,     'create'], Authenticated::class);
$router->post('/links/store',       [LinksController::class,     'store'],  Authenticated::class);
$router->delete('/links/delete',    [LinksController::class,     'destroy'],  Authenticated::class);
$router->get('/links/edit',         [LinksController::class,     'edit'],  Authenticated::class);
$router->put('/links/update',      [LinksController::class,     'update'],  Authenticated::class);

?>