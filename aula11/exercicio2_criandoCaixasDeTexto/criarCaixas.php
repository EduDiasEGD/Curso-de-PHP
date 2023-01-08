<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<title></title>
	<body>
	<div>
		<h4>Exercício 2 - Criar de forma dinamica 5 caixas de texto de um formulário</h4>
			
		<form method="get" action="mostraNumeros.php">
			<?php
				$cont = 1;
				while($cont<=5){	
					echo "Valor $cont: <input type='number' name='numero$cont' min='0' max='100' value='numero$cont'/><br/>";
					$cont++;
				}
			?>
			<br/><input type="submit" value="Mostrar" class="botao"/>
		</form>		
	
	</div>	
	</body>
</html>