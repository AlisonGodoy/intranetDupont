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
					<h1 id="titulolog">LOGÍSTICA</h1>
				</div>

				<div id="escrtselec">
					<h1 id="escritaselecione">Selecione a opção:</h1>
				</div>

				<div id="botvoltar">
					<a href="../View/setores.php">VOLTAR</a>
				</div>

				<div id="botsair">
					<a href="../Control/logout.php">SAIR</a>			
				</div>

<?php

	$P_Dia = date("Y-m-01");
	$U_Dia = date("Y-m-t");
	$page  = 0;
	
?>
				<div id="imgLogo" class="FadeIn">
					<a href="http://localhost/intranetgd/View/logControleCargas.php?dataInicio=<?php echo $P_Dia;?>&&dataFim=<?php echo $U_Dia;?>&&page=<?php echo $page;?>">
					<img id="loadsafe" src="../imagem/logoloadsafeofc.png">
				</div>
			</div>		
		</body>
</html>