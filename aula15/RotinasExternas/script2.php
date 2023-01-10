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
			echo "<h4>Testando rotinas externas (Script 2)</h4>";
			include_once "funcoes.php";
			
			echo "4 - 9 = ".sub(4,9);
			
		
			echo "<br/>4 - 10 = ".sub(4,10);
		?>
		
	</div>	
	</body>
</html>