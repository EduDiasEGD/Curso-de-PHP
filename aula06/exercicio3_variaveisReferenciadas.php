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
			echo "<h2>Exercício 3 - Praticar o uso de variáveis referenciadas<h2/><br/>";
			$a = 10;
			$b = &$a;
			$b += 20;
			
			echo $a;
			echo "<br/>$b";
			
			$a++;
			echo "<br/>A é $a e B é $b";
			
		?>
		
	</div>	
	</body>
</html>