<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

// Conexão com o banco de dados
$connect = mysqli_connect($servername, $username, $password, $db_name);

// Caso a conexão não seja sucedida.
if(mysqli_connect_error()) {
    echo "Erro na Conexão".mysqli_connect_error();
}

