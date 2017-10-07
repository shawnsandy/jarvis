<?php namespace ShawnSandy\Jarvis\Test ;




class SimpleTest extends \PHPUnit\Framework\TestCase
{





	/**
     * @var \UnitTester
     */

	protected $tester;


	protected function _before(){

		// 		Start the Laravel application
		$this->startApplication();

	}


	protected function _after(){

		// 		Stop the Laravel application
		$this->stopApplication();

	}



	/**
     * @test
     */

	public function readSomethingFromConfig(){

		// 		Calling config, using Laravel defined helper method
		$defaultDbDriver = config('database.default');


		$this->assertSame('mysql', $defaultDbDriver);

	}



}
