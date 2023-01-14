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
			$conta = -300.5;
			$divida = 4000.2;
			$sit = "devendo";
			$pagar = $divida - $conta;
			
			printf("Você deve R$ %.2f e tem R$ %.2f na conta", $divida, $conta);
			printf("<br/>Situação atual: <span class='foco'>%s</span>", $sit);
			printf("<br/>Para ficar positivado, consiga R$%.2f", $pagar);
		?>
		
	</div>	
	</body>
</html>