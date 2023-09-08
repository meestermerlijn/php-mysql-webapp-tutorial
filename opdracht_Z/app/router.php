<?php
//ROUTER
$route = new Route();
// Hier doen we een controle of een bepaalde URL bestaat en we verwijzen door naar een controller of een view

$route->get('index', "controllers/home.php");
$route->get("", "controllers/home.php");
$route->get("about", "controllers/about.php");

$route->get('login', 'views/login.view.php');
$route->post('login','controllers/login.php');


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
if (isLogin()) {
    //hier komen routes die je alleen kan bereiken als je ingelogd bent
    //$route->get('profile','controllers/profile.php');
}


//alleen toegankelijk als administrator
if (hasRole('admin')) {
    //hier komen de routes die alleen toegankelijk zijn voor een admin

}


//niets gevonden dan...
http_response_code(404);
view('404', ['error'=> $_SERVER['REQUEST_URI']." niet gevonden"]);
die();
