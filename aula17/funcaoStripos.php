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
			echo "Testando a função <span class='foco'>stripos</span><br/><br/>";
			$frase = "Amo de estudar PHP";
			$localiza = stripos($frase, "php");
			
			echo "$frase<br/>PHP começa na posição $localiza";
		?>
		
	</div>	
	</body>
</html>