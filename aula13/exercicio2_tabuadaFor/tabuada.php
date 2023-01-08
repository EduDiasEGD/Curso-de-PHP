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
			echo "<h4>Exercício 2 - Exibir a tabuada de um número escolhido pelo usuário, de 1 até 10 utilizando o FOR</h4>";
			$num = isset($_GET["num"])?$_GET["num"]:0;
			
			for($mult=1; $mult<=10; $mult++){
				echo "$num x $mult = <span class='foco'>".($num*$mult)."</span><br/>";
			}			
		?>
		<br/><a href="form.php" class="botao">Voltar</a>
	</div>	
	</body>
</html>