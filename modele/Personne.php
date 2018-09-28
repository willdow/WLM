<?php
/**
 * Created by PhpStorm.
 * User: Laurène
 * Date: 27/09/2018
 * Time: 22:02
 */

class Personne
{
    private $nom,$prenom,$mdp,$photo;

    function __construct($nom,$prenom,$mdp,$photo)
    {
        $this->nom = $nom;
        $this->prenom =$prenom;
        $this->mdp =$mdp;
        $this->photo = $photo;

    }
}