<?php namespace ShawnSandy\Jarvis\Controllers;


use File;
use Illuminate\Http\Request;
use ShawnSandy\Jarvis\JarvisController;
use Storage;

class InstallsController extends JarvisController
{


    public function __invoke(Request $request)
    {

        $validate = $request->validate(
            [

                "view_path" => "required|alpha_dash|min:5|max:20",
                "validation_key" => "required|alpha_dash",

            ]
        );


        if ($validate["validation_key"] == config("jarvis.validation_key")) {


            $view = File::exists(base_path("themes/" . $validate["view_path"]));

            if (!$view)
                File::makeDirectory(base_path("themes/" . $validate["view_path"]), null, true);

            File::copyDirectory($this->views, base_path("themes/" . $validate["view_path"]));

            config(["jarvis.view", $validate["view_path"]]);

            $theme_dir = jarvis_views("index", $validate["view_path"]);

            $theme = view()->exists($theme_dir);



            if ($theme)
                return back()->with("success", "Sir, your theme has been copied you can now begin customization");

            return back()->with("error", "Sorry Sir, it appears you attempt to clone the theme was unsuccessful.");

        }
        return "Error";

    }


}
