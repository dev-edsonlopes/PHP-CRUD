<?php
session_start();
require_once '../db/index.php';

if(isset($_POST['btn-deletar'])) {
    
    $id = mysqli_escape_string($connect, $_POST['id']);


    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Usuário Apagado com sucesso!";
        header('Location: ../index.php');
    } else {
        $_SESSION['mensagem'] = "Erro ao Apagar Usuário!";
        header('Location: ../index.php');
    }
}