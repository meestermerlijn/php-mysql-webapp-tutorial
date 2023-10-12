<?php
//ROUTER
$route = new Route();
// Hier doen we een controle of een bepaalde URL bestaat en we verwijzen door naar een controller of een view

$route->get('', "controllers/home.php");
$route->get('index', "controllers/home.php");
$route->get('contact', "controllers/contact.php");
$route->get('about', "controllers/about.php");

$route->get('login', "views/login.view.php");
$route->post('login', "controllers/login.php");
$route->get('logout', "controllers/logout.php");

//opdracht 2
$route->get('afspraak-invoeren', "controllers/afspraak.php"); //1pt
$route->post('afspraak-invoeren', "controllers/afspraak-store.php"); //1pt
//einde opdracht 2

//opdracht 3
$route->get('afspraken', "controllers/afspraken.php"); //1pt
$route->post('afspraak-destroy/{id}', "controllers/afspraak-destroy.php"); //1pt
//of
//$route->post('afspraak-destroy', "controllers/afspraak-destroy.php"); //1pt
//einde opdracht 3

//opdracht 4
$route->get('klanten', "controllers/klanten.php"); //1pt
$route->get('klant-edit/{id}', "controllers/klant-edit.php"); //1pt
$route->post('klant-update/{id}', "controllers/klant-update.php"); //1pt
//einde opdracht 4

if (auth()) { //alleen als je ingelogd bent kan je dit doen
    $route->get('api/users-search', "controllers/api/users-search.php");
    $route->get('users', "views/users-search.view.php");
}

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