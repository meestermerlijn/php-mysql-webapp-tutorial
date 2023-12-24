<?php
//1pt voor maken van dit bestand


$db = new Database(); //1pt

//ophalen van de klanten voor klantenlijst 2pt
$klanten = $db->query("SELECT * FROM klanten order by achternaam asc")->fetchAll();

view('klanten', [
    'klanten' => $klanten, //1pt klanten meegeven aan de view
]);