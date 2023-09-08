<?php
$db = new Database();

//Validatie op titel
if(!$_POST['titel']){
    flash('Titel is een verplicht veld',false);
    redirect('/berichten/create');
}
//Validatie op bericht
if(!$_POST['content']){
    flash('Het bericht is een verplicht veld',false);
    redirect('/berichten/create');
}

//invoeren in de database
$rows = $db->query("INSERT INTO berichten (`titel`,`content`) VALUES (:titel,:content)", [
    ':titel'=>$_POST['titel'],
    ':content'=>$_POST['content'],
]);

//indien gelukt dan ...
if($rows){
    flash('Bericht is toegevoegd');
    redirect('/berichten/'.$db->lastInsertId());
}else{
    //mislukt
    flash('Er is iets fout gegaan');
    redirect('/berichten/create');
}