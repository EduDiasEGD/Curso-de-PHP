<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<title></title>
	</head>
	<body>
	<div>
		<?php
			echo "<h4>Exercício 2 - Calcular fatorial de um número com Do While</h4>";
			$fatorial = isset($_GET["num"])?$_GET["num"]:1;
			$cont = $fatorial;
			$fat = 1;
			do{
				$fat = $fat * $cont;
				$cont--;
				
			}while($cont>=1);
			echo "$fatorial != $fat";
		?>
		<br></br>
		<a href="numFatorial.html" class="botao">Voltar</a>
	</div>	
	</body>
</html>