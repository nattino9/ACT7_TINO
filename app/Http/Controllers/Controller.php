<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
        $products = "Product list form in ProductController";
        return view('products.index', ['products' =>$products]);
    }
}
