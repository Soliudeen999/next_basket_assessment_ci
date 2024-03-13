<?php

use App\Controllers\StoreUserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/store-user', [StoreUserController::class, 'storeUser'] );
