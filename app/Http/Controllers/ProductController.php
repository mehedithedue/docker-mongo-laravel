<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->groupBy('product')->get(['product', 'amount', 'unit', 'created_at']);
        
        return view('products')->with('products', $products);
    }

    public function indexJson()
    {
        $products = Product::orderBy('created_at', 'desc')->groupBy('product')->get(['product', 'amount', 'unit', 'created_at']);
        return [ 'data' => $products ];
    }
}