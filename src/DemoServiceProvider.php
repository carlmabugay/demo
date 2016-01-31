<?php

namespace Carlmabugay\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Route
        include __DIR__.'/routes.php';

        $this->publishes([
        	__DIR__.'/Config/demo.php' => config_path('demo.php'),
    	], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    	$this->mergeConfigFrom( __DIR__.'/Config/demo.php', 'demo');

        // View
        $this->loadViewsFrom(__DIR__ . '/Views', 'demo');

        $this->app['demo'] = $this->app->share(function($app) {
			return new Demo;
		});
    }
}

?>