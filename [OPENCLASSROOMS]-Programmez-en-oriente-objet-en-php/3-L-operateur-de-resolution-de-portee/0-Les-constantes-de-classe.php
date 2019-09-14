<?php

class Personnage
{

    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    public function __construct()
    { }
    public function deplacer()
    { }
    public function frapper()
    { }
    public function gagnerExperience()
    { }
}
