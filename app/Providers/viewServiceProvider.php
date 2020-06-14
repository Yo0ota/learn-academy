<?php

namespace App\Providers;

use App\Category;
use App\Setting;
use App\Content;
use Illuminate\Support\ServiceProvider;

class viewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('user.includes.header', function($view){
            $view->with('categories', Category::select('id' , 'name')->get());
            $view->with('sett', Setting::select('logo' , 'favicon')->first());
        });

        view()->composer('user.includes.footer', function($view){
            $view->with('categories' , Category::get());
            $view->with('sett', Setting::first());
            $view->with('footer' , Content::where('name' , 'footer')->first());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
