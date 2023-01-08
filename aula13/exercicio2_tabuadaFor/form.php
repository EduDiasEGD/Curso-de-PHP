<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<title></title>
	</head>
	<body>
	<div>
		<h4>Exercício 2 - Exibir a tabuada de um número escolhido pelo usuário, de 1 até 10 utilizando o FOR</h4>
		
		<form method="get" action="tabuada.php">
			Número: <select name="num">
				<?php
					for($i=0; $i<=10; $i++){
						echo "<option>$i</option>";
					}
				?>
			</select>
			<br/><br/><input type="submit" value="Calcular" class="botao"/>
		</form>
			
		
		
	</div>	
	</body>
</html>