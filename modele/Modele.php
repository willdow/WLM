<?php
/**
 * Created by PhpStorm.
 * User: Laurène
 * Date: 27/09/2018
 * Time: 16:49
 */

class Modele
{
    private $pdo;
    public function __construct($serveur, $bdd, $user, $mdp)
    {
        $this->pdo = null;
        try
        {
            $this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
            $this->pdo->exec("SET CHARACTER SET utf8");
        }
        catch(Exception $exp)
        {
            echo "Erreur de connexion a la base de donnee";
        }
    }
}