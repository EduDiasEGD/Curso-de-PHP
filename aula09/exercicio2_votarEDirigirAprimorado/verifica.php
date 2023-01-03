<!DOCTYPE html>
<html>
	<head>
		<?php
			$anonasc = isset($_GET["anonasc"])?$_GET["anonasc"]:"0";
			$idade = date("Y") - $anonasc;
		?>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../_css/estilo.css"/>
		<title></title>
	</head>
	<body>
	<div>
		<?php
			echo "<h4>Exercício 2 - Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir com mais condições</h4>";
			if ($idade <= 15){
				$votar = "NÃO PODE VOTAR";
				$dirigir = "NÃO PODE DIRIGIR";
			}elseif ($idade>=16 && $idade<18){
				$votar = "O VOTO É OPCIONAL";
				$dirigir = "NÃO PODE DIRIGIR";
			}elseif ($idade>=18 && $idade<=64){
				$votar = "PODE VOTAR";
				$dirigir = "PODE DIRIGIR";
			}else{
				$votar = "O VOTO É OPCIONAL";
				$dirigir = "PODE DIRIGIR";
			}
			echo "A pessoa que nasceu em $anonasc tem $idade anos, $votar e $dirigir";
		?>
		<a href="form.html"><br/><br/>Voltar</a>
		
	</div>	
	</body>
</html>