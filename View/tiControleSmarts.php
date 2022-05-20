<?php

session_start();

include('../Control/controleSession.php');

?>

<html>
  <head>
	<meta charset="UTF-8"/>
	  <title>Controle Smarts</title>
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
      <script type="text/javascript"	src="../Control/tiValidaEditarSmart.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"	src="../Control/campoPesquisaTiControle.js"></script>
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
      <link rel="stylesheet" href="../css/teamplateTiControleSmarts.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
    
  </head>

  <body>
    <nav>
      <ul class="menu">
        <li><a href="tiEstoqueSmarts">Estoque</a></li>
        <li><a href="tiEntradaSmarts">Entrada</a></li>
        <li><a href="tiBaixasSmarts">Baixa</a></li>
        <li id="botTiControleSmarts"><a href="tiControleSmarts">Controle de Smarts</a></li>
        <li><a href="tiCadastroSmarts">Cadastro de Itens</a></li>
        <li id="botTiEstoqueZerado"><a href="tiEstoqueZerado">Estoque Zerado</a></li>
        <li><a href="tiSelectEstoque.php">Voltar</a></li>
      </ul>
    </nav>

    <section id="titulo">
      <h1>Controle de Smartphones</h1>
    </section>

  <?php

    include("../Model/conexaoIntranetGd.php");
    include("../Control/selectControleSmarts.php");
    //var_dump($result);

  ?>

    <table id="tabelaControleTi" class="table table-dark table-striped" width="200px">
        <tr>
          <td id="tituloIdEstoque">ID Estoque</td>
          <td id="tituloMarca">Marca</td>
          <td id="tituloModelo">Modelo</td>
          <td id="tituloImei">IMEI</td>
          <td id="tituloPulsus">Pulsus</td>
        </tr>

        <tr>
          <th><input type="text" id="idEstoque"/></th>
          <th><input type="text" id="marca"/></th>
          <th><input type="text" id="modelo"/></th>
          <th><input type="text" id="imei"/></th>
          <th><input type="text" id="pulsus"/></th>
        </tr>
 <?php
 
 while (odbc_fetch_row($result)) {

 ?>

        <tr>
          <td><a href="../View/tiEditarSmarts.php?id=<?php echo odbc_result($result, "id");?>&desc_marca=<?php echo odbc_result($result, "desc_marca");?>&desc_modelo=<?php echo odbc_result($result, "desc_modelo");?>&imei=<?php echo odbc_result($result, "imei");?>&pulsus=<?php echo odbc_result($result, "pulsus");?>"><img id="devolver" src="https://thumbs.dreamstime.com/b/o-s%C3%ADmbolo-preto-de-edita-%C3%ADcone-do-l%C3%A1pis-linha-projeto-78257225.jpg" width="20px" height="20px"></a>&nbsp&nbsp<?php echo odbc_result($result, "id");?></td> 
          <td><?php echo odbc_result($result, "desc_marca");?></td>
          <td><?php echo odbc_result($result, "desc_modelo");?></td>
          <td><?php echo odbc_result($result, "imei");?></td>
          <td><?php echo odbc_result($result, "pulsus");?></td>
        </tr>
 <?php
 }
 odbc_close($con);
 ?>
    </table>
  </body>
</html>