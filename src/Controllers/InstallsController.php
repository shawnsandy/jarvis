<?php namespace ShawnSandy\Jarvis\Controllers;


use ShawnSandy\Jarvis\JarvisController;
use Illuminate\Support\Facades\Artisan as Artisan;
use Illuminate\Http\Request;

class InstallsController extends JarvisController {


	public function __invoke(Request $request) {

        $contents = file_get_contents($this->resources."/views/index.blade.php");

        $viewPath= $request->validate([

            "view_path" => "required|string|min:5|max:20"

        ]);

		return  $viewPath;


	}



}
