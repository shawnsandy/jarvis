<?php

namespace ShawnSandy\Jarvis;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;


/**
* Service Provider
* @package ShawnSandy\Jarvis
*/
class JarvisThemesProvider extends ServiceProvider
{


	/**
	* Perform post-registration booting of services.
	                             *
	                             * @return void
	                             */
	    public function boot()
	    {



		/**
		* Package views
		                                                         */
		        $this->loadViewsFrom(__DIR__ . '/resources/views', 'jarvis');
		$this->publishes(
		            [
		                __DIR__ . '/resources/views' => resource_path('views/vendor/jarvis'),
		            ], 'jarvis-views'
		        );



		/**
		* Package assets
		                                                         */
		        $this->publishes(
		            [
		                __DIR__.'/public/' => public_path('jarvis'),
		            ], 'jarvis-assets'
		        );


		/**
		* Package resources to resources
		                                                         */
		        $this->publishes(
		            [
		                __DIR__.'/resources/assets/' => resource_path('assets/jarvis/'),
		            ], 'jarvis-resources'
		        );



		/**
		* Package config
		                                                         */
		        $this->publishes(
		            [__DIR__ . '/config/config.php' => config_path('jarvis.php')],
		            'jarvis-config'
		        );

		$this->publishes([
		                    __DIR__ . '/migrations/' => database_path('migrations')
		                ], 'jarvis-migrations');


		$this->loadMigrationsFrom(__DIR__ . '/migrations');
		$this->app->bind(
		        'Jarvis', function () {
			return new Jarvis();
		}
		);

		$this->registerFactoriesPath(__DIR__.'/factories');

		$view_path = base_path(
		        "themes/jarvis"
		        );

        $this->loadViewsFrom($view_path, 'jarvisThemes');

    }


        /**
        * Register factories.
        *
        * @param  string  $path
        * @return void
        */
	    protected function registerFactoriesPath($path)
	    {
		$this->app->make(Factory::class)->load($path);
	}


	public function loadProviders()
	    {

		if (!$this->app->runningInConsole()) :
		                                                            include_once __DIR__ . '/Helpers/helper.php';
		endif;
	}






/**
* Register any package services.
*
* @return void
*/
	    public function register()
	    {

		$this->mergeConfigFrom(
		            __DIR__ . '/config/config.php', 'jarvis'
		        );

		$this->app->bind(
		        'Jarvis', function () {
			return new Jarvis();
		}
		);
	}
}
