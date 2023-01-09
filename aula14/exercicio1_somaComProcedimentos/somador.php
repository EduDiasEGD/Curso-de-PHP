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
			echo "<h4>Exercício 1 - Criar um procedimento que some dois valores numéricos inteiros</h4>";
			
			function somador ($a, $b){
				$s = $a+$b;
				echo "<span class='foco'>$a</span> + <span class='foco'>$b</span> = <span class='foco'>$s</span>";
			}
			
			
			for($i=1; $i<3; $i++){
				$n = "num".$i;
				$$n = isset($_GET["$n"])?$_GET["$n"]:0;
			}
			somador($num1, $num2);
			
		?>
	<br/><br/><a href="form.php" class="botao">Voltar</a>
	</div>	
	</body>
</html>