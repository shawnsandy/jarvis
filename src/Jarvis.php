<?php

    namespace ShawnSandy\Jarvis;

    use Michelf\Markdown as MD;


    class Jarvis
    {


        /**
         * App routes
         *
         * @return void
         */
        public function routes()
        {
            include __DIR__ . '/routes.php';
        }


        /**
         * Install routes
         *
         * @return void
         */
        public function install_routes()
        {
            include __DIR__ . '/routes/theme-install.php';
        }


        public function generator_routes()
        {

            include __DIR__ . "/routes/generator.php";


        }


        /**
         * Load views
         *
         * @param  string $blade path to your blade file `partials.example`.
         * @param bool    $theme the name of the theme
         * @return string
         */
        public function views($blade, $theme = null)
        {
            if(config("jarvis.theme"))
            $theme = config("jarvis.theme");

            if(!is_null($theme)):

            $namespace = $theme ? "jarvisThemes" : "jarvis";
            config(["jarvis.view" => $namespace]);
            endif;

            $jarvis = config("jarvis.view");

            $view = $theme ? "{$jarvis}::{$theme}.views." : "{$jarvis}::";

            if (is_null(config("jarvis.view"))) {
                $view = null;
            }

            return $view . $blade;

        }

        public function url($route_url)
        {

            return url(config("jarvis.base_url") . "/" . $route_url);

        }


        public function md($file)
        {


            $readme = file_get_contents($file);

            $md = MD::defaultTransform($readme);

            return $md;


        }


        public function env_to_array($file = null)
        {
            if (is_null($file)) {
                $file = __DIR__ . "./../.env.example";
            }

            $string = file_get_contents($file);
            $string = preg_split('/\n+/', $string);
            $returnArray = array();
            foreach ($string as $one) {
                if (preg_match('/^(#\s)/', $one) === 1) {
                    continue;
                }
                $entry = explode("=", $one, 2);
                $returnArray[$entry[0]] = isset($entry[1]) ? $entry[1] : null;
            }

            return array_filter(
                $returnArray, function ($key) {
                return !empty($key);
            }
                , ARRAY_FILTER_USE_KEY
            );
        }


    }
