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
			echo "<h4>Exercício 1 - Ler um valor do formulário HTML e mostrar sua raiz quadrada</h4>";
			$num = $_GET["numero"]; //recebendo o valor da caixa de texto do HTML e armazenando na variável
			echo "A raiz quadrada de $num é ".number_format(sqrt($num),2);
		
		?>
		<a href="form.html">Voltar</a>
	</div>	
	</body>
</html>