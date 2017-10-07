<?php


namespace ShawnSandy\Jarvis\Test;
use App\User;
use ShawnSandy\Jarvis\JarvisFacade as Jarvis;
use Aedart\Testing\Laravel\Traits\TestHelperTrait;

class ExampleTest extends TestCase
{

    use TestHelperTrait;



	/**
	* Test that true does in fact equal true
			     */
			    public function testTrueIsTrue()
			    {
		$this->assertTrue(true);
	}


	public function truncateWords($string, $your_desired_width)
			    {
		$parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
		$parts_count = count($parts);

		$length = 0;
		$last_part = 0;
		for (; $last_part < $parts_count; ++$last_part) {
			$length += strlen($parts[$last_part]);
			if ($length > $your_desired_width) {
				break;
			}
		}

		return implode(array_slice($parts, 0, $last_part));
	}




	/**
	* @test
			     */
			     public function truncate() {

		// 		Jarvis::routes();

		// 		config('jarvis.test');

		$a = "This is a test";

		$b = "This is a test again";

		$c = $this->truncateWords($b, 14);

		$this->assertEquals($a, $c);
	}






	/**
	* @test
			      */
			     public function add_user() {

		// 		User::create([
						        // 		"name" => "Shawn Sandy",
						        // 		"email" => "me@shawnsandy.com",
						        // 		"password" => "passowrd",
						        // 		]);

		$this->assertTrue(true);

	}





	/**
	* @test
			     */

	public function readSomethingFromConfig(){

		// 		Calling config, using Laravel defined helper method
								$defaultDbDriver = config('database.default');


		$this->assertSame('mysql', $defaultDbDriver);

	}




	/**
	* @test
		     */

	public function readSomethingElseFromConfig(){

		// 		Get the application instance
						$app = $this->getApplication();


		$queueDriver = $app['config']['queue.default'];


		$this->assertSame('sync', $queueDriver);

	}



}
