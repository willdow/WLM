<?php

include_once ('../service/connect.php');
include_once ('../modele/Modele.php');
include_once ('../modele/Question.php');


$modele = new Modele($base);
$donnee = $modele->selectAllQuestion();
var_dump($donnee);

foreach ($donnee as $val)
{
    $Question = $val->getQuestion();
    $BonneR = $val->getBonneRep();
    $Reponse1 = $val->getRep1();
    $Reponse2 = $val->getRep2();
    $Reponse3 = $val->getRep3();

    echo "__".$Question."__".$BonneR."__".$Reponse1."__".$Reponse2."__".$Reponse3;
}

?>