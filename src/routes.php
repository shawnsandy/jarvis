<?php


/**
Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */


//

Route::any("/view/{views?}/{page?}", "\ShawnSandy\Jarvis\Controllers\PagesController");

Route::get('/login', function(){
    return view(jarvis_views("login"));
});

Route::get('/register', function(){
    return view(jarvis_views('register'));
});

Route::group(['middleware' => ['auth']], function(){

    Route::view('/dashboard', "jarvis::dashboard");

});
