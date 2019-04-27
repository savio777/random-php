<?php

$vetor = array(3,5,1);

for($i=1;$i<=sizeof($vetor)+1;$i++){
    $num = $vetor[$i-1];
    if($num<$vetor[$i]){
        $vetor[$i-1] = $vetor[$i];
        $vetor[$i] = $num;

    }
}

foreach($vetor as $i){
    echo $i.', ';
}