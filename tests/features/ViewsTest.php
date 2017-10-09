<?php

namespace ShawnSandy\Jarvis\Test;

use ShawnSandy\Jarvis\JarvisFacade as Jarvis;

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


}