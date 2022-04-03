<?php

namespace MidiaSimples\PlanCenterSDK;

use Illuminate\Support\ServiceProvider;

class PlanCenterServiceProvider extends ServiceProvider
{
    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected bool $defer = false;

    /**
     * Publishes all the config file this package needs to function
     */
    public function boot()
    {
        $config = realpath(__DIR__ . '/../config/plancenter.php');

        $this->publishes([
            $config => config_path('plancenter.php')
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider
     * @return array
     */
    public function provides(): array
    {
        return ['laravel-plancenter'];
    }
}