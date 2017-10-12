<?php namespace ShawnSandy\Jarvis\Controllers;

use Illuminate\Http\Request;
use ShawnSandy\Jarvis\JarvisController;


/**
 * Pages controller
 */
class PagesController extends JarvisController
{
	/**
     * Single action pages controller
     * Dynamically loads views based on route parameters
     *
     * @param string $views
     * @param string $pages
     * @return void
     */
	public function __invoke($view = null, $page = null)
    {

        $view = !is_null($view) ?: "index";

        $view = is_null($page) ? $view : $view."/".$page ;

		return view(jarvis_views($view));

	}

}
