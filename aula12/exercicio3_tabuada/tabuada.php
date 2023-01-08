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
			echo "<h4>Exercício 3 - Exibir a tabuada de um número escolhido pelo usuário, de 1 até 10</h4>";
			$num = isset($_GET["num"])?$_GET["num"]:1;
			$mult = 1;
			
			do{
				echo "$num x $mult = ".($num*$mult)."<br/>";
				$mult++;
			}while($mult<=10);
		?>
		<br/><a href="numero.html" class="botao">Voltar</a>
	</div>	
	</body>
</html>