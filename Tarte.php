<?php

require 'Patisserie.php';

class Tarte extends Patisserie
{
    //1 - Propriété
    private $nom;
    private $type;
    private $ingredient = [];

    //2 - Constructeur
    public function __construct(string $nom_cake, string $type_cake, array $ingredient_cake)
    {
        $this->nom = $nom_cake;
        $this->type = $type_cake;
        $this->ingredient = $ingredient_cake;
    }

    public function manger_une_tarte(){
        return 'manger une tarte';
    }
}