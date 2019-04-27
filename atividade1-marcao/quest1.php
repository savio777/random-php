<?php

#$num = intval($_POST('num')); 
$num = 11;

if($num){
    if($num > 10){
        echo "maior que 10\n";
    }else{
        echo "não é maior que 10\n";
    }
}