<?php


Route::group(["prefix" => "themes"], function(){


	Route::post("installs", "\ShawnSandy\Jarvis\Controllers\InstallsController");

	Route::get("publish", "\ShawnSandy\Jarvis\Controllers\Publish");

	Route::view("start", Jarvis::views("install.index"));

	Route::get("readme", function(){

		$readme = __DIR__."./../../README.md";

		$page = Jarvis::md($readme);

		return view(Jarvis::views("install.readme"), compact("page"));
	}
	);


}
);