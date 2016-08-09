<?php
/* Autor: Danilo Righetto */

// PHP - Iniciando com Orientação a Objetos

// Paradigma Funcional

$input = array(22,23,24,25,26,27,28);
$filtro = function(int $age){
    return ($age >= 18);
}

$output = array_filter($input, $filtro);

print_r($output);

// Usando orientação a Objetos

class People{
    public function getHello($name){
        return "Hello {$name}!";
    }
}

$p = new People;
echo $p->getHello("Danilo");

// Iniciando com Orientação a Objetos

// Chamando as Classes no PHP 

require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car("Ferrari", "Red");
$mustang = new Car("Mustang", "Orange");

$ferrari->brand = "Ferrari";
$ferrari->color = "Red";
$ferrari->engine = "V10";

// Chamando um metodo da classe PAI



echo $ferrari->brand;
echo $ferrari->color;
echo $ferrari->engine;

echo $ferrari->getBrand();
echo $ferrari->getColor();
echo $ferrari->getEngine();




?>