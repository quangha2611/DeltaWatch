<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function index(Request $request) {
        $products = Product::where('po_name', 'like', "%$request->search%")->get();
        $relatedProducts = Product::limit(12)->get();
        $product = Product::first();
        $viewData = [
            'product' => $product,
            'products' => $products,
            'relatedProducts' => $relatedProducts,
        ];
        return view('pages.search')->with($viewData);
    }

}
