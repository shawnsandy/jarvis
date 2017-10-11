<?php namespace ShawnSandy\Jarvis\Test;



class JarvisTest extends TestCase

{






	/**
	* @test
			     */
			    public function check_if_themes_config_is_array()
			    {

		$arr = config("jarvis.themes");

		$this->assertTrue(is_array($arr));


	}




	/**
	* @test
			     */
			    public function can_add_settings_to_themes_array()
			    {

		$config = config("jarvis.themes");
		$add_config = config(["jarvis.themes.acme" => [
						                "author" => "Daffy Duck",
						                "email" => "me@acme.com",
						                "website" => "http://",
						                "name" => "Galbo Realtors",
						                "description" => "Sample 1",
						                "prefix" => "jarvis",
						                "options" => [],

		"fields" => []
						            ]

		]);

		$new_config = config("jarvis.themes");

		$this->assertEquals(count($config) + 1, count($new_config));

		$this->assertArrayHasKey("acme", $new_config);

		$this->assertArrayHasKey("website", $new_config["acme"]);

		$this->assertEquals("me@acme.com", $new_config["acme"]["email"]);



	}





	/**
	* @test
			*/
			    public function helper_can_generate_jarvis_urls() {

		$url_1 = jarvis_url("index");


		config(["jarvis.base_url" => "acme"]);

		$url_2 = jarvis_url("index");


		config(["jarvis.base_url" => null]);

		$url_3 = jarvis_url("index");

		$this->assertEquals(url("jarvis/index"), $url_1);

		$this->assertEquals(url("acme/index"), $url_2);

		$this->assertEquals(url("index"), $url_3);




	}




	/**
	* @test
		        *
		        * @return void
		        */
			    public function helper_can_generate_jarvis_views() {




		/** get the default */
		$default_view = jarvis_views("index");




		/** change the view_path */
		config(["jarvis.view" => "default"]);




		/** get the view with new path */
		$dynamic_view = jarvis_views("index");




		/** change the view_path */
		config(["jarvis.view" => null]);




		/** get the view with new path */
		$null_view = jarvis_views("index");



		$this->assertEquals("jarvis::index", $default_view);

		$this->assertEquals("default::index", $dynamic_view);

		$this->assertEquals("index", $null_view);


	}




	/**
	* @test
		     */
		    public function dynamic_views_can_be_generated()
		    {



		/** get the default */
		$default_view = Jarvis::views("index");



		/** change the view_path */
		config(["jarvis.view" => "default"]);



		/** get the view with new path */
		$dynamic_view = Jarvis::views("index");

		$this->assertEquals("jarvis::index", $default_view);

		$this->assertEquals("default::index", $dynamic_view);

	}



	/** @test */
	public function convert_env_file_to_array() {

		$env_array = Jarvis::env_to_array();

		$this->assertTrue(count($env_array) > 1);

		$this->assertTrue(is_array($env_array));

		$this->assertTrue($env_array["APP_NAME"] == "Laravel");

	}




}
