<?php

session_start();

include('../Control/controleSession.php');

?>

<html>
  <head>
  <meta charset="UTF-8"/>
    <title>Cadastrar Novo Smart</title>
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
      <script type="text/javascript"  src="../Control/tiValidaCadastroNovoSmart.js"></script>
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
      <link rel="stylesheet" href="../css/teamplateTiCadastroNovoSmart.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
   
  </head>

  <body>
<?php

include("../Control/selectNovoSmart.php");

?>
<!-- Tela de Cadastro Novo Smart - Start -->
      <div class="modal-dialog" role="document" id="controleSmartModal">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Cadastrar Novo Smart</h3>
          </div>
        
        <div class="modal-body">

          <!-- Campo Marca - Start -->
          <div class="form-group">
            <label for="recipient-marca" class="col-form-label">Qual a Marca?</label>
            <select class="form-control" id="recipient-marca">
            <option value="0">Selecione:</option>
            <?php
              while (odbc_fetch_row($resultMarca)) {
            ?>
              <option
              value="<?php echo odbc_result($resultMarca, "id");?>"><?php echo odbc_result($resultMarca, "desc_marca");?></option>
            <?php
            }
            ?>
            </select>
          </div>
          <!-- Campo Marca - End -->

          <!-- Campo Modelo - Start -->
          <div class="form-group">
            <label for="recipient-modelo" class="col-form-label">Qual o Modelo?</label>
            <select class="form-control" id="recipient-modelo">
            <option value="0">Selecione:</option>
            <?php
              while (odbc_fetch_row($resultModelo)) {
            ?>
              <option
              value="<?php echo odbc_result($resultModelo, "id");?>"><?php echo odbc_result($resultModelo, "desc_modelo");?></option>
            <?php
            }
            ?>
            </select>
          </div>
          <!-- Campo Modelo - End -->

          <!-- Botão Cadastrar - Start -->
          <div class="modal-footer">
            <a href="../View/tiCadastroSmarts.php"><button type="button"  class="btn btn-secondary" id="voltar">Cancelar</button></a>
            <button type="button"  class="btn btn-secondary" id="criarNovoSmart">Cadastrar</button>           
          </div>
          <!-- Botão Cadastrar - End -->

        </div>
        </div>
      </div>
  </body>
</html>