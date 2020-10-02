<?php
    session_start();
    unset(
        $_SESSION['Id'],
        $_SESSION['Usuario'],
        $_SESSION['Email'],
        $_SESSION['Senha']
    );
    header('Location: ../index.html');
?>