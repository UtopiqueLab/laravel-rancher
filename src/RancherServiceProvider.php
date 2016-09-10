<?php

namespace Benmag\Rancher;

use Illuminate\Support\ServiceProvider;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class RancherServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('rancher', function ($app)
        {
            $client = new Factories\Client(env('RANCHER_API_ENDPOINT'), env('RACNHER_API_ACCESSKEY'), env('RANCHER_API_SECRETKEY'));
            return new Rancher($client);
        });

        $this->app->alias('rancher', 'Benmag\Rancher\Rancher');

    }

}