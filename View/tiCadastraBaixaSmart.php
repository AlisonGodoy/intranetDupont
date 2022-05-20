<?php

session_start();

include('../Control/controleSession.php');

?>

<html>
  <head>
  <meta charset="UTF-8"/>
    <title>Baixa Smarts</title>
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
      <script type="text/javascript"  src="../Control/tiValidaBaixaSmarts.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
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
      <link rel="stylesheet" href="../css/teamplateTiCadastraBaixaSmart.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
    
  </head>

  <body>
<?php

$desc_modelo = @$_GET['desc_modelo'];
$id_smart    = @$_GET['id_smart'];

include("../Control/selectEstoqueSmarts.php");
include("../Control/selectBaixaSmarts.php");

?>

<!-- Tela de Baixa Smart - Start -->
    <div class="modal-dialog" role="document" id="baixaSmartModal">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Baixa Smart - <?php echo $desc_modelo;?></h3>
        </div>
        
      <div class="modal-body">

        <!-- Campo ID Smart - Start -->
        <div class="form-group">
          <label style="display: none;" for="recipient-id_smart" class="col-form-label"></label>
          <input style="display: none;" type="number" class="form-control" id="recipient-id_smart" value="<?php echo $id_smart;?>">
        </div>
        <!-- Campo ID Smart - End --> 

        <!-- Campo ID - Start -->
        <div class="form-group">
          <label for="recipient-baixa" class="col-form-label">Qual ID Baixar?</label>
          <select class="form-control" id="recipient-baixa">
          <option value="0">Selecione:</option>

          <?php
            if ($id_smart == 1) {
            while (odbc_fetch_row($resultUm)) {
          ?>
            <option
            value="<?php echo odbc_result($resultUm, "id");?>"><?php echo odbc_result($resultUm, "id");?></option>
          <?php
          }
          }elseif ($id_smart == 2) {
            while (odbc_fetch_row($resultDois)) {
            ?>
              <option
              value="<?php echo odbc_result($resultDois, "id");?>"><?php echo odbc_result($resultDois, "id");?></option>
            <?php
            }
          }elseif ($id_smart == 3) {
            while (odbc_fetch_row($resultTres)) {
            ?>
              <option
              value="<?php echo odbc_result($resultTres, "id");?>"><?php echo odbc_result($resultTres, "id");?></option>
            <?php
            }
          }elseif ($id_smart == 4){
            while (odbc_fetch_row($resultQuatro)) {
            ?>
              <option
              value="<?php echo odbc_result($resultQuatro, "id");?>"><?php echo odbc_result($resultQuatro, "id");?></option>
            <?php
            }


          }elseif ($id_smart == 5){
            while (odbc_fetch_row($resultCinco)) {
            ?>
              <option
              value="<?php echo odbc_result($resultCinco, "id");?>"><?php echo odbc_result($resultCinco, "id");?></option>
            <?php
            }

          }elseif ($id_smart == 10){
            while (odbc_fetch_row($resultDez)) {
            ?>
              <option
              value="<?php echo odbc_result($resultDez, "id");?>"><?php echo odbc_result($resultDez, "id");?></option>
            <?php
            }

          }elseif ($id_smart == 11){
            while (odbc_fetch_row($resultOnze)) {
            ?>
              <option
              value="<?php echo odbc_result($resultOnze, "id");?>"><?php echo odbc_result($resultOnze, "id");?></option>
            <?php
            }

          }elseif ($id_smart == 14){
            while (odbc_fetch_row($resultQuatorze)) { 
            ?>
              <option
              value="<?php echo odbc_result($resultQuatorze, "id");?>"><?php echo odbc_result($resultQuatorze, "id");?></option>
            <?php
            }

          }elseif ($id_smart == 15){
            while (odbc_fetch_row($resultQuinze)) { 
            ?>
              <option
              value="<?php echo odbc_result($resultQuinze, "id");?>"><?php echo odbc_result($resultQuinze, "id");?></option>
            <?php
            }
          }elseif ($id_smart == 16){
            while (odbc_fetch_row($resultDezesseis)) { 
            ?>
              <option
              value="<?php echo odbc_result($resultDezesseis, "id");?>"><?php echo odbc_result($resultDezesseis, "id");?></option>
            <?php
            }
          }elseif ($id_smart == 17){
            while (odbc_fetch_row($resultDezessete)) { 
            ?>
              <option
              value="<?php echo odbc_result($resultDezessete, "id");?>"><?php echo odbc_result($resultDezessete, "id");?></option>
            <?php
            }
          }else{
            while (odbc_fetch_row($resultDezoito)) { 
            ?>
              <option
              value="<?php echo odbc_result($resultDezoito, "id");?>"><?php echo odbc_result($resultDezoito, "id");?></option>
            <?php
            }
            }
            ?>
            </select>
          </div>
          <!-- Campo ID - End -->

          <!-- Campo Motivo - Start -->
          <div class="form-group">
            <label for="recipient-motivo" class="col-form-label">Qual o Motivo?</label>
            <select class="form-control" id="recipient-motivo">
              <option value="0">Selecione:</option>
              <option value="1">Novo Colaborador</option>
              <option value="2">Empréstimo</option>
              <option value="3">Manutenção</option>
              <option value="4">Descarte</option>
              <option value="5">Troca</option>
            </select>
          </div>
          <!-- Campo Motivo - End -->

          <!-- Campo Destino - Start -->
          <div class="form-group">
            <label for="recipient-destino" class="col-form-label"> Destino</label>
            <input type="text" class="form-control" id="recipient-destino">
          </div>
          <!-- Campo Destino - End -->

          <!-- Botão Baixar - Start -->
          <div class="modal-footer">
            <a href="../View/tiEstoqueSmarts.php"><button type="button"  class="btn btn-secondary" id="voltar">Voltar</button></a>
            <button type="button"  class="btn btn-secondary" id="baixarSmart">Baixar Smart</button>           
          </div>
          <!-- Botão Baixar - End -->

        </div>
      </div>
    </div>
  </body>
</html>