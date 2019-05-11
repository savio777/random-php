<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- DE OUTRA MANEIRA IA TER QUE FAZER MUITAS GAMBIARRAS, O CERTO É FAZER ISSO COM JAVASCRIPT -->

    <?php
        $cor = 'black';

        if(isset($_GET['cor'])){
            $cor = $_GET['cor'];
        }

        echo "<p style='color:".$cor."'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa. Pellentesque habitant morbi tristique<br> senectus et netus et malesuada fames ac turpis egestas. Nulla at risus. Quisque purus magna, auctor et, sagittis ac, posuere eu, lectus. Nam mattis, felis ut adipiscing.</p>"; 
    ?>
</body>
</html>