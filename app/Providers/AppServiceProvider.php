<?php

namespace App\Providers;

use App\Brand;
use App\Category;
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
    }
}
