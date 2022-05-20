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
    	<link rel="stylesheet" href="../css/teamplateTiBaixaEstoqueGeral.css" >
    	<link rel="stylesheet" href="../css/normalize.css" >
	</head>
    <body>
    	<nav class="cabecalho">
      		<ul class="menu">
        		<li><a href="tiEstoqueGeral">Estoque</a></li>
        		<li><a href="tiEntradaEstoqueGeral">Entrada</a></li>
        		<li id="botTiBaixa"><a href="tiBaixas">Baixa</a></li>
        		<li><a href="tiCadastro">Cadastro de Equipamento</a></li>
        		<li id="botTiEstoqueZerado"><a href="tiEstoqueZerado">Estoque Zerado</a></li>
        		<li><a href="tiSelectEstoque.php">Voltar</a></li>
      		</ul>
    	</nav>

    	<div class="titulo">
      		<h1>Entrada de Equipamento</h1>
		</div>

        <div class="divTabela">
            <table class="tabela">
                <thead class="titulosTabela"> 
                    <th>ID</th>
                    <th>Equipamento</th>
                    <th>Marca</th>
                    <th>Data Baixa</th>
                    <th>Destino</th>
                    <th>Devolvido</th>
                    <th>Impressão</th>
                </thead>
                <throw class="linhasTabela">
                    <tr>1</tr>
                    <tr>Teste</tr>
                    <tr>Teste2</tr>
                    <tr>11/11/1111</tr>
                    <tr>Teste3</tr>
                    <tr>Sim</tr>
                    <tr>Imprimir</tr>
                </throw>

            </table>
        </div>
    </body>
</html>