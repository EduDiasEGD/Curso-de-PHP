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
			echo "<h4>Exercício 2 - Ler o dia da semana (1-7) e mostrar se precisa ou não ir pra escola</h4>";
			$dia = isset($_GET["dia"])?$_GET["dia"]:0;
			
			switch($dia){
				case 1:
				case 2:
				case 3:
				case 4:
				case 5:
					echo "Neste dia você <span class='foco'>Precisa</span> ir pra escola.";
					break;
				case 6:
				case 7:
					echo "Neste dia você <span class='foco'>Não Precisa</span> ir pra escola. É dia de relaxar!";
					break;
				default:
					echo "Dia da semana inválido";
			}
			
		?>
		<br/><br/>
		<a href="dia.html" class="botao">Voltar</a>
	</div>	
	</body>
</html>