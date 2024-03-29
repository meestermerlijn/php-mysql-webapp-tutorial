<?php
session_start();
//Content-security-policy
//require __DIR__."/../src/csp.php";

//inladen van de configuratie parameters
$config = require __DIR__ . "/../app/config.php";

//handige functies
require __DIR__ . "/../src/functions.php";

//Database class
require __DIR__ . "/../src/Database.php";

//Model classes
require __DIR__ . "/../src/Model.php";
require __DIR__ . "/../app/models/User.php";
require __DIR__ . "/../app/models/Post.php";

//Database class
require __DIR__ . "/../src/Route.php";

//csrf protection
require __DIR__ . "/../src/csrf.php";

//routes
require __DIR__ . "/../app/router.php";