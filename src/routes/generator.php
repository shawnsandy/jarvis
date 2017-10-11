<?php


Route::get(
    "generator", function () {

        $env = Jarvis::env_to_array(base_path(".env"));

        $env = array_except($env, ["APP_KEY"]);

        return view(jarvis_views("install.generator"), compact("env"));

    }
);
