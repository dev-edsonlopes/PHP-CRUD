<?php
session_start();
require_once '../db/index.php';
require_once '../pages/add.php';

if(isset($_POST['btn-cadastrar'])) {
    // Obtem os dados preenchido no campo e trata os dados.
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    // Comando SQL para INSERIR DADOS NA TABELA
    $sql = "INSERT INTO clientes
    VALUES
        (DEFAULT, '$nome',  '$sobrenome',  '$email', $idade);";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Usuário cadastrado com sucesso!";

        //Depois que finzalizar ele leva para você pra essa rota
        header('Location: ../index.php');
    } else {
        $_SESSION['mensagem'] = "Erro ao cadastrar Usuário!";
        header('Location: ../index.php');
    }
}