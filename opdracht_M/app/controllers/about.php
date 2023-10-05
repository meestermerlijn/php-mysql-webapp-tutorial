<?php
//default is een lege string
$zin = "";

//als er een get is
if ($_GET != null) {
    //maak een zin met de gegevens uit het meegestuurde formulier
    $zin = "Hallo {$_GET['naam']} je bent {$_GET['leeftijd']} oud en doet aan {$_GET['sport']}.";
}

//laat de view zien en stuur de zin mee
view("about", [
    'zin' => $zin
]);