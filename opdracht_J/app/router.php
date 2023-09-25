<?php
$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], "/");

if ($uri == "") {
    require "controllers/home.php";
    die();
}
if ($uri == "home") {
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
if ($uri == "posts") {
    require "controllers/posts.php";
    die();
}
if ($uri == "post-create") {
    require "controllers/post-create.php";
    die();
}
if ($uri == "post-delete") {
    require "controllers/post-delete.php";
    die();
}

http_response_code(404);
require __DIR__ . "/../src/views/404.view.php";
die();