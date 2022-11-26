<?php

namespace Nayeem\LaravelPwa;

use Illuminate\Support\ServiceProvider;

class PWAServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('laravel-pwa:publish',function($app){
            return new PublishPWA();

        });
        $this->commands([
            'laravel-pwa:publish',

        ]);
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
