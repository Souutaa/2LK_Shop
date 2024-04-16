<?php
namespace App\Controllers;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;
use App\Models\Products;

class ProductController
{
    // Show the product attributes based on the id.
    public function showAction(int $id, RouteCollection $routes)
    {
        $product = new Product();
        $product->read($id);

        require_once APP_ROOT . '/views/product.view.php';
    }

    public function indexAction(RouteCollection $routes, Request $request) {
        startSession();
        $productList = new Products();
        $productList->getAll();
        $name = 'admin/product/index';
        require_once APP_ROOT . '/views/layout.view.php';
    }

}