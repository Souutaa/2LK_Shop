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

// CATEGORY
$routes->add('adminCategory', new Route(constant('URL_SUBFOLDER') . constant('ADMINCATEGORY'), array('controller' => 'AdminController', 'method' => 'indexCategoryAction'), array()));
$routes->add('createCategory', new Route(constant('URL_SUBFOLDER') . constant('ADMINCATEGORY') . '/create', array('controller' => 'CategoryController', 'method' => 'createCategory'), array()));
$routes->add('editCategory', new Route(constant('URL_SUBFOLDER') . constant('ADMINCATEGORY') . '/edit/{id}', array('controller' => 'CategoryController', 'method' => 'editAction'), array('id' => '([^&]*)')));
$routes->add('updateCategory', new Route(constant('URL_SUBFOLDER') . constant('ADMINCATEGORY') . '/saveChange', array('controller' => 'CategoryController', 'method' => 'updateAction'), array()));
$routes->add('deleteCategory', new Route(constant('URL_SUBFOLDER') . constant('ADMINCATEGORY') . '/delete/{id}', array('controller' => 'CategoryController', 'method' => 'deleteAction'), array('id' => '([^&]*)')));

// PRODUCT
$routes->add('adminProduct', new Route(constant('URL_SUBFOLDER') . constant('ADMINPRODUCT'), array('controller' => 'AdminController', 'method' => 'indexProductAction'), array()));
$routes->add('createProduct', new Route(constant('URL_SUBFOLDER') . constant('ADMINPRODUCT') . '/create', array('controller' => 'ProductController', 'method' => 'createProduct'), array()));
$routes->add('getProductDetail', new Route(constant('URL_SUBFOLDER') . constant('ADMINPRODUCT') . '/detail/{id}', array('controller' => 'ProductController', 'method' => 'getProductDetail'), array('id' => '([^&]*)')));
$routes->add('editProduct', new Route(constant('URL_SUBFOLDER') . constant('ADMINPRODUCT') . '/edit/{id}', array('controller' => 'ProductController', 'method' => 'editAction'), array('id' => '([^&]*)')));
$routes->add('updateProduct', new Route(constant('URL_SUBFOLDER') . constant('ADMINPRODUCT') . '/saveChange', array('controller' => 'ProductController', 'method' => 'updateAction'), array()));
$routes->add('addQty', new Route(constant('URL_SUBFOLDER') . constant('ADMINPRODUCT') . '/addQty/{id}', array('controller' => 'ProductController', 'method' => 'addQtyAction'), array('id' => '([^&]*)')));
$routes->add('saveQty', new Route(constant('URL_SUBFOLDER') . constant('ADMINPRODUCT') . '/saveQty', array('controller' => 'ProductController', 'method' => 'saveQtyAction'), array()));