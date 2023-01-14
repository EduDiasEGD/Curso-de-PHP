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
			$txt = "Essa função é legal porque da pra deixar textos formatados em 'colunas' basicamente";
			$corte = wordwrap($txt, 5, "<br/>\n", true);
			echo $corte;
		?>
		
	</div>	
	</body>
</html>