<?php
/* Autor: Danilo Righetto */

// PHP - Iniciando com Orientação a Objetos

$input = array(22,23,24,25,26,27,28);
$filtro = function(int $age){
    return ($age >= 18);
}

$output = array_filter($input, $filtro);

print_r($output);

?>