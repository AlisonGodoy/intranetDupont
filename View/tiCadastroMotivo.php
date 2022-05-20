<?php

session_start();

include('../Control/controleSession.php');

?>

<html>
  <head>
  <meta charset="UTF-8"/>
    <title>Cadastrar Motivo</title>
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
      <script type="text/javascript"  src="../Control/tiValidaMotivo.js"></script>
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
      <link rel="stylesheet" href="../css/teamplateTiCadastroMotivo.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
   
  </head>

  <body>

<!-- Tela Cadastro Motivo - Start -->
      <div class="modal-dialog" role="document" id="controleSmartModal">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Cadastrar Novo Motivo</h3>
          </div>
        
        <div class="modal-body">

          <!-- Campo Motivo - Start -->
          <div class="form-group">
            <label  for="recipient-motivo" class="col-form-label">Digite o Nome do Motivo que Deve ser Cadastrado</label>
            <input  type="text" class="form-control" id="recipient-motivo">
          </div>
          <!-- Campo Motivo - End -->

          <!-- Botão Cadastrar - Start -->
          <div class="modal-footer">
            <a href="../View/tiCadastroSmarts.php"><button type="button"  class="btn btn-secondary" id="voltar">Cancelar</button></a>
            <button type="button"  class="btn btn-secondary" id="criarMotivo">Cadastrar</button>           
          </div>
          <!-- Botão Cadastrar - End -->

        </div>
        </div>
      </div>
</body>
</html>