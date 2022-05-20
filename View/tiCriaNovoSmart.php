<?php

session_start(); 

include('../Control/controleSession.php');

?>

<html>
  <head>
  <meta charset="UTF-8"/>
    <title>Novo Smart</title>
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
      <link rel="stylesheet" href="../css/teamplateTiCriaNovoSmart.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
    
  </head>

  <body>

<?php

$desc_modelo = @$_GET['desc_modelo'];
$id_smart    = @$_GET['id_smart'];

include("../Control/selectEstoqueSmarts.php");

?>

<!-- Tela de Novo Smart - Start -->
      <div class="modal-dialog" role="document" id="novoSmartModal">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Novo Smart - <?php echo $desc_modelo;?></h3>
          </div>
        
        <div class="modal-body">

          <!-- Campo ID Smart - Start -->
          <div class="form-group">
            <label style="display: none;" for="recipient-id_smart" class="col-form-label"></label>
            <input style="display: none;" type="number" class="form-control" id="recipient-id_smart" value="<?php echo $id_smart;?>">
          </div>
          <!-- Campo ID Smart - End -->

          <!-- Campo IMEI - Start -->
          <div class="form-group">
            <label for="recipient-imei" class="col-form-label">Digite a IMEI</label>
            <input type="number" class="form-control" id="recipient-imei">
          </div>
          <!-- Campo IMEI - End -->

          <!-- Campo Nº Pulsus - Start -->
          <div class="form-group">
            <label for="recipient-pulsus" class="col-form-label">Digite o Nº Pulsus</label>
            <input type="number" class="form-control" id="recipient-pulsus">
          </div>
          <!-- Campo Nº Pulsus - End -->

          <!-- Campo Origem - Start -->
          <div class="form-group">
            <label for="recipient-origem" class="col-form-label">Qual a Origem?</label>
            <select class="form-control" id="recipient-origem">
              <option value="0">Selecione:</option>
              <option value="1">Compra</option>
              <option value="2">Colaborador Desligado</option>
              <option value="3">Devolvido</option>
              <option value="4">Retorno de Manutenção</option>
              <option value="5">Retorno de Troca</option>
            </select>
          </div>
          <!-- Campo Origem - End -->

          <!-- Botão Cadastrar - Start -->
          <div class="modal-footer">
            <a href="../View/tiEstoqueSmarts.php"><button type="button"  class="btn btn-secondary" id="voltar">Voltar</button></a>
            <button type="button"  class="btn btn-secondary" id="criarNovoSmart">Cadastrar</button>           
          </div>
          <!-- Botão Cadastrar - End -->

        </div>
        </div>
      </div>
</body>
</html>