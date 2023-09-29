<?php
require "../src/Validator.php";
$errors = [];

if ($_POST != null) {

    if (!Validator::required($_POST['title'])) {
        $errors['title'] = "Titel mag niet leeg zijn";
    }
    if (!Validator::length($_POST['title'], 1, 255)) {
        $errors['title'] = "Titel mag niet langer zijn dan 255 tekens";
    }

    if (!Validator::required($_POST['content'])) {
        $errors['content'] = "De content mag niet leeg zijn";
    }
    // we gaan de wijzigingen opslaan in de database als er geen fouten zijn
    if (empty($errors)) {
        $db = new Database();
        $db->query("UPDATE posts SET title=?, content=? WHERE id = ?", [
            $_POST['title'],
            $_POST['content'],
            $_POST['id'],
        ]);
        flash("Post is gewijzigd", true, 3000);
        header("Location: /posts");
    }

    flash("Verbeter de fouten", false);
    //als er wel errors zijn het formulier opnieuw tonen
    view("post-update", [
        'errors' => $errors,
        'post' => $_POST, // we geven de post mee zodat we de ingevoerde gegevens opnieuw kunnen tonen (die gebeurde ook bij post-edit)
    ]);
} else {
    flash("Geen post gevonden", false);
    header("Location: /posts");
}