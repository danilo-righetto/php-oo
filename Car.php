<?php

// Nossa Classe Carro

class Car{
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

    //Assinatura com valor padrão

    public function mostraCor($color1 = "Blue")
    {
        return "{$this->$color1}";
        // return "{$color1}";
    }

}

?>