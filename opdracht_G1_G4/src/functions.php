<?php

function isUri(string $uri)
{
    if (trim(parse_url($_SERVER['REQUEST_URI'])['path'], "/") == $uri) {
        return true;
    }
    return false;
}

function dd(...$args)
{
    echo "<pre>";
    foreach ($args as $arg) {
        var_dump($arg);
    }
    echo "</pre>";
    die();
}

function config(string $param): string
{
    global $config;
    $path_items = explode(".", $param);
    $result = $config;
    foreach ($path_items as $item) {
        if (isset($result[$item])) {
            $result = $result[$item];
        } else {
            return ''; //gezochte item bestaat niet
        }
    }
    return $result;
}

function view(string $file, array $vars = [])
{
    extract($vars);
    if (file_exists(__DIR__ . "/../app/views/" . $file . ".view.php")) {

        require __DIR__ . "/../app/views/" . $file . ".view.php";
    } else {
        if (file_exists(__DIR__ . "/../src/views/" . $file . ".view.php")) {
            require __DIR__ . "/../src/views/" . $file . ".view.php";
        } else {
            dd('required view: /app/views/' . $file . ".view.php" . ' not found');
        }
    }
}