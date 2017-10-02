<?php

/**
* Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */


//
Route::view("/index", "jarvis::index", ["theme_class" => "front-page"]);
Route::view("/dashboard", "jarvis::dashboard");
Route::view("/login", "jarvis::login");
Route::view("/about", "jarvis::about");
Route::view("/register", "jarvis::register");
Route::view("/product", "jarvis::product");
Route::view("/collections", "jarvis::collections");
Route::view("/page", "jarvis::page");
