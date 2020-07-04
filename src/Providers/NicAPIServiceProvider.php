<?php


namespace rexlManu\NicAPI\Providers;


use Illuminate\Support\ServiceProvider;
use NicAPI\NicAPI;
use rexlManu\NicAPI\Services\NicAPIService;

class NicAPIServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/nicapi.php' => config_path('nicapi.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/nicapi.php', 'nicapi'
        );
        $this->app->singleton('nicapi.client', static function () {
            return new NicAPIService(config('nicapi'));
        });
    }

    public function provides()
    {
        return ['nicapi.client'];
    }

}
