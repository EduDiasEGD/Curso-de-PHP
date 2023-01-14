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
			$vetor[1] = "Pão";
			$vetor[2] = "na";
			$vetor[3] = "Chapa";
			$vetor[4] = "Delicioso";
			$juntar = implode("-", $vetor);
			echo "$juntar";
		?>
	</div>	
	</body>
</html>