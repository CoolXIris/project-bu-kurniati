<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/review', 'Page::review');
$routes->get('/gadget', 'Page::gadget');
$routes->get('/laptop', 'Page::laptop');
$routes->get('/news', 'Page::news');
$routes->get('/recommended', 'Page::recommended');
$routes->get('/tips', 'Page::tips');
$routes->get('/page/mediatek_dimensity9400', 'Page::mediatek_dimensity9400');


