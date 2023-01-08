<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<title></title>
	<body>
	<div>
		<?php
			echo "<h4>Exercício 2 - Criar de forma dinamica 5 caixas de texto de um formulário</h4>";
			
			$cont = 1;
			while($cont<=5){
				$n = "num".$cont;
				$url = "numero".$cont;
				$$n = isset($_GET["url"])?$_GET["url"]:0;
				
				$cont++;
			}
			echo "$num1, $num2, $num3, $num4, $num5";
		
		?>
		<br/><br/>
		<a href="javascript:history.go(-1)" class="botao">Voltar<a/>
	</div>	
	</body>
</html>