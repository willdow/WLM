<?php
/**
 * Created by PhpStorm.
 * User: Laurène
 * Date: 27/09/2018
 * Time: 16:49
 */

class Modele
{
    private $base;

    public function __construct($base)
    {
        $this->base =$base;
    }

    function selectAllQuestion(){
        $donnee_question = array();
        $i = 0;
        $req = $this->base->query("SELECT * FROM `questions` WHERE `IdQuestionnaire`=1");

        while($valeur = $req->fetch())
        {
            $question = new Question();

            $question->setQuestion($valeur['Question']);
            $question->setBonneRep($valeur['BonneR']);
            $question->setRep1($valeur['Reponse1']);
            $question->setRep2($valeur['Reponse2']);
            $question->setRep3($valeur['Reponse3']);

            $donnee_question[$i] = $question;
            var_dump($donnee_question[$i]);
            $i++;


        }
        return $donnee_question;
    }
}