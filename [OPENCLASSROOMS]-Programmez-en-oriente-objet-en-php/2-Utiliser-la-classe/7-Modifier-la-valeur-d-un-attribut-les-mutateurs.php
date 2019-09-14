<?php

class Personnage {
    private $_force;
    private $_experience;
    private $_degats;

    public function frapper(Personnage $persoAFrapper){
        $persoAFrapper->_degats = $this->_experience;
    }

    public function gagnerExperience(){
        $this->_experience++;
    }

    public function getForce(){
        return $this->_force;
    }

    public function getExperience(){
        return $this->_experience;
    }

    public function getDegats(){
        return $this->_degats;
    }

    public function setForce($force){
        if (!is_int($force)){
            trigger_error('La force d\'un personnage doit être un nombre entier.', E_USER_WARNING);
            return;
        }

        if ($force > 100){
            trigger_error('La force d\'un personnage ne peut dépasser 100.', E_USER_WARNING);
            return;
        }

        $this->_force = $force;
    }

   
    public function setExperience($experience){
        if (!is_int($experience)){
            trigger_error('L\'expérience d\'un personnage doit être un nombre entier.', E_USER_WARNING);
            return;
        }

        if ($experience > 100){
            trigger_error('L\'expérience d\'un personnage ne peut dépasser 100.', E_USER_WARNING);
            return;
        }

        $this->_experience = $experience;
    }
}
