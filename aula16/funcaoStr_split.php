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
			$nome = "Pedro Alvares Cabral";
			echo "O nome $nome separado por letras num vetor fica assim<br/><br/>";
			$separa = str_split($nome);
			print_r($separa);
		?>
	</div>	
	</body>
</html>