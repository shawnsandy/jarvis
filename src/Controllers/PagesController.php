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
	public function __invoke($views = null, $page = null)
    {

        $view = $views ?: "index";

        $page = is_null($page) ? null : "/".$page;

		return view(jarvis_views($view.$page));

	}

}
