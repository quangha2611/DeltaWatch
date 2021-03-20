<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Post;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index ()
    {
        $products   = Product::limit(12)->get();
        $categories = Category::limit(4)->get();
        $brands     = Brand::limit(5)->get();
        $viewData   = [
            'products'   => $products,
            'categories' => $categories,
            'brands'     => $brands,
        ];
        return view('pages.product')->with($viewData);
    }

    public function show ($id)
    {
        $product         = Product::findOrFail($id);
        $posts           = Post::limit(4)->get();
        $relatedProducts = Product::limit(12)->get();
        $viewData        = [
            'product'         => $product,
            'posts'           => $posts,
            'relatedProducts' => $relatedProducts,
        ];
        return view('pages.product_detail')->with($viewData);
    }

    public function getAjaxRelatedProduct ($id)
    {
        $product = Product::findOrFail($id);
//        $relatedProduct = Product::where('po_category', $product->po_category)
//                                ->whereNotIn('id', [$id])
//                                ->get();
        $relatedProducts = Product::limit(12)->get();
        $viewData = [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ];
        return view('components.modal_show_product')->with($viewData);
    }
}
