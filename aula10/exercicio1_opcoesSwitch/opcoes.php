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
			echo "<h4>Exercício 1 - Ler um número e qual opção realizar: dobro, cubo ou raiz quadrada</h4>";
			$n = isset($_GET["num"])?$_GET["num"]:0;
			$op = isset($_GET["oper"])?$_GET["oper"]:1;
			
			switch($op){
				case 1:
					echo "O dobro de $n é ".($n * 2);
					break;
				case 2:
					echo "O cubo de $n é ".($n ** 3);
					break;
				case 3:
					echo "A raiz quadrada de $n é ". sqrt($n);		
			}

		?><br/>
		<a href="form.html" class="botao">Voltar</a>
	</div>	
	</body>
</html>