<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function index(Request $request) {
        $products = Product::where('po_name', 'like', "%$request->search%")->get();
        return view('pages.search')->with('products', $products);
    }

}
