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
			echo "<h4>Exercício 2 - Mostrar a situação de um aluno, de acordo sua média obtida (use n1 e n2 para as notas)</h4>";
			
			$nota1 = $_GET["n1"];
			$nota2 = $_GET["n2"];
			echo "Notas digitadas: $nota1 e $nota2";
			$media = ($nota1 + $nota2)/2;
			
			$situacao = $media>=6?"APROVADO":"REPROVADO";
			echo "<br/>Média do aluno: ".$media;
			echo "<br/>Situação do aluno: ".$situacao;
			
		?>
		
	</div>	
	</body>
</html>