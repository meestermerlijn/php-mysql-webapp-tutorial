<?php
//1pt voor het maken van dit bestand
if ($_POST['id'] != null) { //2pt

    $db = new Database(); //1pt

    //Delete query 3pt
    $afspraken = $db->query("DELETE FROM afspraken WHERE id = ?", [
        $_POST['id'] //1pt (veiligheid)
    ])->fetch();

    flash("Afspraak verwijderd"); //1pt
}
header("Location: /afspraken"); //1pt
