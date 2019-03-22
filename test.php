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
                    echo("\num\n");
                    break;
                case 2:
                    echo("\ndois\n");
                    break;
                default:
                    echo("\n-\n");
            }
            $num++;
        }

        echo('<br>');

        if($num != 0){
            echo('<br>ta<br>');
        }else if($variavel != ''){  # else if separado tbm funciona
            echo('~> ');
        }

        echo('<br>');

        $numero = 0;

        do{
            echo("${numero}, ");
            $numero--;
        }while($numero > -10);

        echo('<br><br>');

        for($i = $num -1; $i > 0; $i--){
            echo("$i<br>");
        }
        
        echo('<br>');

        $vetor = array(1,2,3);

        foreach($vetor as $i){
            echo("$i\n");
        }

        echo("<b><br><br>");

        $vetor1 = array();

        for($i = 0; $i < 11; $i++){
            $vetor1[$i] = $i;
        }

        for($i = 0; $i<=10; $i++){
            echo($vetor1[$i]);
        }

        # interpolação
        echo("<br><br>${variavel}\n{$variavel}");
        echo('<br><br>${variavel}\n{$variavel}');

        echo("<b><br>");

        $booleano = NULL;
        $booleano = FALSE;

        if($booleano == TRUE){
            echo("${booleano} verdadeiro<br><br>");
        }else{
            echo("${booleano} falso<br><br>");
        }

        echo((NULL == FALSE) && (0 == NULL)); 

        $teste = 1;

        echo($teste == TRUE);

        // vetor dinamico
        $vet['oi'] = 'oi kkk';
        $vet[0] = '0';
        $vet[1] = 1;
        $vet['vet'] = array(1, 2, 3);
        $vet[2] = 6.9;
        $vet['v'] = TRUE;
        $vet['f'] = FALSE;
        $vet['pulo'] = '<br>';
        $vet['seiLa'] = array('hmm' => 'hmmm', 'hm' => 'hmmmmmm');

        $vet1 = array('ta' => 'taa', 'taa' => 'taaaa');

        echo("<br><br>".$vet['oi'].$vet['pulo'].$vet[0].$vet[1].$vet[2].$vet['v'].$vet['f'].$vet1['ta'].$vet1['taa'].$vet['pulo']);
        
        class Test{

            private $oi = NULL;

            public function escreverOi($oi){
                $this->oi = $oi;
            }

            // consertar
            public function imprimirOi(){
                return $this->oi;
            }
        }

        $objeto = new Test;
        $objeto->escreverOi('oi kkkk');
        echo($objeto->imprimirOi());

        echo('<br><br>');
        define('PULAR', '<br>');

        echo(gettype($objeto) . PULAR);
        echo(gettype('1') . PULAR);
        echo(gettype(1) . PULAR);
        echo(gettype(1.1) . PULAR);
        echo(gettype(true) . PULAR);
        echo(gettype(array(1,2,3)) . PULAR);
        echo(gettype(NULL) . PULAR . PULAR);
        
        if($_POST != NULL){
            echo(var_dump($_POST) . '<br>');
            echo('nome~> ' . $_POST['nome'] . ' sobrenome~> ' . $_POST['sobrenome'] . '<br>');
        }else{
            echo('ta blz<br>');
        }

        if($_GET != NULL){
            echo(var_dump($_GET) . '<br>');
            echo('nome~> ' . $_GET['nome'] . ' sobrenome~> ' . $_POST['sobrenome'] . '<br>');
        }else{
            echo('ta blz<br>');
        }



    ?>
</body>
</html>
