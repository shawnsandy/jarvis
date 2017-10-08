<?php

return [
    "name" => "Jarvis",
    "description" => "A simple theme management toolkit",
    "version" => "0.1(alpha)",
    "theme_admin_key" => env("THEME_ADMIN_KEY", "me@acme.com"),
    "themes" => [

        "default" => [
        "author" => "Shawn Sandy",
        "email" => "me@acme.com",
        "website" => "http://",
        "name" => "Jarvis",
        "view_path" => "jarvis",
        "description" => "Default theme",
        "options" => [],
        "fields" => []
        ],

        "galbo" => [
        "author" => "Shawn Sandy",
        "email" => "me@acme.com",
        "website" => "http://",
        "name" => "Galbo Realtors",
        "description" => "Sample 1",
        "prefix" => "jarvis",
        "options" => [],

        "fields" => []
        ],

    ]

];
