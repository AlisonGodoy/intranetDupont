<?php

session_start();

include('../Control/controleSession.php');

?>

<html>
  <head>
	<meta charset="UTF-8"/>
	  <title>Cadastros Gerais</title>
    <link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">

      <!-- Faz referência a biblioteca Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

      <!-- Faz referência a biblioteca Jquery -->
      <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Última versão JavaScript compilada e minificada -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/Tempo.js"></script>
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
      <link rel="stylesheet" href="../css/teamplateTiCadastroSmarts.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
    
  </head>

  <body>
    <nav>
      <ul class="menu">
        <li><a href="tiEstoqueSmarts">Estoque</a></li>
        <li><a href="tiEntradaSmarts">Entrada</a></li>
        <li><a href="tiBaixasSmarts">Baixa</a></li>
        <li><a href="tiControleSmarts">Controle de Smarts</a></li>
        <li id="botTiCadastroSmarts"><a href="tiCadastroSmarts">Cadastro de Itens</a></li>
        <li id="botTiEstoqueZerado"><a href="tiEstoqueZerado">Estoque Zerado</a></li>
        <li><a href="tiSelectEstoque.php">Voltar</a></li>
      </ul>
    </nav>

    <section id="titulo">
      <h1>Cadastro de Itens</h1>
    </section>

    <section class="opcoes">
      <div class="opcao">
        <a href="tiCadastroMarca.php"><img src="../imagem/marcaSmarts"><h3>Cadastro de Marcas</h3></a>
      </div>
      <div class="opcao">
        <a href="tiCadastroModelo.php"><img src="../imagem/modeloSmartphone"><h3>Cadastro de Modelos</h3></a>
      </div>
      <div class="opcao">
        <a href="tiCadastroNovoSmart.php"><img src="../imagem/adicionaSmart"><h3>Cadastro de Novos Smarts</h3></a>
      </div>
      <div class="opcao">
        <a href="tiCadastroMotivo.php"><img src="../imagem/baixaSmartphone"><h3>Cadastro de Motivos de Baixa</h3></a>
      </div>
      <div class="opcao">
        <a href="tiCadastroOrigem.php"><img src="../imagem/origemSmartphone"><h3>Cadastro de Origem de Entradas</h3></a>
      </div>
    </section>
  </body>
</html>