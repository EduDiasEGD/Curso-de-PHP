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
			echo "<h4>Exercício 3 - Criar um contador personalizável</h4>";
			$i = isset($_GET["inicio"])?$_GET["inicio"]:0;
			$f = isset($_GET["fim"])?$_GET["fim"]:10;
			$in = isset($_GET["incremento"])?$_GET["incremento"]:1;
			
			if($i < $f){
				while($i <= $f){
					echo $i." ";
					$i += $in;
				}	
			}else{
				while($i >= $f){
					echo $i." ";
					$i -= $in;
				}
			}
		?>
		<br/><br/>
		<a href="infosContador.html" class="botao">Voltar</a>
	</div>	
	</body>
</html>