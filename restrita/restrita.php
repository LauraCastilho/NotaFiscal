<?php
    session_start();
    if(
        (!isset($_SESSION['Id'])==true)&&
        (!isset($_SESSION['Usuario'])==true)&&
        (!isset($_SESSION['Email'])==true)&&
        (!isset($_SESSION['Senha'])==true)
        ){
            unset($_SESSION['Id']);
            unset($_SESSION['Usuario']);
            unset($_SESSION['Email']);
            unset($_SESSION['Senha']);
            header('Location: ../index.html');
        }
        include 'conecta.php';
?>
