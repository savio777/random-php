<?php

#$vetor = array(5,3,1);
$vetor = array(3, 5, 1);

for($i1=0;$i1<=sizeof($vetor);$i1++){
    for($i2=0;$i2<(sizeof($vetor)-1);$i2++){
        if($vetor[$i2] > $vetor[$i2+1]){
            $aux = $vetor[$i2];
            $vetor[$i2] = $vetor[$i2+1];
            $vetor[$i2+1] = $aux;
        }
    }
}

foreach($vetor as $i){
    echo $i.', ';
}

echo "\n";