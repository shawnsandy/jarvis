<?php

//use ShawnSandy\Jarvis\JarvisFacade as Jarvis;

/**
 * Get a theme url jarvis themes
 *
 * @param  string $route
 * @return string
 */
function jarvis_url($route) 
{
    return jarvis()->url($route);
}


/**
 * Get the view path for a jarvis theme
 *
 * @param  string $view_path
 * @return string
 */
function jarvis_views($view_path) 
{
    return jarvis()->views($view_path);
}

function jarvis() 
{
    return app("Jarvis");
}


