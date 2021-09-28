<?php

include('../Control/controleSession.php');
      
?>

<html>
    <head>
		<meta charset="UTF-8"/>
	    <title>Selecione o Mês</title>

        <!-- Faz referência a biblioteca Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

        <!-- Faz referência a biblioteca Jquery -->
        <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Última versão JavaScript compilada e minificada -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

        <!-- Faz referência a arquivo .js personalizado -->
        <script type="text/javascript"  src="../Control/Tempo.js"></script>

        <!-- Faz referência a arquivo .css personalizado -->
        <link rel="stylesheet" href="../css/teamplateMes.css" >

    </head>
        <body>
            <div id="corpo"><img id="fundoMes" src="../imagem/fundoMes.png">
            
                <div id="escrtaMes" ><img id="escrtMes" class="fadeIn" src="../imagem/escritaMes.png"></div>

                <div id="calendario"><img id="imgCalendar" src="../imagem/imgCalendar.png"></div>

                <div id="opcaoJaneiro"><a href="..\View\logCargas.php?mes=1"><img id="opcJaneiro" class="fadeImg2" src="../imagem/opcJaneiro.png"></div></a>

                <div id="opcaoFevereiro"><a href="..\View\logCargas.php?mes=2"><img id="opcFevereiro" class="fadeImg2" src="../imagem/opcFevereiro.png"></div></a>

                <div id="opcaoMarco"><a href="..\View\logCargas.php?mes=3"><img id="opcMarco" class="fadeImg2" src="../imagem/opcMarco.png"></div></a>

                <div id="opcaoAbril"><a href="..\View\logCargas.php?mes=4"><img id="opcAbril" class="fadeImg2" src="../imagem/opcAbril.png"></div></a>

                <div id="opcaoMaio"><a href="..\View\logCargas.php?mes=5"><img id="opcMaio" class="fadeImg2" src="../imagem/opcMaio.png"></div></a>

                <div id="opcaoJunho"><a href="..\View\logCargas.php?mes=6"><img id="opcJunho" class="fadeImg2" src="../imagem/opcJunho.png"></div></a>

                <div id="opcaoJulho"><a href="..\View\logCargas.php?mes=7"><img id="opcJulho" class="fadeImg2" src="../imagem/opcJulho.png"></div></a>

                <div id="opcaoAgosto"><a href="..\View\logCargas.php?mes=8"><img id="opcAgosto" class="fadeImg2" src="../imagem/opcAgosto.png"></div></a>

                <div id="opcaoSetembro"><a href="..\View\logCargas.php?mes=9"><img id="opcSetembro" class="fadeImg2" src="../imagem/opcSetembro.png"></div></a>

                <div id="opcaoOutubro"><a href="..\View\logCargas.php?mes=10"><img id="opcOutubro" class="fadeImg2" src="../imagem/opcOutubro.png"></div></a>

                <div id="opcaoNovembro"><a href="..\View\logCargas.php?mes=11"><img id="opcNovembro" class="fadeImg2" src="../imagem/opcNovembro.png"></div></a>

                <div id="opcaoDezembro"><a href="..\View\logCargas.php?mes=12"><img id="opcDezembro" class="fadeImg2" src="../imagem/opcDezembro.png"></div></a>

                <div id="botVoltar"><a href="..\View\logCargas.php?mes=1"><a href="../View/logistica.php"><img id="voltarMes" class="fadeImg3" src="../imagem/voltarMes.png"></a></div>

            </div>
        </body>
</html>