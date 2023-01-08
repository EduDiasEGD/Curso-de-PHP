<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<title></title>
	<body>
	<div>
		<?php
			echo "<h4>Exercício 1 - Mostrar uma contagem progressiva de 1 até 10</h4>";
			
			$cont = 1;
			echo "Crescente: ";
			while($cont<=10){
				echo $cont ." ";
				$cont++;
			}
			
			$cont = 10;
			echo "<br/>Descrescente: ";
			while($cont>=1){
				echo $cont." ";
				$cont--;
			}
				
		?>
	</div>	
	</body>
</html>