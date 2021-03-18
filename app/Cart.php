<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Cart
{
    public $cart_items;

    public function __construct($old_cart)
    {
        $this->cart_items = $old_cart;
    }

    public function addToCart($item)
    {
        $item_id = $item['id'];
        $item = DB::table('products')->find($item_id);
        if ( !isset($this->cart_items[$item_id]) ) {
            $this->cart_items[$item_id]['name'] = $item->po_name;
            $this->cart_items[$item_id]['image'] = $item->po_image;
            $this->cart_items[$item_id]['quantity'] = 1;
            $this->cart_items[$item_id]['price'] = $item->po_price;
            $this->cart_items[$item_id]['totalPrice'] = $this->cart_items[$item_id]['price'];
        } else {
            $this->cart_items[$item_id]['quantity']++;
            $price = $this->cart_items[$item_id]['price'];
            $this->cart_items[$item_id]['totalPrice'] = $this->cart_items[$item_id]['quantity'] * $price;
        }
    }
}