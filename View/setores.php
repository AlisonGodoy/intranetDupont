<?php

include('../Control/controleSession.php');

?>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8"/>
    <title>Setores</title>

    <!-- Faz referência a biblioteca Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

    <!-- Faz referência a biblioteca Jquery -->
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Última versão JavaScript compilada e minificada -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

    <!-- Faz referência a arquivo .css personalizado -->
    <link rel="stylesheet" href="../css/teamplatesetores.css" >

    <!-- Faz referência a arquivo .js personalizado -->
    <script type="text/javascript"  src="../Control/Tempo.js"></script>

    <!-- Faz referência a icone IGD -->
    <link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">

	</head>
    <body class="FadeOm">
      <header id="titulo" style="background-color: grey;"></header>

      <!--Cria DIV de fundo com imagem - INÍCIO-->
      <div class="corpo">
        <img id="imgfundo" src="../imagem/fundo.png">
      <!--Cria DIV de fundo com imagem - FIM-->

        <!--Coloca imagem "Selecione o setor" - INÍCIO-->
        <center><img id="selecionesetor" src="../imagem/selecionesetor.png"></center>
        <!--Coloca imagem "Selecione o setor" - INÍCIO-->

        <!--Cria DIV/Botão Logística - INÍCIO-->
        <div id="figuralogistica">
          <a href="http://localhost/intranetgd/View/logistica">
          <img id="iconelogistica" class="fadeImg" src="../imagem/iconelogistica.PNG">
        </div>
        <!--Cria DIV/Botão Logística - INÍCIO-->

        <div class="figure" id="figurasetorti">
          <a href="http://localhost/intranetgd/View/ti">
          <img id="iconesetorti" class="fadeImg2" src="../imagem/iconeti.PNG"></a>
        </div>

        <div id="figuracomercial">
          <a href="http://localhost/intranetgd/View/merchandising">
          <img id="iconecomercial" class="fadeImg3" src="../imagem/iconecomercial.PNG"></a>
        </div>

        <div id="figurafinanceiro">
          <a href="http://localhost/intranetgd/View/financeiro">
          <img id="iconefinanceiro" class="fadeImg4" src="../imagem/iconefinanceiro.PNG"></a>
        </div>

        <div id="figuragrupo">
          <img id="logogrupo" class="fadeIn" src="../imagem/logogpnovo.PNG"></a>
        </div>

        <div id="botsair">
          <a id="teste" href="../Control/logout.php"><button type="button"  class="bt" id="logOut"><b>SAIR</b></button> </a>
        </div>

      </div>  
    </body>
</html>