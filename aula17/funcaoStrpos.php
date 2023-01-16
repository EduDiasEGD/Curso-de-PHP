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
			echo "Testando a função <span class='foco'>strpos</span><br/><br/>";
			$frase = "Gosto de estudar PHP";
			$localiza = strpos($frase, "PHP");
			
			echo "$frase<br/>PHP começa na posição $localiza";
		?>
		
	</div>	
	</body>
</html>