<?php

include('../Control/controleSession.php');

?>

<html>
	<head>
	<meta charset="UTF-8"/>
	<title>Estoque Geral TI</title>
	<link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
	<link href = "https: //fonts.googleapis.com/css2? family = Teko: wght @ 700 & display = swap "rel =" stylesheet ">
    <link rel="stylesheet" href="../css/teamplateSelectEstoqueTi.css" >
    <link rel="stylesheet" href="../css/normalize.css" >

	</head>

	<body>

	<header class="cabecalho">
		<h1>SELECIONE A SUA OPÇÃO</h1>
	</header>

	<main class="opcoes">
		<article class="opcao" id="fadeImg2">
			<a href="../View/tiEstoqueSmarts"><img src="../imagem/smartphones.png"></a>
			<h2>Estoque Smartphones</h2>
		</article>

        <article class="opcao" id="fadeImg">
			<a href="../view/tiEstoqueGeral.php"><img src="../imagem/transformacao.png"></a>
			<h2>Estoque Geral</h2>
		</article>

        <article class="opcao" id="fadeImg2">
			<a href="#"><img src="../imagem/dashboard.png"></a>
			<h2>Dashboard</h2>
		</article>
	</main>

    <footer class="rodape">
			<a href="../View/ti">VOLTAR</a>
		</footer>

	</body>
</html>