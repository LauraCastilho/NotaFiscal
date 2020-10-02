<?php
    include 'conecta.php';
    include 'restrita.php';
    
    echo "<br><hr>";
    session_start();

    $nf = $_SESSION['nf'];
    $total = $_GET['total'];

    echo "NF: ".$nf."<br>";
    echo "TOTAL: ".$total."<br>";

    $consulta = $conexao -> 
    prepare("UPDATE nota_fiscal
        SET valor_total = '$total'
        WHERE nf = '$nf'"
    ); 
    
    $consulta -> execute();

    header('Location: logout.php');
?>