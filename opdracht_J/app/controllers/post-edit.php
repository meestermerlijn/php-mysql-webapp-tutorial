<?php
if ($_GET != null and $_GET['id']) {

    $db = new Database();

    $result = $db->query("SELECT * FROM posts WHERE id=?", [
        $_GET['id']
    ])->fetch();

    view("post-update", [
        "post" => $result //deze variabele is beschikbaar in de view
    ]);

} else {
    flash("Geen post gevonden", false);
    header("Location: /posts");
}