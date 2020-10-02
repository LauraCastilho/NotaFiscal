<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Ver Produtos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>       
    
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						PRODUTOS CADASTRADOS
					</span>
                </div>       
                <br> 
                <?php

                    include 'restrita.php';
                    include 'conecta.php';

                    $consulta = "SELECT * FROM produtos";

                    foreach($conexao -> query($consulta) as $linha){
                        echo "<br>"."Código do Produto: ".$linha['id']."<br>";
                        echo "Produto: ".$linha['nome']."<br>";
                        echo "<b>Valor Unitário: R$".$linha['preco']."</b><br>";
                        }
                    echo "<br>";

                ?>

                <div id="home-botoes">
                    <div class="container-login100-form-btn">
                        <p><a href="index.php" class="login100-form-btn">Voltar Início</a></p>
                        <br>
                        <br>
                        <br>
                        <p><a href="cadastrar_produtos.php" class="login100-form-btn">Cadastrar mais produtos</a></p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>
</body>
</html>


