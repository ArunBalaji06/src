<?php

namespace DevPac\Calculation1\App\Providers;

use Illuminate\Support\ServiceProvider;

class CalculationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('DevPac\Calculation1\App\Http\Controllers\CalculationController');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'calculation');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }
}
