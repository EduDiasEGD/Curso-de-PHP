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
			echo "<h4>Exercício 1 - Mostrar uma contagem progressiva de 1 até 10 com Do While</h4>";
			
			$cont = 1;
			do{
				echo $cont."<br/>";
				$cont++;
			}while($cont <=10);
		?>		
	</div>	
	</body>
</html>