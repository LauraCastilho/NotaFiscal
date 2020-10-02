<?php
    include 'conecta.php';
    include 'restrita.php';

    $consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
    $consulta = $conexao->query($consulta);
    $linha = $consulta->fetch_assoc();
    $ultimo = $linha['ultima'];
    $_SESSION['nf'] = $ultimo;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Inserir Produtos</title>
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
						Inserir Produtos
					</span>
				</div>

                <form action="insere_item.php?nf='<?php echo $ultimo; ?>'" method="post" class="login100-form validate-form">
					
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Nota Fiscal</span>
						<input type="text" class="input100" name="nf" value="<?php echo $ultimo; ?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Produto</span>
                        <select name="produto_opcao" id="produto_opcao" class="input100">
                            <?php
                                $consulta = "SELECT * FROM produtos";
                                foreach ($conexao -> query($consulta) as $linha){
                            ?>
                            <option value="<?php echo $linha['id'];?>"><?php echo $linha['nome'];?></option>
                            <?php
                                }        
                            ?>
						</select>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate = "Insira a Quantidade">
						<span class="label-input100">Quantidade</span>
						<input type="number" class="input100" name="qtde">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Adicionar
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