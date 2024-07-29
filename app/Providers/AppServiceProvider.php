<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('username', function ($attribute, $value, $parameters, $validator) {
            // Custom validation logic for username
            return preg_match('/^[a-zA-Z0-9_]+$/', $value);
        });

        Validator::replacer('username', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, ':attribute can only contain letters, numbers, and underscores.');
        });
    }
}
