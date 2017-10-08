<?php

return [
    "name" => "Jarvis",
    "description" => "A simple theme management toolkit",
    "version" => "0.1(alpha)",
    "theme_admin_key" => env("THEME_ADMIN_KEY", "me@acme.com"),
    "view" => env("THEME_VIEW", "jarvis"),
    "themes" => [

        "default" => [
        "author" => "Shawn Sandy",
        "email" => "me@acme.com",
        "website" => "http://",
        "name" => "Jarvis",
        "view" => "jarvis",
        "description" => "Default theme",
        "options" => [],
        "fields" => []

        ]

    ]

];
