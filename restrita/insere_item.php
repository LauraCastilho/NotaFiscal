<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Itens</title>
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
    <?php

    include 'conecta.php';
    include 'restrita.php';
    echo "<br>";

    $nf = $_SESSION['nf'];
    $id_prod = $_POST['produto_opcao'];
    $qtde_prod = $_POST['qtde'];

    $consulta = "SELECT preco, nome FROM produtos WHERE id = '$id_prod'";
    $consulta = $conexao -> query($consulta);
    $linha = $consulta->fetch_assoc();
    $preco = $linha['preco'];
    $nome = $linha['nome'];

    $subtotal = $preco * $qtde_prod;
    ?>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Cadastrar
					</span>
				</div>

                <form action="insere_item_nf.php" method="POST" class="login100-form validate-form">

                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Código do Produto</span>
                        <input type="text" class="input100" name="id_prod" value="<?php echo $id_prod; ?>" readonly="readonly">
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Produto</span>
                        <input type="text" class="input100" name="nome_prod" value="<?php echo $nome; ?>" readonly="readonly">
						<span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Valor Unitário</span>
                        <input type="text" name="valor_unit" class="input100" value="<?php echo $preco; ?>" readonly="readonly">
						<span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Quantidade</span>
                        <input type="text" name="qtde" class="input100" value="<?php echo $qtde_prod; ?>" readonly="readonly">
						<span class="focus-input100"></span>
                    </div>

                     <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Subtotal</span>
                        <input type="text" class="input100"  name="subtotal" value="<?php echo $subtotal; ?>" readonly="readonly">
						<span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Adicionar Produto
						</button>
					</div>

                </form>
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