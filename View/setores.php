<?php
session_start();

$CodPerfil = $_SESSION['CodPerfil'];
 
include('../Control/controleSession.php');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

	</head>

    <body>
      <header>
        <img id="selecionesetor" src="../imagem/selecionesetor.png">
      </header>

      <section id="opcoes">
        <?php  
        if ($CodPerfil == 4 || $CodPerfil == 5 || $CodPerfil == 6 || $CodPerfil == 7 || $CodPerfil == 8 || $CodPerfil == 9 || $CodPerfil == 10 || $CodPerfil == 11 || $CodPerfil == 12 || $CodPerfil == 13 || $CodPerfil == 14 || $CodPerfil == 15 || $CodPerfil == 16 || $CodPerfil == 17 || $CodPerfil == 20 || $CodPerfil == 21) {
          ?>
        <div id="figuralogistica">
          <img id="iconelogisticaBloq" class="fadeImg" src="../imagem/iconeLogisticaBloqueio.PNG">
        </div>
        <?php
        }else {
          ?>
          <div id="figuralogistica">
          <a href="../View/logistica">
          <img id="iconelogistica" class="fadeImg" src="../imagem/iconelogistica.PNG"></a>
        </div>
        <?php
         } 
        ?>

        <?php  
        if ($CodPerfil == 4 || $CodPerfil == 5 || $CodPerfil == 6 || $CodPerfil == 7 || $CodPerfil == 8 || $CodPerfil == 9 || $CodPerfil == 10 || $CodPerfil == 11 || $CodPerfil == 12 || $CodPerfil == 13 || $CodPerfil == 14 || $CodPerfil == 15 || $CodPerfil == 16 || $CodPerfil == 17 || $CodPerfil == 20 || $CodPerfil == 21) {
          ?>
        <div id="figurasetorti">
          <img id="iconesetorti" class="fadeImg" src="../imagem/iconeTiBloqueio.PNG">
        </div>
        <?php
        }else {
          ?>
        <div class="figure" id="figurasetorti">
          <a href="../View/ti">
          <img id="iconesetorti" class="fadeImg2" src="../imagem/iconeti.PNG"></a>
        </div>
         <?php
         } 
        ?>

        <?php  
        if ($CodPerfil == 4 || $CodPerfil == 5 || $CodPerfil == 6 || $CodPerfil == 7 || $CodPerfil == 8 || $CodPerfil == 9 || $CodPerfil == 10 || $CodPerfil == 11 || $CodPerfil == 12 || $CodPerfil == 13 || $CodPerfil == 15 || $CodPerfil == 16 || $CodPerfil == 17 || $CodPerfil == 20 || $CodPerfil == 21) {
          ?>
        <div id="figuracomercial">
          <img id="iconecomercial" class="fadeImg" src="../imagem/iconeComercialBloqueio.PNG">
        </div>
        <?php
        }else {
          ?>
        <div id="figuracomercial">
          <a href="../View/merchandising">
          <img id="iconecomercial" class="fadeImg3" src="../imagem/iconecomercial.PNG"></a>
        </div>
        <?php
         } 
        ?>

        <?php  
        if ($CodPerfil == 4 || $CodPerfil == 5 || $CodPerfil == 6 || $CodPerfil == 7 || $CodPerfil == 8 || $CodPerfil == 9 || $CodPerfil == 10 || $CodPerfil == 11 || $CodPerfil == 13 || $CodPerfil == 14 || $CodPerfil == 15 || $CodPerfil == 16 || $CodPerfil == 17 || $CodPerfil == 20 || $CodPerfil == 21) {
          ?>
        <div id="figurafinanceiro">
          <img id="iconefinanceiroBloq" class="fadeImg" src="../imagem/iconeFinanceiroBloqueio.PNG">
        </div>
        <?php
        }else {
          ?>
        <div id="figurafinanceiro">
          <a href="../View/financeiro">
          <img id="iconefinanceiro" class="fadeImg4" src="../imagem/iconefinanceiro.PNG"></a>
        </div>  
        <?php
         } 
        ?>

        <div id="figuraBiblioteca">
          <a href="../View/tiBiblioteca">
          <img id="iconeBiblioteca" class="fadeImg5" src="../imagem/iconeBiblioteca.PNG"></a>
        </div>

        <div id="figuraRelatoriosComerciais">
          <a href="../View/relatoriosComerciais">
          <img id="iconeBiblioteca" class="fadeImg6" src="../imagem/iconeRelatoriosComerciais.PNG"></a>
        </div>

      </section>

      <section id="fundoGrupo">
        <div id="figuragrupo">
          <img id="logogrupo" class="fadeIn" src="../imagem/logogpnovo.PNG">
        </div>
      </section>

      <footer>
        <a href="../View/loginuser">SAIR</a>
      </footer>
    </body>
</html>