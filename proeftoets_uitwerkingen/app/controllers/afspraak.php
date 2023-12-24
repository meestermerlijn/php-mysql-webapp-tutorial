<?php
//1pt voor maken van dit bestand

$db = new Database();
//ophalen van de klanten voor de selectbox 2pt
$klanten = $db->query("SELECT * FROM klanten order by achternaam asc")->fetchAll();

if ($_POST != null) {

}

view('afspraak', [
    'klanten' => $klanten, //1pt klanten meegeven aan de view
]);
