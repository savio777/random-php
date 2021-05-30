<?php

# exemplo de opções de conexão com o banco
/*$dbOptions = [
    PDO::ATTR_DEFAULT_FECTH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];*/

$con = null;

try {
    $con = new PDO('mysql:dbname=teste;host=localhost', 'root', '', null);
} catch (PDOException $erro) {
    echo ($erro->getMessage());
}


$sql = 'INSERT INTO nomes (nome, sobrenome) VALUES (?,?)';
$sql1 = 'SELECT * FROM nomes';

$nome = null;
$sobrenome = null;

if ($_POST['nome'] && $_POST['sobrenome']) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
} elseif ($_GET['nome'] && $_GET['sobrenome']) {
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
} else {
    echo ('erro no get e post');
}

try {
    $stm = $con->prepare($sql);
    $stm->bindParam(1, $nome);
    $stm->bindParam(2, $sobrenome);

    $stm->execute();

    echo ('valores inseridos na tabela<br><br>');
} catch (PDOException $erro) {
    echo ($erro->getMessage());
}

try {
    $stm = $con->prepare($sql1);
    $stm->execute();
    $vetor = $stm->fetchAll();

    echo (var_dump($vetor));
} catch (PDOException $erro) {
    echo ($erro->getMessage());
}
