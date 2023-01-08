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
			echo "<h4>Exercício 1 - Praticar o uso da estrutura de repetição FOR</h4>";
			
			echo "<span class='foco'>Pulando de 1 em 1<br/></span>";
			for($i=1; $i<=10; $i++){
				echo "$i ";
			}
			echo "<br/>";
			
			for($i=10; $i >=1; $i--){
				echo "$i ";
			}
			echo "<br/><br/>";
			echo "<span class='foco'>Pulando de 2 em 2</span><br/>";
			for($i=0; $i<=10; $i+=2){
				echo "$i ";
			}
			echo "<br/>";
			for($i=10; $i>=0; $i-=2){
				echo "$i ";
			}
		?>
		
	</div>	
	</body>
</html>