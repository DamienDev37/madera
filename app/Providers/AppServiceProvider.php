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
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
        'App\Repositories\DevisRepository',
        'App\Repositories\MaisonRepository',
        'App\Repositories\ProjetRepository',
        'App\Repositories\ResourceRepository'
    );
    }
}
