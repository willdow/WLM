<?php
/**
 * Created by PhpStorm.
 * User: Laurène
 * Date: 27/09/2018
 * Time: 18:06
 */

class Question
{
    private $id;
    private $question,$bonneRep,$rep1,$rep2,$rep3;

    function __construct($question,$bonneRep,$rep1,$rep2,$rep3)
    {
        $this->id = 0;
        $this->question = "";
        $this->bonneRep = "";
        $this->rep1 = "";
        $this->rep2 = "";
        $this->rep3 = "";
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param string $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getBonneRep()
    {
        return $this->bonneRep;
    }

    /**
     * @param string $bonneRep
     */
    public function setBonneRep($bonneRep)
    {
        $this->bonneRep = $bonneRep;
    }

    /**
     * @return string
     */
    public function getRep1()
    {
        return $this->rep1;
    }

    /**
     * @param string $rep1
     */
    public function setRep1($rep1)
    {
        $this->rep1 = $rep1;
    }

    /**
     * @return string
     */
    public function getRep2()
    {
        return $this->rep2;
    }

    /**
     * @param string $rep2
     */
    public function setRep2($rep2)
    {
        $this->rep2 = $rep2;
    }

    /**
     * @return string
     */
    public function getRep3()
    {
        return $this->rep3;
    }

    /**
     * @param string $rep3
     */
    public function setRep3($rep3)
    {
        $this->rep3 = $rep3;
    }

}