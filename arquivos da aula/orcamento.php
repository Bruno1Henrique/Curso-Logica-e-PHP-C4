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
	<h1>ORÇAMENTO</h1><hr><br>

	<div class="conteudo">
		<?php

			echo "<h1>ORÇAMENTO</h1><br>";

			$data= $_POST['data'];
			/*echo "Data do Orçamento$data <br>";*/
			
			$garantia= $_POST['garantia'];
			/*echo "Garantia $garantia meses <br>";*/

			$servico= $_POST['servico'];
			/*echo "Tipo de serviço: $servico <br>";*/

			$aparelho= $_POST['aparelho'];
			/*echo "Descrição do aparelho: $aparelho <br>";*/

			$cliente= $_POST['cliente'];
			/*echo "Nome do cliente: $cliente";*/

			echo "Data do Orçamento <b>$data</b> Validade da Garantia após a entrega do serviço <b>$garantia meses</b><br>";
			echo "Serviço a ser executado: <b>$servico</b><br>";
			echo "Aparelho para Manutenção: <b>$aparelho</b><br>";
			switch ($servico) {
				case 'Formatação':
					echo "<b>Valor R$ 70,00</b><br>";
					break;
				case 'Troca de Peças':
					echo "<b>Valor R$ 100,00</b><br>";
					break;
				case 'Instalação de Apps';
					echo '<b>Valor R$ 20,00</b><br>';
					break; 
				default:
					echo "<b>Valor R$ 120,00</b><br>";
					break;
			}
		?>
		<br><br>

		<p>Assinatura:________________________________________________</p><br>
		<p>Data:___/___/___</p><br>
		<p>Ao assinar você concorda com todos os termos de serviço e garantia.</p><br>
		<form>
			<input type="button" value="Imprimir Orçamento" onclick="window.print()" >
		</form>
		


		<a href="index.html"> << voltar</a>		
		
	</div>

	<footer>
		<h3>Todos os direitos reservados - Desenvolvido por TecTreinamentos</h3>
	</footer>




</body>
</html>