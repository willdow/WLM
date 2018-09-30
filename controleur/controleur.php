<?php
/**
 * Created by PhpStorm.
 * User: Laurène
 * Date: 27/09/2018
 * Time: 21:57
 */

class Controleur
{

    function connexion($id, $password, $base)
    {
        $_SESSION['id'] = $_POST['id'];


        $Modele = new Modele($base);

        $infoPersonne = $Modele->selectWhere("*","personne","IdPersonne = ".$id." AND Mdp =".$password);

        if ($infoPersonne <> "")
        {
            echo "Connexion reussi";

            $_SESSION['Nom'] = $infoPersonne['Nom'];
            $_SESSION['Prenom'] = $infoPersonne['Prenom'];
            $_SESSION['TypeP'] = $infoPersonne['TypeP'];


        }else{
            header('Location: login.php');
            echo "utilisateur non connu";
        }

    }



}