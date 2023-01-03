<!DOCTYPE html>
<html>
	<head>
		<?php
			$anonasc = isset($_GET["anonasc"])?$_GET["anonasc"]:"0";
		?>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../_css/estilo.css"/>
		<title></title>
	</head>
	<body>
	<div>
		<?php
			echo "<h4>Exercício 1 - Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir</h4>";
			$idade = date("Y")-$anonasc;
			if($idade>=18){
				echo "A pessoa tem $idade anos e PODE votar e dirigir";
			}else{
				echo "A pessoa tem $idade anos e NÃO PODE votar e dirigir";
			}
		
		?>
		<a href="form.html"><br/><br/>Voltar</a>
	</div>	
	</body>
</html>