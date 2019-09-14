<?php 

/*
Le personnage 1 frapperait le personnage 2 puis gagnerait de l'expérience, 
puis le personnage 2 frapperait le personnage 1 et gagnerait de  l'expérience.

Procédez étape par étape :
    - créez deux personnages
    - faites frapper le personnage 1
    - faites gagner de l'expérience au personnage 1
    - faites frapper le personnage 2
    - faites gagner de l'expérience au personnage 2.
*/

$perso1 = new Personage;
$perso2 = new Personage;

$perso1->frapper($perso2);
$perso1->gagnerExperience();

$perso2->frapper($perso1);
$perso2->gagnerExperience();
