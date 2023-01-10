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
			echo "<h4>Testando rotinas externas (Script 1)</h4>";
			
			require "funcoes.php";
			
			echo "3 + 9 = ".soma(3,9);
			
			require_once "funcoes.php";
			
			echo "<br/>54 + 23 = ".soma(54,23);
		?>
		
	</div>	
	</body>
</html>