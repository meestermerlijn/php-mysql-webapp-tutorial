<?php
require "../src/Validator.php";

if (!Validator::required($_POST['title'])) {
    $errors['title'] = "Titel mag niet leeg zijn";
}
$db = new Database();

// in $errors worden de foutmeldingen opgeslagen
$errors = [];

if ($_POST != null) {

    // spaties voor en na de invoer weghalen
    $_POST['title'] = trim($_POST['title']);
    // controleren of de titel is ingevuld
    if (strlen($_POST['title']) == 0) {
        $errors['title'] = "Titel mag niet leeg zijn";
    }
    if (strlen($_POST['title']) > 255) {
        $errors['title'] = "Titel mag niet langer zijn dan 255 tekens";
    }

    // spaties voor en na de invoer weghalen
    $_POST['content'] = trim($_POST['content']);
    if (strlen($_POST['content']) == 0) {
        $errors['content'] = "De content mag niet leeg zijn";
    }

    if (empty($errors)) {
        // invoeren van de gegevens in de database
        $db->query("INSERT INTO posts (title, content, user_id) VALUES (?, ?, ?)", [
            $_POST['title'],
            $_POST['content'],
            $_SESSION['user']['id'], // user_id uit de session
        ]);

        //hier kan je alleen komen als de query goed is uitgevoerd
        flash("Post is opgeslagen", true, 3000);

        // doorsturen naar posts pagina
        header("Location: /posts");
    }
}
//er is geen post dus we laten het formulier zien
view("post-create", [
    'errors' => $errors
]);


