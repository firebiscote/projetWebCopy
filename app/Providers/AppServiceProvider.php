<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\{Locality, Promotion, Center};

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
    {
        Schema::defaultStringLength(191);
        View::composer(['Offers/index', 'offers/create', 'offers/edit'], function ($view) {
            $view->with('localities', Locality::all());
            $view->with('promotions', Promotion::all());
        });
        View::composer(['students/index'], function ($view) {
            $view->with('centers', Center::all());
            $view->with('promotions', Promotion::all());
        });
    }
}