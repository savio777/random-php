<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>atividade php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <?php 
        echo('primeira questão<br>');
        for($i = 0; $i < 11; $i++){
            if($i%2 != 0){
                echo("${i}\n");
            }
        }

        echo('<br><br>');

        echo('segunda questão<br>');
        $num1 = 0;
        $num2 = 1;
        if($num1>$num2){
            echo("${num1} maior que ${num2}");
        }elseif($num1<$num2){
            echo("${num1} menor que ${num2}");
        }elseif($num1==$num2){
            echo("${num1} igual a ${num2}");
        }

        echo('<br><br>');

        echo("terceira questão<br>");
        $array = array(1,2,3,4,5);
        $num = 0;
        foreach($array as $i){
            $num = $num + $i;
        }
        echo($num);
        // desenvolver um algoritmo que percorra um array e some todos os números deste array

    ?>
</body>
</html>