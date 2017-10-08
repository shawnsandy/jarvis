<?php namespace ShawnSandy\Jarvis\Test;



class ThemeConfigurationTest extends TestCase

{


    /**
     * Test that true does in fact equal true
     */
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

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



}
