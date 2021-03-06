<?php

namespace ShawnSandy\Jarvis\Controllers;

use Illuminate\Http\Request;
use ShawnSandy\Jarvis\JarvisController;
use Illuminate\Support\Facades\Artisan as Artisan;


class Publish extends JarvisController
{

	public function __invoke(Request $request)
	{

		$validate = $request->validate(["admin_key" => "required|alpha_dash"]);

		if($validate["admin_key"] == config("jarvis.validation_key")):

		Artisan::call("vendor:publish", [
            "--provider" => "ShawnSandy\Jarvis\JarvisThemesProvider",
            "--force" => true,
            ]);
		return back()->with("success", "Your vendor files have been published Sir.");

		endif;

		return back()->with("error", "Sorry failed to publish vendor files, please check your settings and try again");

	}

}
