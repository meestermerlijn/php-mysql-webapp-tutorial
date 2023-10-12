<?php
//1pt voor maken van dit bestand

$db = new Database();

if (isset($_GET['id'])) { //1pt

    //2pt
    $klant = $db->query("SELECT * FROM klanten WHERE id = ?", [
        $_GET['id']
    ])->fetch();

    view('klant-edit', [ //1pt
        'klant' => $klant,
    ]);

} else {
    header("Location: /klanten");
}