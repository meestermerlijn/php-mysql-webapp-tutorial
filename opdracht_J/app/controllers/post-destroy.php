<?php
if ($_POST != null) {
    $db = new Database();

    $db->query("DELETE FROM posts WHERE id = ?", [
        $_POST['id']
    ]);
    flash("Post is verwijderd", true, 3000);

}
header("Location: /posts");
