<?php

namespace Onlyus\Helloworld;

use Illuminate\Support\ServiceProvider;

class HelloworldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        //   $this->app->make('Onlyus\Helloworld\HelloworldController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
