<?php
session_start();
//Content-security-policy
//require __DIR__."/../src/csp.php";

//inladen van de configuratie parameters
$config = require __DIR__."/../app/config.php";


//veel gebruikte functies
require __DIR__."/../src/functions.php";

//classes die we willen gebruiken
require __DIR__."/../src/classes.php";

//csrf protection
require __DIR__."/../src/csrf.php";

//routes
require __DIR__."/../app/router.php";

