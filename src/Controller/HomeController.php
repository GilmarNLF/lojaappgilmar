<?php
namespace LojaApp\Controller;

use LojaApp\MVC\View;
use LojaApp\Model\Product;
use LojaApp\Database\Connection;

class HomeController
{
    public function index()
    {
        //var_dump(\LojaApp\Http\Session::get('cart'));
        
        $products = new Product(Connection::getInstance());
        $products = $products->findAll(); //todos os produtos do banco...
        
        return View::render('index', compact('products'));
    }
}

