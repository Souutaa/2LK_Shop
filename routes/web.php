<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method' => 'showAction'), array('id' => '[0-9]+')));

// BRAND
$routes->add('adminBrands', new Route(constant('URL_SUBFOLDER') . constant('ADMINBRAND'), array('controller' => 'AdminController', 'method' => 'indexBrandAction'), array()));
$routes->add('createBrands', new Route(constant('URL_SUBFOLDER') . constant('ADMINBRAND') . '/create', array('controller' => 'BrandController', 'method' => 'createBrand'), array()));
$routes->add('editBrands', new Route(constant('URL_SUBFOLDER') . constant('ADMINBRAND') . '/edit/{id}', array('controller' => 'BrandController', 'method' => 'editAction'), array('id' => '([^&]*)')));
$routes->add('updateBrand', new Route(constant('URL_SUBFOLDER') . constant('ADMINBRAND') . '/saveChange', array('controller' => 'BrandController', 'method' => 'updateAction'), array()));
$routes->add('deleteBrand', new Route(constant('URL_SUBFOLDER') . constant('ADMINBRAND') . '/delete/{id}', array('controller' => 'BrandController', 'method' => 'deleteAction'), array('id' => '([^&]*)')));