<?php
require_once "database.php";
class Animal
{
    private $id_animal;
    private $nom;
    private $race;
    private $type;

    public function __construct($nom, $race, $type)
    {
        $this->nom = $nom;
        $this->race = $race;
        $this->type = $type;

    }
    public function getId(){
        return $this->id_animal;
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }


    public function setType($type): self
    {
        $this->type = $type;
        return $this;
    }


    public function getRace()
    {
        return $this->race;
    }


    public function setRace($race): self
    {
        $this->race = $race;
        return $this;
    }
}