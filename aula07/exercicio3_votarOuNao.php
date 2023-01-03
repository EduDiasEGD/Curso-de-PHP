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
			echo "<h4>Exercício 3 - Mostrar se o eleitor é obrigado a votar ou não, baseado na sua idade (use 'an' para informar o ano de nascimento e 'at' para informar o ano atual) </h4>";
			$anonasc = $_GET["an"];
			$anoatual = $_GET["at"];
			$idade = $anoatual - $anonasc;
			$situacao = ($idade>=18 && $idade<=64)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
			echo "O eleitor tem $idade anos e o voto é $situacao";
			
		?>
		
	</div>	
	</body>
</html>