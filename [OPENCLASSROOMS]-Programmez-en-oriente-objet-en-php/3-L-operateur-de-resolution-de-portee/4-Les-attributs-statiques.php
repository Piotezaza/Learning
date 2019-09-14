<?php

/*
Nous allons maintenant faire un petit exercice. Je veux que vous me fassiez une classe toute bête qui ne sert à rien. 
Seulement, à la fin du script, je veux pouvoir afficher le nombre de fois où la classe a été instanciée. 
Pour cela, vous aurez besoin d'un attribut appartenant à la classe (admettons $_compteur) qui est incrémenté dans le constructeur.
*/

class TouteBete
{
    public static $_compteur = 0;

    public function __construct()
    {
        self::$_compteur++;
        echo self::$_compteur . '<br>';
    }
}

$obj1 = new TouteBete;
$obj2 = new TouteBete;
$obj3 = new TouteBete;
$obj4 = new TouteBete;
