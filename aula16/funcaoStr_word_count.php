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
			$frase = "Penso, logo existo";
			$qntPalavras = str_word_count($frase, 0);
			echo "Frase: <span class='foco'>$frase</span><br/>Tem...<br/>";
			echo "$qntPalavras palavras<br/>na ordem ";	
			print_r(str_word_count($frase, 1));
			echo "<br/> e seguindo a ordem do ";
			print_r(str_word_count($frase, 2));
			
		?>
	</div>	
	</body>
</html>