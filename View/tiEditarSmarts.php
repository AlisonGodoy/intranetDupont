<?php

  session_start();

  include('../Control/controleSession.php');

?>
<html>
  <head>
  <meta charset="UTF-8"/>
    <title>Editar Smart</title>
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
      <script type="text/javascript"  src="../Control/tiValidaEditarSmarts.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/campoPesquisaTiControle.js"></script>
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
      <link rel="stylesheet" href="../css/teamplateTiEditarSmarts.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
    
  </head>

  <body>


<?php

  $id = @$_GET['id'];
  $desc_marca = @$_GET['desc_marca'];
  $desc_modelo = @$_GET['desc_modelo'];
  $imei = @$_GET['imei'];
  $pulsus = @$_GET['pulsus'];

  include("../Control/selectControleSmarts.php");
?>

<!-- Tela de Editar Smarts - Start -->
      <div class="modal-dialog" role="document" id="controleSmartModal">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Editar Smart - <?php echo $desc_modelo;?> ID <?php echo $id;?></h3>
            <h5 class="modal-title" id="erroInsert" style="color:red;display:none">Erro no Cadastro - Confira os Campos!</h5> <!-- Mensagem erro -->
            <h5 class="modal-title" id="okInsert" style="color:green;display:none">Carga Cadastrada com Sucesso</h5> <!-- Mensagem ok -->
          </div>
        
        <div class="modal-body">

          <!-- Campo ID Estoque - Start -->
          <div class="form-group">
            <label style="display: none;" for="recipient-id" class="col-form-label"></label>
            <input style="display: none;" type="number" class="form-control" id="recipient-id" value="<?php echo $id;?>">
          </div>
          <!-- Campo ID Estoque - End -->

          <!-- Campo Marca - Start -->
          <div class="form-group">
            <label for="recipient-desc_marca" class="col-form-label">Marca</label>
            <input type="text" class="form-control" id="recipient-desc_marca" value="<?php echo $desc_marca;?>">
          </div>
          <!-- Campo Marca - End -->


          <!-- Campo Modelo - Start -->
          <div class="form-group">
            <label for="recipient-desc_modelo" class="col-form-label">Modelo</label>
            <input type="text" class="form-control" id="recipient-desc_modelo" value="<?php echo $desc_modelo;?>">
          </div>
          <!-- Campo Modelo - End -->

          <!-- Campo IMEI - Start -->
          <div class="form-group">
            <label for="recipient-imei" class="col-form-label">IMEI</label>
            <input type="number" class="form-control" id="recipient-imei" value="<?php echo $imei;?>">
          </div>
          <!-- Campo IMEI - End -->

          <!-- Campo Nº Pulsus - Start -->
          <div class="form-group">
            <label for="recipient-pulsus" class="col-form-label">Nº Pulsus</label>
            <input type="number" class="form-control" id="recipient-pulsus" value="<?php echo $pulsus;?>">
          </div>
          <!-- Campo Nº Pulsus - End -->

          <!-- Botão Cadastrar - Start -->
          <div class="modal-footer">
            <a href="../View/tiControleSmarts.php"><button type="button"  class="btn btn-secondary" id="voltar">Cancelar</button></a>
            <button type="button"  class="btn btn-secondary" id="editarSmart">Cadastrar</button>           
          </div>
          <!-- Botão Cadastrar - End -->

        </div>
      </div>
    </div>
  </body>
</html>