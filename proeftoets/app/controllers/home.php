<?php


$user = (new User)->find(random_int(31, 90));

view("home", [
    'user' => $user,
]);