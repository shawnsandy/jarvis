<?php

namespace ShawnSandy\Jarvis\Test;

use Facades\ShawnSandy\Jarvis\Jarvis;

class ViewsTest Extends TestCase

{



    /**
     * @test
     */
    public function test_if_dynamic_views_can_be_generated()
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
    public function can_convert_env_file_to_array() {

        $env_array = Jarvis::env_to_array();

        $this->assertTrue(count($env_array) > 1);

        $this->assertTrue(is_array($env_array));

        $this->assertTrue($env_array["APP_NAME"] == "Laravel");

    }


}
