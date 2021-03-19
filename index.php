<?php

require 'Cake.php';



$cake_chocolat = new Cake('chocolat', 'sucré', [
    "farine" => "250gr",
    "sucre" => "100gr",
    "beurre" => "120gr",
    "levure" => "1 sachet",
    "gout" => "chocolat"
]);

print_r($cake_chocolat->melanger_les_ingredient());
