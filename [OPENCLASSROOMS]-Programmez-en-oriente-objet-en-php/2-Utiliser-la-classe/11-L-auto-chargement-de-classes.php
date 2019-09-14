<?php

require 'Classe.php';

$objet = new Classe;

function chargerClasse($classe) {
  require $classe . '.php';
}

// On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.
spl_autoload_register('chargerClasse'); 

$perso = new Personnage;