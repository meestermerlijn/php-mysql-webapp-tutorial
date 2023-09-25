<?php
//Let op in onderstaande code wordt ervan uitgegaan dat in de index.php de volgende code staat:
////////////////////////////////////////
/// Configuratie parameters inladen ////
////////////////////////////////////////
session_start();
$config = require __DIR__ . "/../app/config.php";

//handige functies
require __DIR__ . "/../src/functions.php";

//Database class
require __DIR__ . "/../src/Database.php";

//routes
require __DIR__ . "/../app/router.php";

////////////////////////////////////////
/// PHP code //////////////////////////
///////////////////////////////////////

//variabele aanmaken
$naam = "Maurice";

//variabele tonen
echo $naam;

//variabele tonen met html
echo "<h1>" . $naam . "</h1>";

//variabele tonen met html (kortere versie)
echo "<h1>$naam</h1>";

//variabele tonen met html (kortere versie)
echo "<h1>{$naam}</h1>";

//variabele tonen met html (kortere versie)
?>
    <div>
        <h1><?= $naam ?></h1>
    </div>
<?php

//array aanmaken
$namen = ["Maurice", "John", "Ben"];

//variabele uit array tonen (eerste element)
echo $namen[0];

//key value array aanmaken
$namen = [
    "voornaam" => "Maurice",
    "achternaam" => "Merlier",
    "leeftijd" => 45
];

//variabele uit array tonen (eerste element)
echo $namen["voornaam"];

//array met meerdere arrays
$personen = [
    [
        "voornaam" => "Maurice",
        "achternaam" => "Merlier",
        "leeftijd" => 45
    ],
    [
        "voornaam" => "Michael",
        "achternaam" => "Johnson",
        "leeftijd" => 22
    ],
];

//variabele uit array tonen (eerste element)
echo $personen[0]["voornaam"];

//loop door een array met foreach
foreach ($personen as $persoon) {
    echo $persoon["voornaam"] . "<br>";
}

//gebruik van een functie
function getFullName($voornaam, $achternaam)
{
    return $voornaam . " " . $achternaam;
}

//functie aanroepen
echo getFullName("Maurice", "Merlier");

//functie aanroepen met variabelen
$voornaam = "Maurice";
$achternaam = "Merlier";
echo getFullName($voornaam, $achternaam);

//gebruik van if else
$leeftijd = 45;
if ($leeftijd > 18) {
    echo "Je bent ouder dan 18";
} else {
    echo "Je bent jonger dan 18";
}

//gebruik van switch
$leeftijd = 45;
switch ($leeftijd) {
    case 18:
        echo "Je bent 18";
        break;
    case 19:
        echo "Je bent 19";
        break;
    default:
        echo "Je bent geen 18 of 19";
}

////////////////////////////////////////
/// Database gebruiken //////////// ////
////////////////////////////////////////

//database object initialiseren
$db = new Database();

//query uitvoeren (met 1 resultaat) en opslaan in een variabele $result (waarbij in de query een parameter wordt gebruikt)
$result = $db->query("SELECT * FROM posts WHERE id = ?", [
    1
])->fetch();

//query uitvoeren (met 1 resultaat) en opslaan in een variabele $result (waarbij in de query een 'named' parameter wordt gebruikt)
$result = $db->query("SELECT * FROM posts WHERE id = :id", [
    'id' => 1
])->fetch();

//query uitvoeren (met meerdere resultaten) en opslaan in een variabele $result (array)
$result = $db->query("SELECT * FROM posts")->fetchAll();

//query uitvoeren zonder resultaat (insert, update, delete)
$db->query("INSERT INTO posts (title, content) VALUES (?, ?)", [
    "Mijn titel",
    "Mijn content"
]);
$db->query("UPDATE posts SET title = ?, content = ? WHERE id = ?", [
    "Mijn titel",
    "Mijn content",
    1
]);
$db->query("DELETE FROM posts WHERE id = ?", [
    1
]);

//query uitvoeren zonder resultaat (insert, update, delete) met 'named' parameters (let op de dubbele punt voor de parameter)
$db->query("INSERT INTO posts (title, content) VALUES (:title, :content)", [
    'title' => "Mijn titel",
    'content' => "Mijn content"
]);
$db->query("UPDATE posts SET title = :title, content = :content WHERE id = :id", [
    'title' => "Mijn titel",
    'content' => "Mijn content",
    'id' => 1
]);
$db->query("DELETE FROM posts WHERE id = :id", [
    'id' => 1
]);

