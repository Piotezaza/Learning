<?php 

/* 
Maintenant que nous avons vu ce qu'étaient des accesseurs et des mutateurs, nous pouvons améliorer notre script de combat. 
Pour commencer, je vais vous demander d'afficher, à la fin du script, la force, l'expérience et le niveau de dégâts de chaque personnage.


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

echo 'Le premier personnage a une force de ' . $perso1->getForce() . ', une experience de ' . $perso1->getExperience() . ' et ' . $perso1->getDegats() . ' dégats.';
echo '<br>';
echo 'Le second personnage a une force de ' . $perso2->getForce() . ', une experience de ' . $perso2->getExperience() . ' et ' . $perso2->getDegats() . ' dégats.';