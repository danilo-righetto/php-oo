<?php

// Nossa Classe Carro

require_once("Vehicle.php");

class Car extends Vehicle{

    public $door;
    

    //Assinatura com valor padrão

    public function mostraCor($color1 = "Blue")
    {
        return "{$this->$color1}";
        // return "{$color1}";
    }

}

?>