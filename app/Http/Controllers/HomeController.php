<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Post;
use App\Product;
use function json_encode;

class HomeController extends Controller
{
    public function index ()
    {
        $brands             = Brand::limit(5)->get();
        $newProducts        = Product::limit(12)->orderBy('created_at', 'desc')->get();
        $manProducts        = Product::where('po_gender', 'male')->get();
        $womanProducts      = Product::where('po_gender', 'female')->get();
        $bestProducts       = Product::where('po_hot', 1)->get();
        $posts              = Post::with("author")->get();
        $appleWatchProducts = Product::where('po_brand', 1)->get();
        $product            = Product::first();
        $relatedProducts    = Product::limit(12)->get();

        $viewData = [
            'brands'             => $brands,
            'newProducts'        => $newProducts,
            'manProducts'        => $manProducts,
            'womanProducts'      => $womanProducts,
            'bestProducts'       => $bestProducts,
            'posts'              => $posts,
            'appleWatchProducts' => $appleWatchProducts,
            'product'            => $product,
            'relatedProducts'    => $relatedProducts,
        ];

        return view('pages.index')->with($viewData);
    }

    public function getAjaxProductsByBrand ($id)
    {
        $brand = Brand::with('products')->findOrFail($id);
        return view('components.pages.index.product_by_brand_item')->with('products', $brand->products);
    }


}
