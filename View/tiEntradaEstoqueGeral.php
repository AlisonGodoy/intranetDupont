<?php
include('../Control/controleSession.php');
?>

<html>
	<head>
		<meta lang="pt-BR"/>
		<meta charset="UTF-8"/>
		<title>Controle TI</title>
		<link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">
    	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
		<link href = "https: //fonts.googleapis.com/css2? family = Teko: wght @ 700 & display = swap "rel =" stylesheet ">
    	<link rel="stylesheet" href="../css/teamplateTiEntradaEstoqueGeral.css" >
    	<link rel="stylesheet" href="../css/normalize.css" >
	</head>
	<body>
    	<nav class="cabecalho">
      		<ul class="menu">
        		<li><a href="tiEstoqueGeral">Estoque</a></li>
        		<li id="botTiEntrada"><a href="tiEntrada">Entrada</a></li>
        		<li><a href="tiBaixaEstoqueGeral">Baixa</a></li>
        		<li><a href="tiCadastro">Cadastro de Equipamento</a></li>
        		<li id="botTiEstoqueZerado"><a href="tiEstoqueZerado">Estoque Zerado</a></li>
        		<li><a href="tiSelectEstoque.php">Voltar</a></li>
      		</ul>
    	</nav>

    	<div class="titulo">
      		<h1>Entrada de Equipamento</h1>
		</div>
		<div class="divTabela">
			<table class="table table-dark table-striped">
				<thead class="tabCabecalho">
					<tr>
						<tr class="tituloTabela">
						<th class="titulosTabela">ID</th>
						<th class="titulosTabela">Equipamento</th>
						<th class="titulosTabela">Marca</th>
						<th class="titulosTabela">Data Entrada</th>
                        <th class="titulosTabela">Origem Entrada</th>
					</tr>
				</thead>
				<tr class="itens">
					<td class="item">1</td>
					<td class="item">Teste1</td>
					<td class="item">Teste2</td>
					<td class="item">13/04/2022</td>
                    <td class="item">Teste 3</td>
				</tr>
			</table>
		</div>
	</body>
</html>
	