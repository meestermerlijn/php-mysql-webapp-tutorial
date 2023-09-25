<?php
session_start();
//inladen van de configuratie parameters
$config = require __DIR__ . "/../app/config.php";

//handige functies
require __DIR__ . "/../src/functions.php";

//Database class
require __DIR__ . "/../src/Database.php";

//csrf protection
require __DIR__ . "/../src/csrf.php";

//routes
require __DIR__ . "/../app/router.php";