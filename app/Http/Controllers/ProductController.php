<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.product');
    }

    public function productDetail() {
        return view('pages.product_detail');
    }
}
