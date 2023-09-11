<?php
$zin = "";
if ($_GET != null) {
    $zin = "Hallo {$_GET['naam']} je bent {$_GET['leeftijd']} oud en doet aan {$_GET['sport']}.";
}

view("about", [
    'zin' => $zin
]);