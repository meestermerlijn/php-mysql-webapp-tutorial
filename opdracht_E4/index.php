<?php
//inladen van de configuratie parameters
$config = require "config.php";


$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], "/");

if ($uri == "") {
    require "home.php";
    die();
}
if ($uri == "home") {
    require "home.php";
    die();
}
if ($uri == "contact") {
    require "contact.php";
    die();
}
if ($uri == "about") {
    require "about.php";
    die();
}

http_response_code(404);
require "404.php";
die();