<?php
$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], "/");

if ($uri == "" or $uri == "home") {
    require "controllers/home.php";
    die();
}
if ($uri == "contact") {
    require "controllers/contact.php";
    die();
}
if ($uri == "about") {
    require "controllers/about.php";
    die();
}

http_response_code(404);
require "views/404.view.php";
die();