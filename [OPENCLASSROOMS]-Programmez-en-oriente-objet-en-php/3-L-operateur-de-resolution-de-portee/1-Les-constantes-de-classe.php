<?php

class Personnage
{

    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    public function __construct($forceInitiale)
    {
        $this->setForce($forceInitiale);
    }

    public function deplacer()
    { }
    public function frapper()
    { }
    public function gagnerExperience()
    { }

    public function setForce($force)
    {
        if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE])) {
            $this->_force = $force;
        }
    }
}

$perso = new Personnage(Personnage::FORCE_MOYENNE);
