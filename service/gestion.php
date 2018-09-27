
<?php

include_once ('../modele/Modele.php');
$unModele = new Modele('localhost', 'ecolewlm', 'root', '');
var_dump($unModele);


try{
    $unModele = new Modele('localhost', 'ecolewlm', 'root', '');
}catch (Exception $e){
    echo "Erreur : ".$e->getMessage();
}


function selectAllQuestion(){
    $req = "SELECT * FROM `questions` WHERE `IdQuestionnaire`=1";
}

?>
