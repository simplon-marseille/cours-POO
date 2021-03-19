<?php

require 'Patisserie.php';

class Cake extends Patisserie
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

    //GETTER et SETTER

    public function manger_le_cake(){
        return 'manger le cake';
    }

}
