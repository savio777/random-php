<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>XVI kkkk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- testes com php -->
    <?php 
        $oi = ' tá bom kkkk';
        $n1 = 1;
        $n2 = '1';
        $ta = $oi . ' KKKK';
        // ultimo comando pode ter ponto e virgula, mas as primeiras não
        //echo('<h1>blz kkkkkkk</h1><br>')
        echo('<h1>blz kkkkkkk</h1><br>'); 
        echo('<p>de boa '.$oi.' kkk</p>');
        echo($n1 + $n2 . $n1 - $n2 . $n1 * $n2 . $n1 / $n2);
        echo($ta)        
    ?>
    <b><?php echo("<br>iae kkkkkk<br>") ?></b>    
    <?php echo('<b>iae negrito tbm kkkk</b>') ?>

    <?php echo("<br>");
        $variavel = 'bem loco';
        $num = 0;
        $i = '';  # tipagem fraca
        if($num == 0){
            echo('<p>blz</p>');
        }elseif($num > 0){
            echo('<p>blz kk</p>');
        }else{
            echo('<p>blz kkk</p>');
        }

        while($num<11){
            echo($num."\n");
            switch($num){
                case 1:
                    echo(".\n");
                    break;
                case 2:
                    echo("..\n");
                    break;
                default:
                    echo("...\n");
            }
            $num++;
        }

        if($num != 0){
            echo('<br>ta<br>');
        }else if($variavel != ''){  # else if separado tbm funciona
            echo('~> ');
        }

        for($i = $num -1; $i > 0; $i--){
            echo("$i\n");
        }

        # interpolação
        echo("${variavel}\n{$variavel}")
    ?>
</body>
</html>
