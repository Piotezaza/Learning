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
}