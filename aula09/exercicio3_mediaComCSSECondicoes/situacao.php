<!DOCTYPE html>
<html>
	<head>
		<style>
			span{
				font-weight: bold;
			}
			button {
				background-color: #0019a7;
				color: #ffffff;
				font-size: 12pt;
				padding: 5px;
				padding-left: 10px;
				padding-right: 10px;
				border-radius: 10px;
				
			}
			span.vermelho{
				color: #bd0000;
			}
			span.laranja{
				color: #d94d00;
			}
			span.verde{
				color: #06c304;
			}
			span.azul{
				color: #0083ce;
			}
		</style>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../_css/estilo.css"/>
		<title></title>
	</head>
	<body>
	<div>
		<?php
			echo "<h4>Exercício 3 - Calcular a média e informar a situação do aluno (utulize CSS e estruturas condicionais)</h4>";
			#0~4 = reprovado 	5~7 = recuperaçao  8~+=aprovado
			$n1 = isset($_GET["nota1"])?$_GET["nota1"]:"0";
			$n2 = isset($_GET["nota2"])?$_GET["nota2"]:"0";
			$media = ($n1+$n2)/2;
			
			if($n1>=6){
				$n1 = "<span class='azul'>$n1</span>";
			}else{
				$n1 = "<span class='vermelho'>$n1</span>";
			}
			
			if($n2>=6){
				$n2 = "<span class='azul'>$n2</span>";
			}else{
				$n2 = "<span class='vermelho'>$n2</span>";
			}


			if($media<=4){
				$situacao = "<span class='vermelho'>REPROVADO</span>";
			}elseif($media>=5 && $media<=7){
				$situacao = "<span class='laranja'>RECUPERAÇÃO</span>";
			}else{
				$situacao = "<span class='verde'>APROVADO</span>";
			}
			
			echo "A média entre $n1 e $n2 é igual a <span>$media</span>";
			echo "<br/>Situação do aluno: $situacao";
		?>
		<a href="notas.html"><br/><br/><button>Voltar</button></a>
	</div>	
	</body>
</html>