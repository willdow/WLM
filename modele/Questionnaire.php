<?php
/**
 * Created by PhpStorm.
 * User: Laurène
 * Date: 28/09/2018
 * Time: 16:20
 */

class Questionnaire
{
    private $theme,$idMatiere,$idQuestionnaire;

    /**
     * @return mixed
     */
    public function getIdQuestionnaire()
    {
        return $this->idQuestionnaire;
    }

    /**
     * @param mixed $idQuestionnaire
     */
    public function setIdQuestionnaire($idQuestionnaire)
    {
        $this->idQuestionnaire = $idQuestionnaire;
    }

    /**
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * @param mixed $idMatiere
     */
    public function setIdMatiere($idMatiere)
    {
        $this->idMatiere = $idMatiere;
    }


}