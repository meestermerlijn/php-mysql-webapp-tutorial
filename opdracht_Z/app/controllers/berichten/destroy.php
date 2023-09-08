<?php
$db = new Database();

//softdelete
$rows = $db->query("UPDATE berichten SET deleted_at=now() WHERE id=:id", [
    ':id'=>$_POST['id']
]);

//force delete
//$rows = $db->query("DELETE FROM berichten WHERE id=:id", [
//    ':id'=>$_POST['id']
//]);



if($rows){
    flash("Bericht succesvol verwijderd");
    redirect('/berichten');
}else{
    flash("Er ging iets mis met verwijderen",false);
    redirect('/berichten/'.$_POST['id']);
}