?>
    <!--
        ////////////////////////////////////////
        /////////////// Formulieren ////////////
        ////////////////////////////////////////


        Formulier maken (voorbeeld
         action: de url waar het formulier naartoe moet
         method: de methode die gebruikt moet worden (get of post)
         name: de naam van het veld (wordt gebruikt om de waarde op te halen)
         value: de waarde van het veld
         placeholder: de tekst die in het veld wordt getoond
         required: het veld is verplicht
         type: het type veld (text, password, email, number, date, time, url, color, range, search, tel) -->
    <form action="/posts" method="post">
        <input type="text" name="title" placeholder="Titel" required>
        <textarea name="content" placeholder="Content"></textarea>
        <input type="submit" value="Opslaan">
    </form>

    <!-- input fields -->
    <!-- text -->
    <input type="text" name="title" placeholder="Titel">
    <!-- password -->
    <input type="password" name="password" placeholder="Wachtwoord">
    <!-- email -->
    <input type="email" name="email" placeholder="E-mailadres">
    <!-- number -->
    <input type="number" name="age" placeholder="Leeftijd">
    <!-- date -->
    <input type="date" name="date" placeholder="Datum">
    <!-- time -->
    <input type="time" name="time" placeholder="Tijd">
    <!-- url -->
    <input type="url" name="url" placeholder="URL">
    <!-- color -->
    <input type="color" name="color" placeholder="Kleur">
    <!-- range -->
    <input type="range" name="range" placeholder="Range">

    <!-- textarea -->
    <textarea name="content" placeholder="Content..."></textarea>

    <!-- selectbox -->
    <select name="contry">
        <option value=""></option>
        <option value="NL">Nederland</option>
        <option value="BE">België</option>
        <option value="DE">Duitsland</option>
        <option value="FR">Frankrijk</option>
        <option value="UK">Engeland</option>
    </select>

    <!-- met een voorgeselecteerde option -->
    <select name="contry">
        <option value=""></option>
        <option value="NL" selected>Nederland</option>
        <option value="BE">België</option>
        ...
    </select>

    <!-- checkbox -->
    <input type="checkbox" name="terms" value="1">

    <!-- radiobuttons -->
    <input type="radio" name="sex" value="M">Man<br>
    <input type="radio" name="sex" value="V">Vrouw<br>
    <input type="radio" name="sex" value="X">Anders<br>

    <!-- hidden field -->
    <input type="hidden" name="id" value="1">

    <!-- submit button -->
    <input type="submit" value="Opslaan" name="save">

    <!-- of button -->
    <button type="submit" name="save">Opslaan</button>
<?php
////////////////////////////////////////
/////////////// Sessions ///////////////
////////////////////////////////////////

//starten van een sessie
session_start();

//variabele in de sessie zetten
$_SESSION['naam'] = "Maurice";

//variabele uit de sessie halen
echo $_SESSION['naam'];

//sessie variabele verwijderen
unset($_SESSION['naam']);

//sessie verwijderen
session_destroy();

////////////////////////////////////////
/// Cookies ////////////////////////////
////////////////////////////////////////
///
//cookie zetten
setcookie("naam", "Maurice", time() + 3600);

//cookie uitlezen
echo $_COOKIE['naam'];

//cookie verwijderen
setcookie("naam", "", time() - 3600);

////////////////////////////////////////
/// Bestanden //////////////////////////
////////////////////////////////////////
///
//bestand inlezen
$bestand = file_get_contents("bestand.txt");

//bestand schrijven
file_put_contents("bestand.txt", "Hallo");

//bestand verwijderen
unlink("bestand.txt");

//bestand verplaatsen
rename("bestand.txt", "nieuwbestand.txt");

//bestand kopiëren
copy("bestand.txt", "nieuwbestand.txt");

//bestand uploaden
move_uploaded_file($_FILES['bestand']['tmp_name'], "bestand.txt");

////////////////////////////////////////
/// Classes ////////////////////////////
////////////////////////////////////////

//class aanmaken
class Persoon
{
    //variabelen
    public $voornaam;
    public $achternaam;
    public $leeftijd;

    //constructor
    public function __construct($voornaam, $achternaam, $leeftijd)
    {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->leeftijd = $leeftijd;
    }

    //functie
    public function getFullName()
    {
        return $this->voornaam . " " . $this->achternaam;
    }
}

//class gebruiken
$persoon = new Persoon("Maurice", "Merlier", 45);

//functie aanroepen
echo $persoon->getFullName();

////////////////////////////////////////
/// Veiligheid /////////////////////////
////////////////////////////////////////

/// gebruik van htmlspecialchars
?>
    <h1><?= $naam ?></h1> (onveilig)
    <h1><?= htmlspecialchars($naam) ?></h1> (veilig)

<?php
