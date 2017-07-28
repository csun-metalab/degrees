<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
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

    public function boot(UrlGenerator $url)
    {
        if($this->app->environment() !== 'local')
        {
            $url->forceSchema('https');
        }
    }
}
