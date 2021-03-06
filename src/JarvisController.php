<?php  namespace ShawnSandy\Jarvis;

use Illuminate\Routing\Controller;

class JarvisController extends Controller
{
    public $views;
    public $resources;
    public $readme;


    public function __construct()
    {

        $this->views = __DIR__."/resources/views";
        $this->resources = __DIR__."/resources";
        $this->readme = __DIR__."../README.md";

    }

}
