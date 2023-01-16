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
			$frase = "gustavo";
			$novaFrase = strrev($frase);
			echo "Frase normal: $frase<br/>Frase reversa: $novaFrase";
			
			echo "<br/><br/>Fazendo a frase reversa usando FOR: ";
			$vetor = str_split($frase);
			$tamanho = strlen($frase);
			for($i=$tamanho-1; $i>-1; $i--){
				echo $vetor[$i];
				echo "";
			}
		?>
		
	</div>	
	</body>
</html>