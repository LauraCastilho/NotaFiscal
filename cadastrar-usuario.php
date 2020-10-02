<?php
	include 'restrita/conecta.php';

	$Usuario = $_POST['Usuario'];
	$Email = $_POST['Email'];
	$Senha = $_POST['Senha'];

	$consulta = $conexao -> prepare("INSERT INTO usuario(Usuario,Email,Senha) 
	VALUES ('$Usuario','$Email','$Senha')");
	$consulta -> execute();

	header('Location: login.html');
?>