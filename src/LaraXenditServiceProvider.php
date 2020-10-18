<?php

namespace Ghiffariaq\LaraXendit;

use Illuminate\Support\ServiceProvider;
class LaraXenditServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'LaraXendit');
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/lara-xendit.php', 'lara-xendit');

        // Register the service the package provides.
        $this->app->singleton('laraxendit', function ($app) {
            return new LaraXendit;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['LaraXendit'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/lara-xendit.php' => config_path('lara-xendit.php'),
        ], 'lara-xendit.config');


    }


}