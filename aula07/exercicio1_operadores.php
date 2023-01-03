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
			echo "<h4>Exercício 1 - Permitir que o usuário escolha entre multiplicar e somar dois números (use x e y para números e op [S/M])</h4><br/>";
			
			$n1 = $_GET["x"];
			$n2 = $_GET["y"];
			$cond = $_GET["op"];
			echo "Os números escolidos foram $n1 e $n2";
			
			$res = $cond=="S"?"A soma entre esses números é ".($n1+$n2):"A multiplicação entre esses números é ".($n1*$n2);
			echo "<br/>".$res;
			
			
		?>
		
	</div>	
	</body>
</html>