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
			$nomes[1] = "Eduardo";
			$nomes[2] = "Carlos";
			$nomes[3] = "Ana";
			
			echo "<br/><span class='foco'>print_r: </span>";
			print_r($nomes); //mostra o que tem nos índices
			echo "<br/><br/><span class='foco'>var_dump: </span>";
			var_dump($nomes); //mostra o que tem nos índices e mostra a qntd de caracteres
			echo "<br/><br/><span class='foco'>var_export: </span>";
			var_export($nomes); //mesma coisa do print_r só que com outra formatação
		?>
		
	</div>	
	</body>
</html>