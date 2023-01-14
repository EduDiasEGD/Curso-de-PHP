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
			echo "<h4>Testando a função ORD (use 'letra' na url)</h4>";
			$letra = isset($_GET["letra"])?$_GET["letra"]:"a";
			$cod = ord($letra);
			echo "<br/><br/>A letra <span class='foco'>$letra</span> corresponde ao código <span class='foco'>$cod</span>";
		?>
	</div>	
	</body>
</html>