
<?php

session_start();

include('../Control/controleSession.php');

?>
<html>
  <head>
	<meta charset="UTF-8"/>
	  <title>Estoque Zerado Smarts</title>

      <!-- Faz referência a biblioteca Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

      <!-- Faz referência a biblioteca Jquery -->
      <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Última versão JavaScript compilada e minificada -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/Tempo.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"	src="../Control/campoPesquisaEstoqueZerado.js"></script>

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
      <link rel="stylesheet" href="../css/teamplateTiEstoqueZerados.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
  </head>

  <body>
    <nav>
      <ul class="menu">
        <li><a href="tiEstoqueSmarts">Estoque</a></li>
        <li><a href="tiEntradaSmarts">Entrada</a></li>
        <li><a href="tiBaixasSmarts">Baixa</a></li>
        <li><a href="tiControleSmarts">Controle de Smarts</a></li>
        <li><a href="tiCadastroSmarts">Cadastro de Itens</a></li>
                <li id="botTiEstoqueZerado"><a href="tiEstoqueZerado">Estoque Zerado</a></li>
        <li><a href="tiSelectEstoque.php">Voltar</a></li>
      </ul>
    </nav>

    <section id="titulo">
      <h1>Estoque Zerado</h1>
    </section>

  <?php

    include("../Model/conexaoIntranetGd.php");
    include("../Control/selectEstoqueZerado.php");

  ?>

    <table id="tabelaEstoqueZerado" class="table table-dark table-striped" width="200px">
      <tr>
        <td id="tituloCodSmart">Cód Smart</td>
        <td id="tituloMarca">Marca</td>
        <td id="tituloModelo">Modelo</td>
      </tr>

      <tr>
        <th><input type="text" id="CodSmart"/></th>
        <th><input type="text" id="Marca"/></th>
        <th><input type="text" id="Modelo"/></th>
      </tr>
  <?php
 
  while (odbc_fetch_row($result)) {

  ?>

      <tr>
        <td><?php echo odbc_result($result, "id");?></td> 
        <td><?php echo odbc_result($result, "desc_marca");?></td>
        <td><center><?php echo odbc_result($result, "desc_modelo");?><a href="../View/tiCriaEstoqueZerado.php?desc_modelo=<?php echo odbc_result($result, "desc_modelo");?>&id=<?php echo odbc_result($result, "id");?>">&nbsp&nbsp<img id="novoSmart" src="../imagem/maisSmarts"width="16px" height="16px"></a></center></td>
      </tr>
  <?php
  }
  odbc_close($con);
  ?>
    </table>
  </body>
</html>