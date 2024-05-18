<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use App\Providers\RouteServiceProviders;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        $locale = Session::get('$locale','en');
        app()->setLocale($locale);
        if($locale == 'fa' || $locale == 'ps'){
            $direction = 'rtl';
        }else{
            $direction ='ltr';
        }
        view()->share('pageDirection', $direction);

    }
}
