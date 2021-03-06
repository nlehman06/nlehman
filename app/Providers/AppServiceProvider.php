<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Validator;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultSimpleView('vendor.pagination.simple-default');
        Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');
        Blade::if('env', function($environment) {
            return app()->environment($environment);
        });
    }
}
