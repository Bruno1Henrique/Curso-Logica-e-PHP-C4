<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>.::Programação Web::.</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="topo">
		<img src="img/topo_aula.png" alt="Topo">
	</div>
	<br><br><br><br>
	<h1>TECTREINAMENTOS - TRATAMENTO DE DADOS COM PHP</h1><hr><br>

	<div class="pesquisa">
		<h6>Prof. Wagner Cardoso</h6>
	</div>

	<div class="conteudo">
	
	<?php 
		$pesquisa= $_GET["pesquisa"];
		switch ($pesquisa) {
			case 'serviços':
				echo "Serviços de Manutenção de computadores, celulares e rede<br>
					Valor minimo cobrado: R$ 120,00";
				break;
			case 'produtos':
				echo "Temos diversos produtos na área de informática, clique no link<br>
				acima para verificar";
				break;
			default:
				echo "Não encontramos nada em nosso site, pesquise novamente";
				break;
		}

	?>
		<br><br>
		<a href="index.html"> << voltar</a>		
		
	</div>

	<div class="rodape">
		<h2>TECTREINAMENTOS - PROGRAMAÇÃO WEB COM PHP</h2><br>
		<h2>PÁGINA DE TRATAMENTO DE DADOS</h2>
	</div>
	<footer>
		<h3>Todos os direitos reservados - Desenvolvido por TecTreinamentos</h3>
	</footer>




</body>
</html>