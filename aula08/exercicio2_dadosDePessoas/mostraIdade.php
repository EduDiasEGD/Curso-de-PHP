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
			echo "<h4>Exercício 2 - Ler nome, ano de nascimento e sexo de uma pessoa e mostrar sua idade atual</h4>";
			
			$nome = isset($_GET["nome"])?$_GET["nome"]:"Nome não informado";
			$anonasc = isset($_GET["anonasc"])?$_GET["anonasc"]:"0";
			$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"sexo não informado";
			
			echo "$nome nasceu em $anonasc. Neste ano de " .date("Y"). " tem ".(2022-$anonasc)." anos e é ".$sexo;
			
		?>
		<a href="index.html"><br/>Voltar</a>
	</div>	
	</body>
</html>