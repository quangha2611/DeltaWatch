<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.product');
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        return view('pages.product_detail')->with('product', $product );
    }
}
