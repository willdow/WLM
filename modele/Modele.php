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

    function selectAllQuestion($idQuestionnaire){
        $donnee_question = array();
        $i = 0;
        $req = $this->base->query("SELECT * FROM `questions` WHERE `IdQuestionnaire`=".$idQuestionnaire);

        while($valeur = $req->fetch())
        {
            $question = new Question();

            $question->setId($valeur['IdQuestion']);
            $question->setQuestion($valeur['Question']);
            $question->setBonneRep($valeur['BonneR']);
            $question->setRep1($valeur['Reponse1']);
            $question->setRep2($valeur['Reponse2']);
            $question->setRep3($valeur['Reponse3']);

            $donnee_question[$i] = $question;
            $i++;


        }
        return $donnee_question;
    }





    function selectAllTheme($idMatiere){
        $donnee_theme = array();
        $i = 0;
        $req = $this->base->query("SELECT * FROM `questionnaire` WHERE `IdMatiere`=".$idMatiere);

        while($valeur = $req->fetch())
        {
            $questionnaire = new Questionnaire();

            $questionnaire->setTheme($valeur['Theme']);
            $questionnaire->setIdMatiere($valeur['IdMatiere']);
            $questionnaire->setIdQuestionnaire($valeur['IdQuestionnaire']);

            $donnee_theme[$i] = $questionnaire;
            $i++;

        }
        return $donnee_theme;
    }


    function selectWhere($champs,$table,$where){
//        $donnee_question = array();
//        $i = 0;
        $req = $this->base->query("SELECT ".$champs." FROM ".$table." WHERE ".$where);
        $result = $req->fetch();
        return $result;
    }

    public function insert($tab,$table)
    {
        $donnees=array();
        $parametres=array();
        foreach($tab as $cle=>$valeur)
        {
            $parametres[]=":".$cle;
            $donnees[":".$cle] = $valeur;
        }
        $chaine=implode(",",$parametres);
        $requete="INSERT INTO  ".$table."  VALUES(NULL,".$chaine.");";
        if($this->base!=null)
        {
            $this->base->query($requete);
            //$insert->execute($donnees);
        }
    }


}