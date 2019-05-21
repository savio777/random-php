<?php

// normal
function dobro($valor){
    return $valor = $valor * 2;
}

// & referencia
function duplica(&$valor){
    return $valor = $valor * 2;
}

// parâmetro pré definido se não for inserido  
function capital($capital, $estado = 'estado qualquer'){
    return $capital . ' do ' . $estado;
}

function recursivaDiminuir($num){
    return $num - 1;
}

$num = 5;

echo dobro($num);

echo "\n";

echo recursivaDiminuir($num);

echo "\n";

echo duplica($num);

echo "\n";

echo recursivaDiminuir($num);

echo "\n";

echo capital('São Paulo');

echo "\n";

echo capital('Teresina', 'PI');

echo "\n";
