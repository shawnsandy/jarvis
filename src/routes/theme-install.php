<?php


Route::group(["prefix" => "themes"], function(){


	Route::view("index", jarvis_views("install.index"));

	Route::post("installs", "\ShawnSandy\Jarvis\Controllers\InstallsController");

	Route::get("publish", "\ShawnSandy\Jarvis\Controllers\Publish");

	Route::get("readme", function(){

		$readme = __DIR__."./../../README.md";

		$page = Jarvis::md($readme);

		return view(Jarvis::views("install.readme"), compact("page"));
	}
	);



}
);
