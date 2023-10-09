<?php
//ROUTER
$route = new Route();
// Hier doen we een controle of een bepaalde URL bestaat en we verwijzen door naar een controller of een view

$route->get('', "controllers/home.php");
$route->get('index', "controllers/home.php");
$route->get('contact', "controllers/contact.php");
$route->get('about', "controllers/about.php");
$route->get('posts', "controllers/posts.php");
if (auth()) {
    $route->get('post-create', "views/post-create.view.php");
}
$route->post('post-store', "controllers/post-store.php");
$route->post('post-destroy', "controllers/post-destroy.php");
$route->get('post-edit/{id}', "controllers/post-edit.php");
$route->post('post-update/{id}', "controllers/post-update.php");

$route->get('login', "views/login.view.php");
$route->post('login', "controllers/login.php");
$route->get('logout', "controllers/logout.php");
//voorbeeld voor berichten
$route->resource('berichten');
//dit maakt de volgende routes aan (onderstaande mag je verwijderen)
//$route->get('berichten','controllers/berichten/index.php');
//$route->get('berichten/create','controllers/berichten/create.php');
//$route->post('berichten','controllers/berichten/store.php');
//$route->get('berichten/{id}','controllers/berichten/show.php');
//$route->get('berichten/{id}/edit','controllers/berichten/edit.php');
//$route->put('berichten/{id}','controllers/berichten/update.php');
//$route->delete('berichten/{id}','controllers/berichten/destroy.php');

//Alleen als je ingelogd bent
if (auth()) {
    //hier komen routes die je alleen kan bereiken als je ingelogd bent
    //$route->get('profile','controllers/profile.php');
}


//alleen toegankelijk als administrator
if (hasRole('admin')) {
    //hier komen de routes die alleen toegankelijk zijn voor een admin

}


http_response_code(404);
view("404", ['error' => $_SERVER['REQUEST_URI'] . " niet gevonden"]);
die();