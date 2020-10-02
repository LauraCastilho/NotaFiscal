<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "projeto";

    $conexao = new MySQLi("$host","$user","$password","$database");

    if($conexao -> connect_error){
        echo "Erro na conexão com o Banco de Dados";
    }

    else{
    }
?>