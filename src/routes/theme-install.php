<?php


Route::group(["prefix" => "setup"], function(){


	Route::post("installs", "\ShawnSandy\Jarvis\Controllers\InstallsController");

	Route::get("publish", "\ShawnSandy\Jarvis\Controllers\Publish");

	Route::view("start", Jarvis::views("install.index"));

	Route::get("readme", function(){

		$readme = __DIR__."./../../README.md";

		return Jarvis::md($readme);

	}
	);


}
);
