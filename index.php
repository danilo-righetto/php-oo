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

?>