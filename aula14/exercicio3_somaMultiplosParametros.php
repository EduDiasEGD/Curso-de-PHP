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
			echo "<h4>Exercício 3 - Realizar uma soma com múltiplos parâmetros</h4>";
			
			function soma (){
				$vetor = func_get_args(); //cria um vetor com os argumentos
				$tot = func_num_args(); //conta o total de argumentos
				$s = 0;
				for($i=0; $i<$tot; $i++){
					$s = $s + $vetor[$i];
				}
				return $s;
			}
			
			$resp = soma(1,2,3,4);
			echo "A soma é $resp";
		?>
		
	</div>	
	</body>
</html>