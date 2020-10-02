<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Final Nota</title>
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
                <?php
                    include 'restrita.php'; 
                    include 'conecta.php';
                    echo "<br>";
                    $nf = $_SESSION['nf'];

                    $consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf' ";

                    echo "<h1>Nota Fiscal: " . $nf ."</h1><br>";
                    $total=0;

                    foreach ($conexao -> query($consulta) as $linha){
                        echo "Código Produto: " .$linha['cod_produto'] ."<br>";
                        echo "Quantidade: " .$linha['qtde'] ."<br>";
                        echo "Subtotal: R$" .$linha['subtotal'] ."<br><br>";

                        $total = $total + $linha['subtotal'];
                    }
                    echo "<b>TOTAL DA NOTA R$ " . $total."</b>";
                ?>
                <br>
                <br>
                <br>

                <div id="home-botoes">
                    <div class="container-login100-form-btn">
                        <p><a href="seleciona_ultima_nf.php" class="login100-form-btn">INSERIR OUTRO PRODUTO</a></p>
                    </div>
                    <br>
                    <div class="container-login100-form-btn">
                        <p><a href="finalizar.php?total=<?php echo $total;?>" class="login100-form-btn">FINALIZAR NOTA FISCAL</a></p>
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