<?php

namespace Mugaco\Pack;

use Illuminate\Support\ServiceProvider;


use Mugaco\Pack\Middlewares\BeforeMiddleware as Before;

use Illuminate\Routing\Router;

class PackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'pack');
        $this->publishes([
            //no tendrá efecto hasta que no se haga
            // php artisna vendor:publish
            __DIR__.'/config.php' => config_path('pack.php'),
        ]);
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('before', Before::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('pack', function ($app) {
            return new Service();
        });
    }
    public function provides()
    {
        return ['pack'];
    }
}
