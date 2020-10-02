<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Ver Notas</title>
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
						O que você deseja fazer?
					</span>
                </div>       
                <br>                  
                <?php
                    include 'restrita.php';
                    include 'conecta.php';

                    $consulta = "SELECT * FROM nota_fiscal";

                    foreach($conexao -> query($consulta) as $linha){
                        echo "<h3>Número da Nota: ".$linha['nf']."</h3><br>";
                        echo "Data: ".$linha['data']."<br>";

                        $nota = $linha['nf'];
                        $consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";
                        foreach($conexao -> query($consulta2) as $linha2){
                            echo "<br>";
                            echo "Código do Produto: ".$linha2['cod_produto']."<br>";
                            $codigo = $linha2['cod_produto'];
                            $consulta3 = "SELECT * FROM produtos WHERE id = '$codigo'";
                            foreach($conexao -> query($consulta3) as $linha3){
                                echo "Nome: ".$linha3['nome']. "<br>";
                                echo "Valor Unitário: R$".$linha3['preco']. "<br>";
                            }
                        echo "Quantidade: ".$linha2['qtde']."<br>";
                        echo "Sub Total: R$".$linha2['subtotal']. "<br>";
                        }
                        echo "<b>Valor Total: R$".$linha['valor_total']."</b>";
                        echo "<hr>";
                    }

                ?>
                <div id="home-botoes">
                    <div class="container-login100-form-btn">
                        <p><a href="index.php" class="login100-form-btn">Voltar Início</a></p>
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


