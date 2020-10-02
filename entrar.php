<?php
	session_start();

	include 'restrita/conecta.php';
	$Usuario = $_POST['Usuario'];
	$Senha = $_POST['Senha'];

	$consulta = "SELECT * FROM usuario WHERE Usuario ='$Usuario' AND Senha='$Senha'";
	$resultado = $conexao->query($consulta);

	$registros = $resultado->num_rows;
	$resultado_usuario = mysqli_fetch_assoc($resultado);

	if ($registros == 1) {
		$_SESSION['Id'] = $resultado_usuario['Id'];
		$_SESSION['Usuario'] = $resultado_usuario['Usuario'];
		$_SESSION['Email'] = $resultado_usuario['Email'];
		$_SESSION['Senha'] = $resultado_usuario['Senha'];
		header('Location: restrita/index.php');
	} else {
		header('Location: login.html');
	}
?>