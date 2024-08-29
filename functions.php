<?php

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}


function base_path($path)
{
    return BASE_PATH . $path;
}


function abort($code = 404)
{
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}


function uriIs($path)
{
    if (parse_url($_SERVER['REQUEST_URI'])['path'] == $path) {
        return true;
    }

    return false;
}
