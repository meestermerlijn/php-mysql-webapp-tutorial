<?php

$db = new Database();

if ($_GET != null) {

    //zoeken in de posts tabel naar de ingevoerde zoekterm
    //let op onderstaande query zou werken maar is niet veilig tegen SQL injection
    //$result = $db->query("SELECT * FROM posts WHERE title LIKE '%{$_GET['search']}%' or content LIKE '%{$_GET['search']}%'")->fetchAll();

    //onderstaande query is wel veilig tegen SQL injection (en is ook overzichtelijker)
    $result = $db->query("SELECT * FROM posts, users WHERE posts.user_id = users.id AND title LIKE ? or content LIKE ?", [
        "%{$_GET['search']}%",
        "%{$_GET['search']}%"
    ])->fetchAll();

    //eventueel kan je in de query in plaats van de ? ook een 'named' parameter gebruiken
    //let op de dubbele punt voor de parameter
    //$result = $db->query("SELECT * FROM posts WHERE title LIKE :search or content LIKE :search", [
    //    'search' => "%{$_GET['search']}%"
    //])->fetchAll();
} //als er geen zoekterm is ingevoerd
else {
    //selecteer alle posts
    $result = $db->query("SELECT * FROM posts, users WHERE posts.user_id = users.id")->fetchAll();
}


//laat de view zien en stuur de posts mee
view("posts", [
    'posts' => $result
]);

