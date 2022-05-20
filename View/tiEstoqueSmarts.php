<?php 

session_start();

include('../Control/controleSession.php');

?>
<html>
  <head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estoque Smarts</title>
    <link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">

      <!-- Faz referência a biblioteca Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

      <!-- Faz referência a biblioteca Jquery -->
      <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Última versão JavaScript compilada e minificada -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/Tempo.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/tiValidaNovoSmart.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/campoPesquisaTiEstoque.js"></script>
      <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
      <link href = "https: //fonts.googleapis.com/css2? family = Teko: wght @ 700 & display = swap "rel =" stylesheet ">
      <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="../css/teamplateEstoqueTI.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
    
  </head>

  <body>
    <nav class="cabecalho">
      <ul class="menu">
        <li id="botTiEstoqueSmarts"><a href="tiEstoqueSmarts">Estoque</a></li>
        <li><a href="tiEntradaSmarts">Entrada</a></li>
        <li><a href="tiBaixasSmarts">Baixa</a></li>
        <li><a href="tiControleSmarts">Controle de Smarts</a></li>
        <li><a href="tiCadastroSmarts">Cadastro de Itens</a></li>
        <li id="botTiEstoqueZerado"><a href="tiEstoqueZerado">Estoque Zerado</a></li>
        <li><a href="tiSelectEstoque.php">Voltar</a></li>
      </ul>
    </nav>

    <section id="titulo">
      <h1>Estoque de Smartphones</h1>
    </section>

  <?php

    include("../Model/conexaoIntranetGd.php");
    include("../Control/selectEstoqueSmarts.php");

  ?>
  <div class="divTabela">
    <table id="tabelaEstoqueTi" class="table table-dark table-striped">
      <tr>
        <td id="tituloCodSmart">Cód Smart</td>
        <td id="tituloMarca">Marca</td>
        <td id="tituloModelo">Modelo</td>
        <td id="tituloQuantidade">Quantidade</td>
      </tr>

      <tr>
        <th><input type="text" id="CodSmart"/></th>
        <th><input type="text" id="Marca"/></th>
        <th><input type="text" id="Modelo"/></th>
        <th><input type="text" id="Quantidade"/></th>
      </tr>
  <?php
 
  while (odbc_fetch_row($result)) {

  ?>

      <tr>
        <td><?php echo odbc_result($result, "id_smart");?></td> 
        <td><?php echo odbc_result($result, "desc_marca");?></td>  
        <td><?php echo odbc_result($result, "desc_modelo");?></td>
        <td><center><a href="../View/tiCriaNovoSmart.php?desc_modelo=<?php echo odbc_result($result, "desc_modelo");?>&id_smart=<?php echo odbc_result($result, "id_smart");?>"><img id="novoSmart" src="../imagem/maisSmarts.png" width="16px" height="16px"></a>&nbsp
                    <a href="../View/tiCadastraBaixaSmart.php?desc_modelo=<?php echo odbc_result($result, "desc_modelo");?>&id_smart=<?php echo odbc_result($result, "id_smart");?>"><img id="baixaSmart" src="../imagem/menosSmarts.png" width="17px" height="20px"></a>&nbsp&nbsp<?php echo odbc_result($result, "quantidade");?>
            </center>
        </td>
      </tr>
  <?php
  }
  odbc_close($con);
  ?>
      </table>
    </div>
  </body>
</html>