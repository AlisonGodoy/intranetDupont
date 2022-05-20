<?php

session_start();

include('../Control/controleSession.php');

?>
<html>
  <head>
	<meta charset="UTF-8"/>
	  <title>Baixas</title>
    <link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">

      <!-- Faz referência a biblioteca Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

      <!-- Faz referência a biblioteca Jquery -->
      <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Última versão JavaScript compilada e minificada -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/Tempo.js"></script>

      <!-- Faz referência a arquivo .js personalizado 
      <script type="text/javascript"	src="../Control/tiValidaDevolverSmart.js"></script>-->

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"	src="../Control/campoPesquisaTiBaixas.js"></script>
      <script type="text/javascript"  src="../Control/campoPesquisaTiEntrada.js"></script>
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
      <link rel="stylesheet" href="../css/teamplateTiBaixaSmarts.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
    
  </head>

  <body>
    <nav>
      <ul class="menu">
        <li><a href="tiEstoqueSmarts">Estoque</a></li>
        <li><a href="tiEntradaSmarts">Entrada</a></li>
        <li id="botTiBaixaSmarts"><a href="tiBaixasSmarts">Baixa</a></li>
        <li><a href="tiControleSmarts">Controle de Smarts</a></li>
        <li><a href="tiCadastroSmarts">Cadastro de Itens</a></li>
        <li id="botTiEstoqueZerado"><a href="tiEstoqueZerado">Estoque Zerado</a></li>
        <li><a href="tiSelectEstoque.php">Voltar</a></li>
      </ul>
    </nav>

    <section id="titulo">
      <h1>Histórico de Baixas</h1>
    </section>


    <?php 

    include("../Model/conexaoIntranetGd.php");
    include("../Control/tiTotalBaixasSmarts.php");
    //var_dump($resultTotalBaixas);

  ?>
  <div class="divTotal">
    <table id="tabelaTotal" class="table table-dark table-striped">
        <tr>
          <td id="tituloTotal">Total Baixado</td>
        </tr>
  <?php
    while (odbc_fetch_row($result)) {
  ?>

        <tr>
          <td><?php echo odbc_result($result, "TOTAL_BAIXADO");?></td>
        </tr>
  <?php
    }
      odbc_close($con);
    ?>
      </table>
    </div>

  <?php 

    include("../Model/conexaoIntranetGd.php");
    include("../Control/selectBaixasSmarts.php");
    //var_dump($result);

  ?>
  <div class="divTabela">
    <table id="tabelaBaixaTi" class="table table-dark table-striped">
        <tr>
          <td id="tituloIdEstoque">ID Estoque</td>
          <td id="tituloDataBaixa">Data Baixa</td>
          <td id="tituloMarca">Marca</td>
          <td id="tituloModelo">Modelo</td>
          <td id="tituloImei">IMEI</td>
          <td id="tituloPulsus">Pulsus</td>
          <td id="tituloMotivo">Motivo</td>
          <td id="tituloMotivo">Destino</td>
          <td id="tituloDevolvido">Devolvido</td>
          <td id="tituloGerarContrato">Gerar Contrato</td>
        </tr>

        <tr>
          <th><input type="text" id="idEstoque"/></th>
          <th><input type="text" id="dataBaixa"/></th>
          <th><input type="text" id="marca"/></th>
          <th><input type="text" id="modelo"/></th>
          <th><input type="text" id="imei"/></th>
          <th><input type="text" id="pulsus"/></th>
          <th><input type="text" id="motivo"/></th>
          <th><input type="text" id="destino"/></th>
          <th><input type="text" id="devolvido"/></th>
          <th><input type="text" id="gerarContrato"/></th>
        </tr>
 <?php
 
 while (odbc_fetch_row($result)) {

 ?>

        <tr>
          <td><?php echo odbc_result($result, "id_estoque");?></td> 
          <td><?php echo odbc_result($result, "data_baixa");?></td>  
          <td><?php echo odbc_result($result, "desc_marca");?></td>
          <td><?php echo odbc_result($result, "desc_modelo");?></td>
          <td><?php echo odbc_result($result, "imei");?></td>
          <td><?php echo odbc_result($result, "pulsus");?></td>
          <td><?php echo odbc_result($result, "desc_motivo");?></td>
          <td><?php echo odbc_result($result, "destino");?></td>
          <td id="dev"><?php echo odbc_result($result, "desc_devolucao");?><a href="../View/tiDevolverSmart.php?id_estoque=<?php echo odbc_result($result, "id_estoque");?>">&nbsp&nbsp<img id="devolver" src="../imagem/devolucaoSmart" width="20px" height="20px"></a></td>
          <td><a href="../View/tiGeraContrato.php?id_estoque=<?php echo odbc_result($result, "id_estoque");?>&desc_marca=<?php echo odbc_result($result, "desc_marca");?>&desc_modelo=<?php echo odbc_result($result, "desc_modelo");?>&imei=<?php echo odbc_result($result, "imei");?>&pulsus=<?php echo odbc_result($result, "pulsus");?>">&nbsp&nbsp<img id="gerarContrato" src="../imagem/imprimir" width="20px" height="20px"></a></td>
        </tr>
 <?php
 }
 odbc_close($con);
 ?>
        </table>
      </div>
  </body>
  </html>