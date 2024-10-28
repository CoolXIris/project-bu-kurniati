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
$routes->get('/page/chipset_exynos2200', 'Page::chipset_exynos2200');
$routes->get('/page/zte_blade', 'Page::zte_blade');
$routes->get('/page/vivo_x100pro', 'Page::vivo_x100pro');


