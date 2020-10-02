<?php
    include 'conecta.php';
    include 'restrita.php';

    $data_atual = $_POST['data'];
    $consulta = $conexao -> prepare("
    INSERT INTO nota_fiscal (data)
    VALUES ('$data_atual')
    ");
    $consulta -> execute();
    header('Location: seleciona_ultima_nf.php');
?>