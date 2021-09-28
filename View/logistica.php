<?php

include('../Control/controleSession.php');
      
?>

<html>
	<head>
		<title>Setor Logístico</title>
		<!-- Faz referência a biblioteca Bootstrap -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

    	<!-- Faz referência a biblioteca Jquery -->
    	<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    	<!-- Última versão JavaScript compilada e minificada -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

		<!-- Faz referência a arquivo .js personalizado -->
    	<script type="text/javascript"  src="../Control/Tempo.js"></script>

   		<!-- Faz referência a icone IGD -->
    	<link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">

    	<!-- Faz referência a arquivo .css personalizado -->
    	<link rel="stylesheet" href="../css/teamplatelogistica.css" >
    
	</head>
		<body>

			<div id="corpo">
				<img id="imgfundo" src="../imagem/fundolog.png">
		
				<div id="escrtlog">
					<img id="titulolog" src="../imagem/titulologistica.png">
				</div>

				<div id="escrtselec">
					<img id="escritaselecione" src="../imagem/selecioneopcao.png">
				</div>

				<div id="botvoltar">
					<a href="../View/setores.php">
					<img id="voltarlog" src="../imagem/voltarlog.png"></a>
				</div>

				<div id="botsair">
					<a href="../Control/logout.php">
					<img id="sairlog" src="../imagem/sairlog.png"></a>
				</div>


				<div id="opc1" class="FadeIn">
					<a href="http://localhost/intranetgd/View/selectMes">
					<img id="opcao1" src="../imagem/circulovazio.png"></a>
					<img id="imgLogo" src="../imagem/logoLoadSafe.png">
				</div>
				<div id="escritaLoad" class="fadeImg2"><img id="loadEscrito" src="../imagem/LSEscrito.png"></div>

				<!--<div id="opc2">
					<a id="botcontrlcarga" href="http://localhost/intranetgd/View/logCargas">
					<img id="opcao2" src="../imagem/circulovazio.png"></a>
				</div>

				<div id="opc3">
					<a id="botcontrlcarga" href="http://localhost/intranetgd/View/logCargas">
					<img id="opcao3" src="../imagem/circulovazio.png"></a>
				</div>


				<div id="opc4">
					<a id="botcontrlcarga" href="http://localhost/intranetgd/View/logCargas">
					<img id="opcao4" src="../imagem/circulovazio.png"></a>
				</div> -->


			</div>
		</body>
</html>