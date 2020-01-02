<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        ir(env("REDIRECT_HTTPS")) 
        {
            $url->formatSchema('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        ir(env("REDIRECT_HTTPS")) 
        {
            $url->app['request']->server('https');
        }
    }
}
