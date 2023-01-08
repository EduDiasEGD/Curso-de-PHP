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
			echo "<h4>Exercício 3 - Verifique se o número digitado pelo usuário é primo</h4>";
			$num = isset($_GET["num"])?$_GET["num"]:1;
			$valoresMult = 1;
			$totMult = 0;
			$resp = "";
			
			echo "O número $num é primo ou não?<br/><br/>";
			echo "Valores múltiplos: ";
			
			for($i=1; $i<=$num ; $i++){
				if(($num%$i)==0){
					echo "<span class='foco'>$i </span>";
					$totMult++;
				}else{
					echo "";
				}
			}
			echo "<br/>Total de múltiplos: <span class='foco'>$totMult</span>";
			echo "<br/>Resultado: ";
			if($totMult<=2){
				echo "<span class='foco'>É PRIMO</span>";
			}else{
				echo "<span class='foco'>NÃO É PRIMO</span>";
			}
		?>
		<br/><br/><a href="form.html" class="botao">Voltar</a>

		
	</div>	
	</body>
</html>