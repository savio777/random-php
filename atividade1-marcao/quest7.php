<?php

$num = 6;
$fatorial = 0;

while($num > 1){
    $fatorial += ($num*$num-1);

    $num--;
}

echo $fatorial . "\n";