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
			$preco = $_GET["p"];
			echo "<h2>Exercício 1 - Aplicar 10% de desconto ao preço de um produto (use 'p')<h2/>";
			echo "O preço sem desconto é R$". number_format($preco,2,",",".");
			$preco -= $preco*10/100;
			echo "<br/>O preço com desconto de 10% é R$". number_format($preco,2,",",".");
			
			
		?>
		
	</div>	
	</body>
</html>