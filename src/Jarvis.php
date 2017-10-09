<?php

/**
* Created by PhpStorm.
     * User: Shawn
     * Date: 2/22/2017
     * Time: 10:03 PM
     */

namespace ShawnSandy\Jarvis;
use Michelf\Markdown as MD;


class Jarvis
    {



	/**
	* App routes
	         *
	         * @return void
	         */
	        public function routes(){
		require  __DIR__.'/routes.php';
	}



	/**
	* Install routes
	         *
	         * @return void
	         */
	        public function install_routes(){
		require  __DIR__.'/routes/theme-install.php';
	}



	/**
	* Load views
	         *
	         * @param string $blade_path path to your blade file `partials.example`.
	         * @return void
	         */
	        public function views($blade_path) {
		$view = config("jarvis.view");
		return $view."::".$blade_path;
    }

    public function url($route_url) {

        return url(config("jarvis.base_url")."/".$route_url);

    }

	public function md($file) {



        $readme = file_get_contents($file);

        $md = MD::defaultTransform($readme);

        return $md;


	}


}
