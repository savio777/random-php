<?php

$num = 6;
$fatorial = $num;

while($num > 1){
    $fatorial = $fatorial * ($num-1);
    #echo "num~>" . $num . " f~> " . $fatorial."\n";
    $num--;
}

echo "\n" . $fatorial . "\n";