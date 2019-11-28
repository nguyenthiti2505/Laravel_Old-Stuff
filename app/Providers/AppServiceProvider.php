<?php

namespace App\Providers;
use App\Category;
use App\sup_category;
use App\product;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('hash/', function () {
             return new BcryptHasher;
            });
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['customer.Page.profile.baidang','Customer.Page.index','customer.Page.doido','customer.Page.chitiet','customer.Page.baidang'],function($view){		
            $category = Category::all();
            $sup_cat = sup_category::all();		
            $product = product::all();			
            $view->with(['category'=>$category,'sup_cat'=>$sup_cat,'product'=>$product]);				
          });			
    }		
}