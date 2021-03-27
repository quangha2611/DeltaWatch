<?php

namespace App\Providers;

use App\Brand;
use App\Cart;
use App\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register ()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot ()
    {

        //
        Schema::defaultStringLength(191);

        View::share('nav_categories', Category::where('parent_id', '=', 0)->with('subCats')->limit(4)->get());
        View::share('nav_brands', Brand::limit(5)->get());

        View::composer('components.cart', function ($view) {
            $old_cart = Session::get('cart') ?? null;
            $new_cart = new Cart($old_cart);
            $viewData = [
                'cartItems' => $new_cart->cart_items,
            ];
            $view->with($viewData);
        });
    }
}
