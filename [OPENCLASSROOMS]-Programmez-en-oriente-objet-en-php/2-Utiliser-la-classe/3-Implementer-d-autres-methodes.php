<?php 

class Personnage {
    private $_degats = 0;
    private $_experience = 0;
    private $_force = 20;
        
    public function gagnerExperience(){
        $this->_experience = $this->_experience + 1;
    }

    public function frapper($perso){
        $perso->_degats += $this->_force;
    }
}

$perso1 = new Personnage;
$perso2 = new Personnage;

$perso1->frapper($perso2);