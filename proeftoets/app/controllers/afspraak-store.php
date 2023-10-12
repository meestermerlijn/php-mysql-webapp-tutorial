<?php
//1pt voor maken van dit bestand

//validatie
require "../src/Validator.php";
$errors = [];
if (!Validator::required($_POST['datum'])) { //1pt
    $errors['datum'] = 'Datum is verplicht';
}
if (!Validator::required($_POST['van_tijd'])) { //1pt
    $errors['van_tijd'] = 'Starttijd is verplicht';
}
if (!Validator::required($_POST['tot_tijd'])) { //1pt
    $errors['tot_tijd'] = 'Eindtijd is verplicht';
}
if (!Validator::required($_POST['klant_id'])) { //1pt
    $errors['klant_id'] = 'Klant is een verplicht veld';
}

$db = new Database();
if (!empty($errors)) { //1pt
    flash("Er zijn fouten bij het invoeren van de afspraak", false); //feedback naar de gebruiker
    view('afspraak', [ //1pt
        'klanten' => $db->query("SELECT * FROM klanten ORDER BY achternaam"), //1pt klanten meegeven aan de view
        'errors' => $errors
    ]);
    die(); //1pt
}

//er zijn geen errors dus we kunnen de afspraak opslaan
$db->query("INSERT INTO afspraken (klant_id, van, tot,opmerking) VALUES (?, ?, ?, ?)", [
    $_POST['klant_id'],
    $_POST['datum'] . ' ' . $_POST['van_tijd'], //datum en tijd samenvoegen
    $_POST['datum'] . ' ' . $_POST['tot_tijd'],
    $_POST['opmerking']
]);
//bericht naar de gebruiker
flash('Afspraak is succesvol ingevoerd'); //1pt

//invoeren is gelukt dus we gaan terug naar de afspraken
// doorsturen naar posts pagina
header("Location: /afspraak-invoeren");