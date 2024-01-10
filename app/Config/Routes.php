<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pekerjaan;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/coba', 'Home::coba');
$routes->get('/signin', 'Home::signin');
$routes->get('/signup', 'Home::signup');
// $routes->get('/pekerjaan', 'Home::pekerjaan');
$routes->get('/kontrak', 'Home::kontrak');
$routes->get('/infoPembayaran', 'Home::infoPembayaran');
$routes->get('/tagihanP1', 'Home::tagihanP1');
$routes->get('/tagihanP2', 'Home::tagihanP2');
$routes->get('/tagihanP3', 'Home::tagihanP3');
$routes->get('/tagihanP4', 'Home::tagihanP4');
$routes->get('/tagihanP5', 'Home::tagihanP5');
$routes->get('/tagihanP6', 'Home::tagihanP6');
$routes->get('/dashboard', 'Home::dashboard');

$routes->get('/pekerjaan', [Pekerjaan::class, 'pekerjaan']);
$routes->post('pekerjaan/store', [Pekerjaan::class, 'store']);
$routes->put('pekerjaan/(:any)', [Pekerjaan::class,'update/$1']);
$routes->delete('/pekerjaan/(:any)', [Pekerjaan::class,'destroy/$1']);
