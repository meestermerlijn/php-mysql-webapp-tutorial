<?php
if ($_POST != null) {

    $db = new Database();

    $db->query("UPDATE posts SET title=?, content=? WHERE id=?", [
        $_POST['title'],
        $_POST['content'],
        $_POST['id']
    ]);

    flash("Post is gewijzigd", true, 3000);

    header("Location: /posts");
} else {
    flash("Geen post gevonden", false);
    header("Location: /posts");
}