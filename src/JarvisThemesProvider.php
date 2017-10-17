<?php

    namespace ShawnSandy\Jarvis;

    use Blade;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Database\Eloquent\Factory;


    /**
     * er
     *
     * @package ShawnSandy\Jarvis
     */
    class JarvisThemesProvider extends ServiceProvider
    {

        /**
         * Register any package services.
         *
         * @return void
         */
        public function register()
        {

            $this->mergeConfigFrom(
                __DIR__ . '/config/config.php', 'jarvis'
            );

            $this->app->bind(
                'Jarvis', function () {
                return new Jarvis();
            });
        }


        /**
         * Perform post-registration booting of services.
         *
         * @return void
         */
        public function boot()
        {


            $this->loadMigrationsFrom(__DIR__ . '/migrations');
            $this->app->bind(
                'Jarvis', function () {
                return new Jarvis();
            }
            );

            $this->registerFactoriesPath(__DIR__ . '/factories');

            $this->publishPackages();

            $this->registerThemeSettings();

            include_once __DIR__ . '/Helpers/helper.php';

            $this->themeDisk();

            $this->themeSetup();

            $this->directives();

        }


        /**
         * Register factories.
         *
         * @param  string $path
         * @return void
         */
        protected function registerFactoriesPath($path)
        {
            $this->app->make(Factory::class)->load($path);
        }

        public function loadProviders()
        {


        }


        /**
         * Publish Packages
         *
         * @return void
         */
        protected function publishPackages()
        {


            /**
             * Package views
             */
            $this->loadViewsFrom(__DIR__ . '/resources/views', config("jarvis.view", "jarvis"));

            $this->publishes(
                [
                    __DIR__ . '/resources/views' => resource_path('views/vendor/jarvis'),
                ], 'jarvis-views'
            );

            /**
             * Package assets
             */
            $this->publishes(
                [
                    __DIR__ . '/public/' => public_path('jarvis'),
                ], 'jarvis-assets'
            );


            /**
             * Package resources to resources
             */
            $this->publishes(
                [
                    __DIR__ . '/resources/assets/' => resource_path('assets/jarvis/'),
                ], 'jarvis-resources'
            );


            /**
             * Package config
             */
            $this->publishes(
                [__DIR__ . '/config/config.php' => config_path('jarvis.php')],
                'jarvis-config'
            );

            $this->publishes(
                [
                    __DIR__ . '/migrations/' => database_path('migrations')
                ], 'jarvis-migrations'
            );


        }

        protected function registerThemeSettings()
        {

            config(
                ["jarvis.themes.jarvis" => [

                    "author" => "Shawn Sandy",
                    "email" => "me@acme.com",
                    "website" => "http://",
                    "name" => "Jarvis",
                    "view" => "jarvis",
                    "description" => "Default theme",
                    "options" => [],
                    "fields" => []

                ]]
            );

        }


        /**
         * Set the config for
         */
        protected function themeDisk()
        {

        }

        protected function themeSetup()
        {

            $view_path = base_path("themes/");
            $this->loadViewsFrom($view_path, 'jarvisThemes');

            config(["filesystems.disks.themes" => [
                "driver" => "local",
                "root" => base_path("themes/" . config("jarvis.view")),
                "url" => config("app.url"),
                "visibility" => "public"
            ]]);

        }

        protected function directives()
        {

            Blade::if ('themeExists', function ($theme, $namespace = null) {
                $view = $namespace ? $namespace.'::'.$theme.".views.index" : "vendor.".$theme.".index";
                return view()->exists($view);

            });

        }

    }
