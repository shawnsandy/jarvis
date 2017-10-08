<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/22/2017
     * Time: 10:03 PM
     */

    namespace ShawnSandy\Jarvis;


    class Jarvis
    {

        public function routes(){
            require  __DIR__.'/routes.php';
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


    }
