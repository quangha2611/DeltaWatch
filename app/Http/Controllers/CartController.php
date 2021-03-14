<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function var_dump;

class CartController extends Controller
{
    public function index() {
        return view('pages.cart');
    }

    public function addToCart(Request $request)
    {
        $item = ['id' => $request->id];
        $old_cart = Session::get('cart') ?? null;
        $new_cart = new Cart($old_cart);
        $new_cart->addToCart($item);
        Session::put('cart', $new_cart->cart_items);
        $viewData = [
          'cartItems' => $new_cart->cart_items,
        ];
        return view('components.cart')->with($viewData);
    }
}
