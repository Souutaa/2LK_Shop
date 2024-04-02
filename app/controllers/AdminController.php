<?php
namespace App\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Dashboards;
use App\Models\Orders;
use App\Models\PermissionGroups;
use App\Models\Permissions;
use App\Models\Products;
use App\Models\Role;
use App\Models\Roles;
use App\Models\DashBoard;
use App\Models\User;
use App\Models\Users;
use App\Models\Warranties;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

class AdminController {
  public function indexHomeAction(RouteCollection $routes, Request $request) {
    startSession();    
    // require_once APP_ROOT . '/views/admin/layout.view.php';
    require_once APP_ROOT . '/views/admin/layout.view.php';
  }
  public function indexBrandAction(RouteCollection $routes, Request $request) {
    // startSession();
    // $user = new User();
    // $user = unserialize($_SESSION['user']);
    // if (!in_array('Br_View', $user->getPermissions())) {
    //   redirect(getPath($routes, 'homepage'));
    //   die();
    // }
    $name = '/brand/index';    
    // $BrandList = new Brands();
    // $BrandList->getAllBrands();
    require_once APP_ROOT . '/views/admin/layout.view.php';
  }

  
}