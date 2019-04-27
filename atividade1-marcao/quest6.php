<?php

#$ano = 1997;
$ano = 1984;

$oikkk = $ano % 10;
$iaekkk = (($ano %100) - $oikkk) / 10;


if($ano%4==0){
    if($iaekkk==0 && $oikkk == 0){
        if($ano%400==0){
            echo "bissexto\n"; 
        }else{
            echo "não é bissexto\n";
        }
    }else{
        echo "bissexto\n";
    }
}else{
    echo "não é bissexto\n";
}
