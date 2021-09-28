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
    
        
	</head>
   
  <body id="tudo" style="background-color: gainsboro;">
    <div id="corpo">
      <img id="imgfundo" src="../imagem/fundo.png">
      <img id="logogrupo" src="../imagem/logogpnovo.png">

      <form class="form-signin" method="POST" action="..\Control\controlebd.php">
      <div id="form" class="modal-dialog" role="document" id="entraModa">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><font face="Verdana"><font size = "5"><b>Bem-Vindo(a) à Intranet Grupo Dupont!</b></font></font></h3>
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
              <input type="password" class="form-control" name="senha" id="recipient-pass" required>
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

  </body>
</html>


