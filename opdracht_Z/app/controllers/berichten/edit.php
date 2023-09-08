<?php
$db = new Database();

$bericht = $db->query("SELECT * FROM berichten WHERE id=:id", [
    ':id' => $_GET['id']
])->fetch();

view('berichten/edit', [
    'bericht' => $bericht
]);