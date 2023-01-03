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
			$ano = $_GET["a"];
			echo "<h2>Exercício 2 - Mostrar qual foi o ano anterior ao ano atual (use 'a')<h2/><br/>";
			
			echo "Ano atual: " . $ano--;
			echo "<br/>Ano anterior: $ano";
		?>
		
	</div>	
	</body>
</html>