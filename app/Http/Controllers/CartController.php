<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use function array_keys;
use function redirect;
use function var_dump;

class CartController extends Controller
{
    public function index() {
        if (session()->has('order_success')) {
            session()->forget('order_success');
            return view('pages.cart')->with([
                'order_success' => true,
            ]);
        }
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

    public function deleteFromCart($id)
    {
        $old_cart = Session::get('cart') ?? null;
        unset($old_cart[$id]);
        $new_cart = new Cart($old_cart);
        Session::put('cart', $new_cart->cart_items);
        $viewData = [
            'cartItems' => $new_cart->cart_items,
        ];
        return view('components.cart')->with($viewData);
    }

    public function reduceQuantity(Request $request)
    {
        $old_cart = Session::get('cart') ?? null;
        $old_cart[$request->id]['quantity']--;
        if ($old_cart[$request->id]['quantity'] <= 0) {
            unset($old_cart[$request->id]);
        }
        $new_cart = new Cart($old_cart);
        Session::put('cart', $new_cart->cart_items);
        $viewData = [
            'cartItems' => $new_cart->cart_items,
        ];
        return view('components.cart')->with($viewData);
    }

    public function order(Request $request)
    {
        $customer = Auth::guard('customer')->user()->id;
        $items = Session::get('cart') ?? null;
        if ($items) {
            $order_id = Order::query()->insertGetId([
                'customer_id' => $customer,
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            foreach ($items as $key => $item) {
                OrderDetail::query()->insert([
                    'order_id' => $order_id,
                    'product_id' => $key,
                    'product_name' => Product::query()->find($key)->po_name,
                    'product_quantity' => $item['quantity'],
                    'product_price' => $item['price'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Product::query()->find($key)->decrement('po_quantity', $item['quantity']);
            }
            Session::forget('cart');
        }
        session()->put('order_success', true);
        return redirect()->route('get.cart.index');
    }
}
