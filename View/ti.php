<?php

include('../Control/controleSession.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
		<link rel = "preconnect" href = "https://fonts.googleapis.com">
		<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
		<link href = "https: //fonts.googleapis.com/css2? family = Teko: wght @ 700 & display = swap "rel =" stylesheet ">
		<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../css/teamplateTi.css" >
    	<link rel="stylesheet" href="../css/normalize.css" >
		<title>Setor TI</title>
		<link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">
	</head>

	<body>
		<header id="topo">
			<h1>CONTROLE TI</h1>
			<p>GRUPO DUPONT</p>
		</header>

		<section id="serviços">
			<h2>SELECIONE A OPÇÃO</h2>

			<a href="../View/tiSelectEstoque"><div id="estoqueTi" class="fadeImg">
				<img src="../imagem/estoqueTi.png" alt="EstoqueTI">
				<h3>Estoque TI</h3>
			</div></a>

			<a href="../View/tiSuporte"><div id="suporteTi" class="fadeImg2">
				<img src="../imagem/suporteTi.png" alt="Suporte">
				<h3>Suporte</h3>
			</div></a>

			<a href="https://app.powerbi.com/view?r=eyJrIjoiYjMwZDU5NGEtN2M5ZS00Y2QyLWFkMmEtMDUzNmI0MzliMzhlIiwidCI6IjIwMmU1YmIyLTZjZGUtNDlmZi04N2ViLTQ1ODhjYWIxMjI4ZSJ9"><div id="manutencaoTi" class="fadeImg3">
				<img src="../imagem/manutencaoTi.png" alt="Att/Manutenção">
				<h3>Atualização/Manutenção</h3>
			</div></a>

			<a href="../View/tiSeguranca"><div id="segurancaTi" class="fadeImg3">
				<img src="../imagem/segurancaTi.png" alt="Segurança">
			 	<h3>Segurança</h3>
			</div></a>

			<a href="../View/tiPerformance.php"><div id="performanceTi" class="fadeImg2">
			 	<img src="../imagem/performanceTi.png" alt="Performance">
			 	<h3>Performance/Controle</h3>
			</div></a>

			<a href="https://app.powerbi.com/view?r=eyJrIjoiNDdmZjM1OTUtNWFiNS00NDgzLThiNmItODYxZGFkZjlhZDZjIiwidCI6IjIwMmU1YmIyLTZjZGUtNDlmZi04N2ViLTQ1ODhjYWIxMjI4ZSJ9"><div id="orcamentosTi" class="fadeImg">
			 	<img src="../imagem/orcamentosTi.png" alt="Orçamento">
			 	<h3>Orçamentos/Custos</h3>
			</div></a>
		</section>
		</body>
		<footer>
			<a href="../View/setores">VOLTAR</a>
		</footer>	

</html>