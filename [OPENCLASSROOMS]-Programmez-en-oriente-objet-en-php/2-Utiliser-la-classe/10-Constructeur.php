<?php

class Personnage {
    private $_force;
    private $_experience;
    private $_degats;

    public function __construct($force, $degats){
        echo 'Voici le constructeur !';
        $this->setForce($force);
        $this->setDegats($degats);
        $this->_experience = 1;
    }

    public function setForce($force){
        if (!is_int($force)) {
            trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($force > 100) {
            trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }

        $this->_force = $force;
    }

    public function setDegats($degats){
        if (!is_int($degats)) {
            trigger_error('Le niveau de dégâts d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }

        $this->_degats = $degats;
    }
}

$perso1 = new Personnage(24, 5);
$perso2 = new Personnage(12, 15);