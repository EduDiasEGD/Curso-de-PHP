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
			echo "<h4>Testando a função CHR (use 'cod' na url)</h4>";
			$cod = isset($_GET["cod"])?$_GET["cod"]:100;
			$letra = chr($cod);
			echo "<br/><br/>O código <span class='foco'>$cod</span> corresponde à letra <span class='foco'>$letra</span>";
		?>
	</div>	
	</body>
</html>