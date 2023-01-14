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
			$nome = "        João Paulo Junior    ";
			$tam = strlen($nome);
			echo "Nome informado: <span class='foco'>$nome</span><br/>Tamanho da String (com espaços): $tam<br/><br/>";
			
			$tiraEspacos = trim($nome);
			$tam = strlen($tiraEspacos);
			echo "Nome sem espaços dos lados tem $tam caracteres";
			
			$tiraEspacos = rtrim($nome);
			$tam = strlen($tiraEspacos);
			echo "<br/>Nome sem espaços da direita tem $tam caracteres";
			
			$tiraEspacos = ltrim($nome);
			$tam = strlen($tiraEspacos);
			echo "<br/>Nome sem espaços da esquerda tem $tam caracteres";
		?>
	</div>	
	</body>
</html>