<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('home/sendEmail', 'Home::sendEmail');
// $routes->get('/halo', 'Home::suharto');
// $routes->get('/about', 'About::index');
// $routes->get('/mahasiswa', 'Latihan::index');
// $routes->get('/cv', 'Latihan::cv');
