<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<title></title>
	</head>
	<body>
	<div>
		<h4>Exercício 1 - Criar um procedimento que some dois valores numéricos inteiros</h4>
		
		<form method="get" action="somador.php">
			<?php
				for($i=1; $i<3; $i++){
					echo "Número $i: <input type='number' name='num$i'/><br/>";
				}
			?>
			<br/><br/><input type="submit" value="Somar" class="botao"/>
		</form>
	</div>	
	</body>
</html>