<?php
    include 'conecta.php';
    include 'restrita.php';

    $Nome = $_POST['nome-produto'];
    $Preco = $_POST['preco-produto'];

    $consulta = $conexao -> prepare("INSERT INTO produtos(nome,preco) 
    VALUES ('$Nome','$Preco')");
    $consulta -> execute();
    header('Location: ver_produtos.php');
?>