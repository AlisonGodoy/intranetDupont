<?php

include('../Control/controleSession.php');

?>

<html>
	<head>
	<meta charset="UTF-8"/>
	<title>Ambiente Segurança TI</title>
	<link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
	<link href = "https: //fonts.googleapis.com/css2? family = Teko: wght @ 700 & display = swap "rel =" stylesheet ">
    <link rel="stylesheet" href="../css/teamplateTiSeguranca.css" >
    <link rel="stylesheet" href="../css/normalize.css" >

	</head>

	<body>

	<header class="cabecalho">
		<h1>SELECIONE A SUA OPÇÃO</h1>
	</header>

	<main class="opcoes">
		<article class="opcao" id="fadeImg2">
			<a href="https://gravityzone.bitdefender.com/"><img src="../imagem/bitdefender.png"></a>
			<h2>Painel BitDefender</h2>
		</article>

        <article class="opcao" id="fadeImg">
			<a href="https://us-cloud.acronis.com/ui/#/dashboards"><img src="../imagem/acronis.png"></a>
			<h2>Painel Acronis BKP Nuvem</h2>
		</article>

        <article class="opcao" id="fadeImg2">
			<a href="http://192.168.2.1:7445/"><img src="../imagem/pfsense.webp"></a>
			<h2>Relatório Acessos Squid</h2>
		</article>

		<article class="opcao" id="fadeImg2">
			<a href="http://192.168.2.1/status_graph.php"><img src="../imagem/pfsense.webp"></a>
			<h2>Dashboard Tráfego de Rede</h2>
		</article>
	</main>

    <footer class="rodape">
			<a href="../View/ti">VOLTAR</a>
		</footer>

	</body>
</html>