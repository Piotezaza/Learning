<?php

class Personage {
    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

    public function parler(){
        echo 'Je suis un personnage!';
    }
}

$perso = new Personage;
$perso->parler();