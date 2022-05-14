<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    
    {  view()->composer('Layouts.shop.sidebar',function($view){
        $listCategory=DB::select("SELECT * FROM category");
        $view->with('listCategory',$listCategory);
    });
        
        //
    }
}
