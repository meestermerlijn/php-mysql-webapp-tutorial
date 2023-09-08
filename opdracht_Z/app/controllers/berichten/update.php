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
//wijzigingen doorvoeren
$rows = $db->query("UPDATE berichten set titel=:titel, content=:content WHERE id=:id", [
    ':titel'=>$_POST['titel'],
    ':content'=>$_POST['content'],
    ':id' => $_POST['id'],
])->rowCount();


if($rows){
    //gelukt dan ...
    flash("Gegevens succesvol aangepast");
    redirect('/berichten/'.$_POST['id']);
}else{
    //mislukt dan...
    flash("Er ging iets fout met wijzigen",false);
    redirect('/berichten/'.$_POST['id'].'/edit');
}


