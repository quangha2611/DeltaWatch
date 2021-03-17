<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Post;
use App\Product;

class HomeController extends Controller
{
    public function index ()
    {
        $brands        = Brand::limit(5)->get();
        $newProducts   = Product::limit(12)->orderBy('created_at', 'desc')->get();
        $manProducts   = Product::where('po_gender', 'male')->get();
        $womanProducts = Product::where('po_gender', 'female')->get();
        $bestProducts  = Product::where('po_hot', 1)->get();
        $posts         = Post::with("author")->get();

        $viewData = [
            'brands'        => $brands,
            'newProducts'   => $newProducts,
            'manProducts'   => $manProducts,
            'womanProducts' => $womanProducts,
            'bestProducts'  => $bestProducts,
            'posts'         => $posts,
        ];

        return view('pages.index')->with($viewData);
    }

    public function getAjaxBrand ($id) {
        $brand = Brand::with('products')->findOrFail($id);
        return response()->json($brand);
    }
}
