<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Validator::extend('custom_time_format', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^([01]?[0-9]|2[0-3]):([0-5]?[0-9])(:([0-5]?[0-9]))?$/', $value);
        });
    }
}
