<?php namespace ShawnSandy\Jarvis\Controllers;

use Illuminate\Http\Request;
use ShawnSandy\Jarvis\JarvisController;


/**
 * Pages controller
 */
class PagesController extends JarvisController
{
	/**
     * Single action controller
     *
     * @param string $views
     * @param string $pages
     * @return void
     */
	public function __invoke($view = null, $page = null)
    {

		if(is_null($view))
				    $view = "index";

		if(!is_null($page))
				    $view = $view."/".$page;

		return view(jarvis_views($view));

	}

}
