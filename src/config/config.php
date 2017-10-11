<?php

return [
    "name" => "Jarvis",
    "description" => "A simple theme management toolkit",
    "version" => "0.1(alpha)",
    "theme_admin_key" => env("THEME_ADMIN_KEY", null),
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
