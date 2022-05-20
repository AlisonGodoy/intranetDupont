<?php

session_start();

include('../Control/controleSession.php');

?>
<html>
  <head>
	<meta charset="UTF-8"/>
	  <title>Entrada Smarts</title>
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
      <script type="text/javascript"	src="../Control/campoPesquisaTiEntrada.js"></script>
      <script type="text/javascript"  src="../Control/campoPesquisaTiEstoque.js"></script>
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
      <link rel="stylesheet" href="../css/teamplateTiEntradaSmarts.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
    
  </head>

  <body>
    <nav>
      <ul class="menu">
        <li><a href="tiEstoqueSmarts">Estoque</a></li>
        <li id="botTiEntradaSmarts"><a href="tiEntradaSmarts">Entrada</a></li>
        <li><a href="tiBaixasSmarts">Baixa</a></li>
        <li><a href="tiControleSmarts">Controle de Smarts</a></li>
        <li><a href="tiCadastroSmarts">Cadastro de Itens</a></li>
        <li id="botTiEstoqueZerado"><a href="tiEstoqueZerado">Estoque Zerado</a></li>
        <li><a href="tiSelectEstoque.php">Voltar</a></li>
      </ul>
    </nav>

    <section id="titulo">
      <h1>Histórico de Entrada</h1>
    </section>

  <?php

    include("../Model/conexaoIntranetGd.php");
    include("../Control/selectEntradaSmarts.php");
    //var_dump($result);

  ?>
  <div class="divTabela">
    <table id="tabelaEntradaTi" class="table table-dark table-striped">
        <tr id="tituloSuperior">
          <td id="tituloIdeEstoque">ID Estoque</td>
          <td id="tituloDataEntrada">Data Entrada</td>
          <td id="tituloDescMarca">Marca</td>
          <td id="tituloDescModelo">Modelo</td>
          <td id="tituloImei">IMEI</td>
          <td id="tituloPulsus">Pulsus</td>
          <td id="tituloDescOrigem">Origem</td>
        </tr>

        <tr>
          <th><input type="text" id="idEstoque"/></th>
          <th><input type="text" id="dataEntrada"/></th>
          <th><input type="text" id="marca"/></th>
          <th><input type="text" id="modelo"/></th>
          <th><input type="text" id="imei"/></th>
          <th><input type="text" id="pulsus"/></th>
          <th><input type="text" id="origem"/></th>
        </tr>
 <?php
 
  while (odbc_fetch_row($result)) {

 ?>

        <tr>
          <td><?php echo odbc_result($result, "id_estoque");?></td> 
          <td><?php echo odbc_result($result, "data_entrada");?></td>  
          <td><?php echo odbc_result($result, "desc_marca");?></td>
          <td><?php echo odbc_result($result, "desc_modelo");?></td>
          <td><?php echo odbc_result($result, "imei");?></td>
          <td><?php echo odbc_result($result, "pulsus");?></td>
          <td><?php echo odbc_result($result, "desc_origem");?></td>
        </tr>
 <?php
 }
 odbc_close($con);
 ?>
      </table>
    </div>  
  </body>
</html>