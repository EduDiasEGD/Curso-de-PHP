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
			echo "<h4>Exercício 3 - Ler um estado e mostrar qual região ele pertence</h4>";
			$estado = isset($_GET["estado"])?$_GET["estado"]:8;
			
			switch($estado){
				case 1:
					$regiao = "NORTE";
					break;
				case 2:
					$regiao = "NORDESTE";
					break;
				case 3:
					$regiao = "CENTRO-OESTE";
					break;
				case 4:
					$regiao = "SUDESTE";
					break;
				case 5:
					$regiao = "SUL";
					break;
				default:
					$regiao = "ESTADO NÃO INFORMADO";
				}
			echo "O estado selecionado fica localizado na região <span class='foco'>$regiao</span>";
		?>
		<br/><br/>
		<a href="estado.html" class="botao">Voltar</a>
	</div>	
	</body>
</html>