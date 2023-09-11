<?php
$db = new Database();
$result = $db->query("SELECT * FROM posts")->fetchAll();

view("posts", [
    'posts' => $result
]);

