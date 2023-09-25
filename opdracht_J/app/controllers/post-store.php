<?php
$db = new Database();

if ($_POST != null) {
    // er is een post dus we gaan de gegevens opslaan

    // invoeren van de gegevens in de database
    $db->query("INSERT INTO posts (title, content, user_id) VALUES (?, ?, ?)", [
        $_POST['title'],
        $_POST['content'],
        63, // user_id hard coded wordt later vervangen door
    ]);

    //hier kan je alleen komen als de query goed is uitgevoerd
    flash("Post is opgeslagen", true, 3000);

    // doorsturen naar posts pagina
    header("Location: /posts");

} else {
    //er is geen post dus we laten het formulier zien
    view("post-create");
}

