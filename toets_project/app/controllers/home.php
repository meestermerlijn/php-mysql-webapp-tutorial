<?php

$db = new Database();
$result = $db->query("SELECT * FROM posts ORDER BY id LIMIT 1")->fetch();

$user = (new User)->find(random_int(31, 90));

view("home", [
    'title' => $result['title'],
    'content' => $result['content'],
    'user' => $user,
]);