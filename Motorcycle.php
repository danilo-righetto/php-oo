<?php

require_once("Vehicle.php");

class Motorcycle extends Vehicle{
    
    function __construct($brand = null, $color = null) {
        //$this->brand = $brand;
        // Deixar a Cor Maiuscula no construtor PAI
        //$this->color = strtoupper($color);

        parent::__construct($brand, strtoupper($color));
    }
}

?>