<?php

class princesse extends Personnage {

    private $saved = 0;

    public function __construct() {
        parent::__construct();

        $this->setId(rand(1,99999));
        $this->x = 450;
        $this->y = 450;
        $this->vie = 80;

    }

    // Je redéfini la méthode héritée setNom
    public function setNom($nom) {
        $this->nom = "Princesse " .$this->id;
    }

    public function getVie(): int
    {
        return parent::getVie(); // TODO: Change the autogenerated stub
    }

    /**
     * @return int
     */
    public function getSaved(): int
    {
        return $this->saved;
    }
}