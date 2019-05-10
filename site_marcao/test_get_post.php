<?php

if(isset($_POST['nome'])){
    // evitar sql injection
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    echo 'Nome: ' . $nome . '<br>';
    echo 'Email: ' . $email;
}

if(isset($_GET)){
    var_dump($_GET);
}