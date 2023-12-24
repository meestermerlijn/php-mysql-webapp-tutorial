<?php
//1pt voor maken van dit bestand

$db = new Database();

if (isset($_POST['id'])) {
    require "../src/Validator.php"; //validatie 2pt
    $errors = [];
    if (!Validator::required($_POST['voornaam'])) {
        $errors['voornaam'] = "Voornaam is verplicht";
    }
    if (!Validator::required($_POST['achternaam'])) {
        $errors['achternaam'] = "Achternaam is verplicht";
    }
    if (empty($errors)) {
        //update query 3pt
        $klant = $db->query("UPDATE klanten SET voornaam = ?, achternaam = ?, tussenvoegsel = ?, telefoonnr = ? WHERE id = ?", [
            $_POST['voornaam'],
            $_POST['achternaam'],
            $_POST['tussenvoegsel'],
            $_POST['telefoonnr'],
            $_POST['id']
        ])->fetch();
        //melding 1pt
        flash("Klant gegevens zijn aangepast");
        //doorsturen 1pt
        header("Location: /klanten");
    } else {

        flash("Er missen verplichte velden", false);

        //snel een eenvoudig (alleen krijg je dan niet de foutmeldingen bij de velden)
        //header("Location: /klant-edit/" . $_POST['id']);

        //dit is mooier
        view('klant-edit', [ //2pt
            'klant' => $_POST, //hier zitten alle klant velden in
            'errors' => $errors
        ]);
    }
}