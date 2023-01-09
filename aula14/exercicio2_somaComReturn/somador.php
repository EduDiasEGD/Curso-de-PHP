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
			echo "<h4>Exercício 2 - Criar um função que retorne a soma entre dois valores numéricos inteiros</h4>";
			
			function somador ($a, $b){
				$s = $a+$b;
				return $s;
			}
			
			
			for($i=1; $i<3; $i++){
				$n = "num".$i;
				$$n = isset($_GET["$n"])?$_GET["$n"]:0;
			}
			
			$result = somador($num1, $num2);
			echo "<span class='foco'>$num1</span> + <span class='foco'>$num2</span> = <span class='foco'>$result</span>";
		?>
		<br/><br/><a href="form.php" class="botao">Voltar</a>
	</div>	
	</body>
</html>