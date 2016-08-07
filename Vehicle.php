<?php

// Herança

class Vehicle{
    public $brand;
    public $color;
    public $engine;

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