<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();


$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method' => 'showAction'), array('id' => '[0-9]+')));

$routes->add('admin', new Route(constant('URL_SUBFOLDER') . '/admin', array('controller' => 'AdminController', 'method' => 'indexHomeAction'), array()));

$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method' => 'indexAction'), array()));

$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'SessionController', 'method' => 'loginAction'), array()));
$routes->add('logout', new Route(constant('URL_SUBFOLDER') . '/logout', array('controller' => 'SessionController', 'method' => 'logoutAction'), array()));
$routes->add('register', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'RegisterController', 'method' => 'indexAction')));
// BRAND
$routes->add('adminBrands', new Route(constant('URL_SUBFOLDER') . constant('ADMINBRAND'), array('controller' => 'AdminController', 'method' => 'indexBrandAction'), array()));
$routes->add('createBrands', new Route(constant('URL_SUBFOLDER') . constant('ADMINBRAND') . '/create', array('controller' => 'BrandController', 'method' => 'createBrand'), array()));
$routes->add('editBrands', new Route(constant('URL_SUBFOLDER') . constant('ADMINBRAND') . '/edit/{id}', array('controller' => 'BrandController', 'method' => 'editAction'), array('id' => '([^&]*)')));
$routes->add('updateBrand', new Route(constant('URL_SUBFOLDER') . constant('ADMINBRAND') . '/saveChange', array('controller' => 'BrandController', 'method' => 'updateAction'), array()));
$routes->add('deleteBrand', new Route(constant('URL_SUBFOLDER') . constant('ADMINBRAND') . '/delete/{id}', array('controller' => 'BrandController', 'method' => 'deleteAction'), array('id' => '([^&]*)')));

