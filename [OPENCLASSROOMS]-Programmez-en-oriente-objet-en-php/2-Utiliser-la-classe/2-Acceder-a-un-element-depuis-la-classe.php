<?php 

class Personnage {
    private $_experience;

    public function gagnerExperience(){
        $this->_experience = $this->_experience++;
    }

    public function afficherExperience(){
        echo $this->_experience;
    }
}

$perso = new Personage;
$perso->gagnerExperience();
$perso->afficherExperience();