<?php

namespace ShawnSandy\Jarvis\Test;

use  ShawnSandy\Jarvis\JarvisThemesProvider ;

use ShawnSandy\Jarvis\JarvisFacade;

use  Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{

	protected function getEnvironmentSetUp($app)
			{
		putenv( 'APP_DEBUG=1' );
		// 		Setup default database to use sqlite :memory:
		$app['config']->set('database.default', 'testbench');
		$app['config']->set('database.connections.testbench', [
				        'driver'   => 'sqlite',
				        'database' => ':memory:',
				        'prefix'   => '',
				    ]);
		$app['config']->set('app.key', 'SomeRandomStringWith32Characters');
	}




	/**
	* Load package service provider
		     * @param  \Illuminate\Foundation\Application $app
		     * @return lasselehtinen\MyPackage\MyPackageServiceProvider
		     */
			protected function getPackageProviders($app)
			{
		return ['ShawnSandy\Jarvis\JarvisThemesProvider'];
	}



	/**
	* Load package alias
		     * @param  \Illuminate\Foundation\Application $app
		     * @return array
		     */
		    protected function getPackageAliases($app)
		    {
		return [
				            'Jarvis' => JarvisFacade::class,
				        ];
	}
}

