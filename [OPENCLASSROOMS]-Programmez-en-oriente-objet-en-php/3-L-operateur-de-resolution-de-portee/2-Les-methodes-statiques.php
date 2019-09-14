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

    // Le mot-clé static peut être placé avant la visibilité de la méthode
    public static function parler()
    {
        echo 'Je vais tous vous tuer !';
    }
}

$perso = new Personnage(Personnage::FORCE_GRANDE);
$perso->parler(); // Même chose dans les deux cas mais la version :: est préférée
Personnage::parler(); // Même chose dans les deux cas mais la version :: est préférée
