<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use App\Post;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', '=', 0)->with('subCats')->limit(4)->get();
        $brands = Brand::limit(5)->get();
        $newProducts = Product::limit(12)->orderBy('created_at', 'desc')->get();
        $manProducts = Product::where('po_gender', 'male')->get();
        $womanProducts = Product::where('po_gender', 'female')->get();
        $bestProducts = Product::where('po_hot', 1)->get();
        $posts = Post::where('status', 'PUBLISHED')->with('author')->get();
        $viewData = [
            'categories' => $categories,
            'brands' => $brands,
            'newProducts' => $newProducts,
            'manProducts' => $manProducts,
            'womanProducts' => $womanProducts,
            'bestProducts' => $bestProducts,
            'posts' => $posts,
        ];

        return view('pages.index')->with($viewData);
    }
}
