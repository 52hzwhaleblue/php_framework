<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/" => base_path("controllers/index.php"),
    "/about" => "controllers/about.php",
    "/notes" => "controllers/notes/index.php",
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    abort();
}
