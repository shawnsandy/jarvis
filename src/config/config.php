<?php

return [
    "name" => "Jarvis",
    "description" => "A simple theme management toolkit",
    "version" => "0.1(alpha)",
    "validation_key" => env("VALIDATION_KEY", 00000000),
    "view" => env("THEME_VIEW", "jarvis"),
    "base_url" => "jarvis",
    "title" => "Jarvis | A smart theme management package for Laravel",
    "themes" => [

"sample" => [
        "author" => "Shawn Sandy",
        "email" => "me@acme.com",
        "website" => "http://",
        "name" => "Acme",
        "view" => "acme",
        "description" => "Sample template",
        "options" => [],
        "fields" => []

]

]

];
