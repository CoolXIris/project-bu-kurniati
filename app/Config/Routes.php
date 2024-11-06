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
$routes->get('/page/diablo_iv', 'Page::diablo_iv');
$routes->get('/page/inflection_ai', 'Page::inflection_ai');
$routes->get('/page/tv_samsung', 'Page::tv_samsung');
$routes->get('/page/oppo_campus', 'Page::oppo_campus');
$routes->get('/page/robotaxi', 'Page::robotaxi');
$routes->get('/page/permata_me', 'Page::permata_me');
$routes->get('/page/realme13', 'Page::realme13');
$routes->get('/page/realme_13pro', 'Page::realme_13pro');
$routes->get('/page/ipad_m2', 'Page::ipad_m2');
$routes->get('/page/oppo_reno12f', 'Page::oppo_reno12f');
$routes->get('/page/len_yoga9i', 'Page::len_yoga9i');
$routes->get('/page/gal_wtch7', 'Page::gal_wtch7');
$routes->get('/page/iphone13', 'Page::iphone13');
$routes->get('/page/realme_buds', 'Page::realme_buds');
$routes->get('/page/wd_6tb', 'Page::wd_6tb');
