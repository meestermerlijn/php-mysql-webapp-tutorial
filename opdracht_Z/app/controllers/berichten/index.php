<?php

$db = new Database();

$berichten = $db->query("SELECT * FROM berichten WHERE deleted_at is null")->fetchAll();

view('berichten/index',[
    'berichten'=>$berichten
]);