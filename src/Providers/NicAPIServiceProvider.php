<?php


namespace rexlManu\NicAPI\Providers;


use Illuminate\Support\ServiceProvider;
use NicAPI\NicAPI;
use rexlManu\NicAPI\Services\NicAPIService;

class NicAPIServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $source = realpath(__DIR__ . '../../config/nicapi.php');
        $this->publishes([$source => config_path('nicapi.php')]);

        $this->mergeConfigFrom($source, 'nicapi');
    }

    public function register()
    {
        $this->app->singleton('nicapi', static function () {
            return new NicAPIService();
        });
    }

}