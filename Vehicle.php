<?php

// Herança

class Vehicle{
    public $brand;
    public $color;
    public $engine;

    // Trabalhando com construtor

    function __construct($brand = null, $color = null) {
        $this->brand = $brand;
        $this->color = $color;
    }

    //Metodos no PHP 
    public function getBrand()
    {
        return $this->$brand;
    }

    public function getColor()
    {
        return $this->$color;
    }

    public function getEngine()
    {
        return $this->$engine;
    }
}


?>