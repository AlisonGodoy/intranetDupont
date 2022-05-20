<?php 

if(@$_GET['error'] == 't'){
  echo "<script> alert('Usuário não Cadastrado');</script>";

}elseif(@$_GET['error'] == 's'){
  echo "<script> alert('Você deve Logar');</script>";
  }

?> 
<html>
  <head>
      <meta charset="UTF-8"/>
      <title>Intranet Grupo Dupont</title>

      <!-- Faz referência a biblioteca Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

      <!-- Faz referência a biblioteca Jquery -->
      <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Última versão JavaScript compilada e minificada -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

      <!-- Faz referência a arquivo .css personalizado -->
      <link rel="stylesheet" href="../css/teamplatelogin.css" >

      <!-- Faz referência a icone IGD -->
      <link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
      <link rel = "preconnect" href = "https://fonts.googleapis.com">
      <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
      <link href = "https: //fonts.googleapis.com/css2? family = Teko: wght @ 700 & display = swap "rel =" stylesheet ">
      <script src="https://kit.fontawesome.com/ee48b3351c.js" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        
  </head>
   
  <body>

    <header>
      <img src="../imagem/logogpnovo">
    </header>

    <div class="formCentral">
    <form class="form-signin" method="POST" action="..\Control\controlebd.php">
      <div id="form" class="modal-dialog" role="document" id="entraModa">
        <div class="modal-content">
          <div class="modal-header">
            <center><h3 class="modal-title" id="exampleModalLabel">Bem-Vindo(a) à Intranet Grupo Dupont!</h3></center>
          </div>
        
      <div id="login" class="modal-body">
      <!-- Campo E-mail - Start -->     
        <div class="form-group">
          <label for="recipient-email" class="col-form-label">E-mail</label>
            <input type="text" class="form-control" name="usuario" id="recipient-email" required>                   
        </div>
      <!-- Campo E-mail - End -->
           
      <!-- Campo Senha - Start -->
        <div class="form-group">
          <label for="recipient-pass" class="col-form-label">Senha</label>
          <div class="senha">
            <input type="password" class="form-control" name="senha" id="recipient-pass" required>
            <i class="fa-solid fa-eye" id="olhoAberto" onClick="mostrarOcultarSenha()" onclick="alteraImg()"></i>
            <i class="fa-solid fa-eye-slash" id="olhoFechado" onClick="mostrarOcultarSenha()" onclick="alteraImg()"></i>
          </div>
        </div>
      <!-- Campo Senha - End -->
        </div>
      <!-- Botão Acessar - Star -->
        <div class="modal-footer">
          <button type="submit"  class="btn btn-secondary" id="entrarHome">Acessar</button>           
        </div>
      <!-- Botão Acessar - End -->
      </div>
    </div>
      <!-- Tela de login - End -->
    </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

      function mostrarOcultarSenha(){
      var senha = document.getElementById("recipient-pass");
      if(senha.type=="password"){
        senha.type="text";
      }else{
        senha.type="password"
      }
    }

      function alteraImg(){
        document.getElementById('olhoFechado').show();
      }
    </script>
  </body>
</html>


