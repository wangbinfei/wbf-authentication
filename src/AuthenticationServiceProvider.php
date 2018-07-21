<?php

namespace Wbf\Authentication;

use Illuminate\Support\ServiceProvider;

class AuthenticationServiceProvider extends ServiceProvider
{
//    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'wbfa');
        $this->publishes([
            __DIR__ . '/../config/authentication.php' => config_path('wbfa.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Authentication::class, function(){
            return new Authentication();
        });
    }

//    public function provides()
//    {
//        return [Authentication::class];
//    }
}
