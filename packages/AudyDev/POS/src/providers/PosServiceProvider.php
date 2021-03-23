<?php

namespace AudyDev\POS\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Controller;

class PosServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('AudyDev\POS\Controllers\PosController');
        $this->loadViewsFrom(__DIR__.'/../views', 'pos');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/../routes.php';

    }
}
