<?php

return [
    "name" => "Jarvis",
    "description" => "A simple theme management toolkit",
    "version" => "0.1(alpha)",
    "theme_admin_key" => env("THEME_ADMIN_KEY", "me@acme.com"),
    "view" => env("THEME_VIEW", "jarvis"),
    "base_url" => "jarvis",
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
