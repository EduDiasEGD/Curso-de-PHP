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
			echo "<h4>Exercício 1 - Criar uum procedimento que use a passagem de parâmetros por referência</h4>";
			
			function soma (&$x){
				$x += 10;
				echo "O valor de X é $x<br/>";
			}
			$a = 5;
			echo "O valor de A é $a<br/>";
			soma($a);
			echo "O valor de A depois da função é $a";
		?>
		
	</div>	
	</body>
</html>