<?php
//1pt voor het maken van dit bestand
if (isset($_GET['datum'])) { //2pt een controle of er een zoekopdracht is (mag bv ook met $_GET!=null)
    $db = new Database(); //1pt
    //query om de afspraken op te halen 3pt sortering op tijd 2pt
    $afspraken = $db->query("SELECT afspraken.id, voornaam, achternaam, van, tot 
                             FROM afspraken, klanten 
                             WHERE afspraken.klant_id = klanten.id 
                               AND van LIKE ? 
                             ORDER BY van", [
        $_GET['datum'] . "%" //1pt
    ])->fetchAll();
} else {
    //indien er geen zoek opdracht is dan geen afspraken tonen
    $afspraken = [];
}

view('afspraken', [
    'afspraken' => $afspraken, //1pt afspraken meegeven aan de view
]);