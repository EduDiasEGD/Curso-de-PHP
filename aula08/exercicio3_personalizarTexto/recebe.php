<!DOCTYPE html>
<html>
	<head>
		<?php
			echo "<h4>Exercício 3 - Permitir a personalização de um texto através de um formulário</h4>";
			
			$texto = isset($_GET["t"])?$_GET["t"]:"Texto não informado";
			$tam = isset($_GET["tam"])?$_GET["tam"]:"14pt";
			$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
		?>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<title></title>
		
		<style>
			span.texto{
				font-size: <?php echo $tam;?>;
				color: <?php echo $cor;?>;
			}	
		</style>
	</head>
	<body>
	<div>
		<?php
			echo "<span class='texto'>$texto</span>";
		?>
	</div>	
	</body>
</html>