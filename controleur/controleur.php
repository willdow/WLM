<?php
/**
 * Created by PhpStorm.
 * User: Laurène
 * Date: 27/09/2018
 * Time: 21:57
 */

class Controleur
{


    function connexion($id, $password, $unModele)
    {
        $_SESSION['id'] = $_POST['id'];
        $_SESSION['nom'] = "";
        $_SESSION['type'] = "";

        $modele = new Modele();

        $infoPersonne = $modele->selectPersonneWhere($id);






        $resultat = $unModele->selectWhere("count(*) as nb, pseudo, id_personne ",$recherche, " where ", " group by id_personne ");
        if ($resultat[0]["nb"] == 1) {
            $_SESSION['mail'] = $mail;
            $_SESSION['pseudo'] = $resultat["0"]["pseudo"];
            $_SESSION['id'] = $resultat["0"]["id_personne"];
            $unModele->setTable("Personne");
            $recherche = ' id_personne='.$_SESSION['id'].' ';
            $resultat = $unModele->selectWhere(" * ",$recherche, " where ");
            $_SESSION['nom'] = $resultat[0]['Nom'];
            $_SESSION['prenom'] = $resultat[0]['Prenom'];
            $_SESSION['age'] = $resultat[0]['Age'];
            $_SESSION['genre'] = $resultat[0]['Genre'];
        }
        elseif ($resultat[0] == 0) {
            $erreur = '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            Compte inconnu !!
                        </div>';
            echo $erreur;
        } // sinon, alors la, il y a un gros problème :)
        else {
            $erreur = 'Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
            echo $erreur;
        }
    }


}