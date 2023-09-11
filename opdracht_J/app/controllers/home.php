<?php

$db = new Database();
$result = $db->query("SELECT * FROM posts ORDER BY id LIMIT 1")->fetch();

view("home", [
    'title' => $result['title'],
    'content' => $result['content'],
]);