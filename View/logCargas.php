<?php

session_start();

$CodPerfil = $_SESSION['CodPerfil'];

include('../Control/controleSession.php');

if(@$_GET['mes'] == '1'){
  $mes = 1;
  $mesEscrito = "Janeiro";
}elseif(@$_GET['mes'] == '2'){
  $mes = 2;
  $mesEscrito = "Fevereiro";
}elseif(@$_GET['mes'] == '3'){
  $mes = 3;
  $mesEscrito = "Março";
}elseif(@$_GET['mes'] == '4'){
  $mes = 4;
  $mesEscrito = "Abril";
}elseif(@$_GET['mes'] == '5'){
  $mes = 5;
  $mesEscrito = "Maio";
}elseif(@$_GET['mes'] == '6'){
  $mes = 6;
  $mesEscrito = "Junho";
}elseif(@$_GET['mes'] == '7'){
  $mes = 7;
  $mesEscrito = "Julho";
}elseif(@$_GET['mes'] == '8'){
  $mes = 8;
  $mesEscrito = "Agosto";
}elseif(@$_GET['mes'] == '9'){
  $mes = 9;
  $mesEscrito = "Setembro";
}elseif(@$_GET['mes'] == '10'){
  $mes = 10;
  $mesEscrito = "Outubro";
}elseif(@$_GET['mes'] == '11'){
  $mes = 11;
  $mesEscrito = "Novembro";
}elseif(@$_GET['mes'] == '12'){
  $mes = 12;
  $mesEscrito = "Dezembro";
}           

$_SESSION['mesSelecionado'] = $mes;   
?>

<html>
  <head>
	<meta charset="UTF-8"/>
	  <title>Controle de Cargas</title>

      <!-- Faz referência a biblioteca Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

      <!-- Faz referência a biblioteca Jquery -->
      <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Última versão JavaScript compilada e minificada -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/Tempo.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"	src="../Control/validaNovaCarga.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"	src="../Control/campoPesquisa.js"></script>

      <!-- Faz referência a arquivo .css personalizado -->
      <link rel="stylesheet" href="../css/teamplatelogin.css" >

      <!-- Faz referência a arquivo .css personalizado -->
      <link rel="stylesheet" href="../css/teamplatelogcargas.css" >
    
  </head>

    <body id="tudo">
      <header id="cabecalho">
        <img id="logoloadsafe" src="../imagem/logoloadsafeofc.png">
        <img id="imgAno" src="../imagem/2021.jfif">
        <h1><?php echo $mesEscrito ?></h1>
      </header>

      <div id="espaço"></div>
      
      <div id="menu" style="background-color: gainsboro;">

      <?php
      if($CodPerfil == 3){
      ?>
        <figure id="figbotmais">
          <img id="blockInsert" src="../imagem/blockMais.png">
          <figcaption><b>Nova Carga</b></figcaption>
        </figure>
      <?php
      }else{
      ?>  
        <figure id="figbotmais">
          <img id="insertCarga" src="../imagem/mais.png">
          <figcaption><b>Nova Carga</b></figcaption>
        </figure>
      <?php
      }
      ?>  
        <figure id="figbotexpedicao">
          <a href="../View/expedicao" style="color:black;">
          <img id="botexpedicao" src="../imagem/expedicao.png">
          <figcaption><b>Expedição</b></figcaption>
        </figure>

        <figure id="figbotcargaprd">
          <a href="../View/paradas" style="color:black">
          <img id="botcargaprd" src="../imagem/cargaparada.png">
          <figcaption><b>Cargas Paradas</b></figcaption>
        </figure>

        <figure id="figbotbase">
          <a href="../View/baseMotorista" style="color:black">
          <img id="botbase" src="../imagem/base.png">
          <figcaption><b>Base de Motoristas</b></figcaption>
        </figure>

        <figure id="figbotcalendar">
          <a href="../View/selectMes" style="color:black">
          <img id="botcalendar" src="../imagem/calendario.png">
          <figcaption><b>Selecionar Mês</b></figcaption>
        </figure>

        <figure id="figbotsair">
          <a href="../Control/logout.php">
          <img id="botsair" src="../imagem/sair.png"></a>
          <figcaption><b>Sair</b></figcaption>
        </figure>
      </div>

<?php

include("../Model/conexaoIntranetGd.php");
include("../Control/selectControleCarga.php");

?>
<!-- Tela de Nova Carga - Start -->
      <div class="modal-dialog" role="document" id="novaCarga" style="display:none">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><font face="Candara"><font size = "5"><b><center>Nova Carga</center></b></font></font></h3>
            <h5 class="modal-title" id="erroInsert" style="color:red;display:none">Erro no Cadastro - Confira os Campos!</h5> <!-- Mensagem erro -->
            <h5 class="modal-title" id="okInsert" style="color:green;display:none">Carga Cadastrada com Sucesso</h5> <!-- Mensagem ok -->
          </div>
      	
        <div class="modal-body">

           <!-- Campo Tipo da Carga - Start -->
          <div class="form-group">
            <label for="recipient-tipo" class="col-form-label">Tipo da Carga</label>
            <select class="form-control" id="recipient-tipo">
            	<option value="0">Selecione:</option>
            	<option value="1">Carga Nova</option>
            	<option value="2">Reentrega</option>
            </select>
          </div>
          <!-- Campo Tipo da Carga - End -->

          <!-- Campo Carga Origem - Start -->
          <div class="form-group">
            <label for="recipient-origem" class="col-form-label">Carga Origem</label>
            <input type="number" class="form-control" id="recipient-origem">
          </div>
          <!-- Campo Carga Origem - End -->

          <!-- Campo Data de Expedição - Start -->
          <div class="form-group">
            <label for="recipient-expedicao" class="col-form-label">Data de Expedição</label>
            <input type="date" class="form-control" id="recipient-expedicao">
          </div>
          <!-- Campo Data de Expedição - End -->

          <!-- Campo Data de Agendamento - Start -->
          <div class="form-group">
            <label for="recipient-agendamento" class="col-form-label">Data de Agendamento</label>
            <input type="date" class="form-control" id="recipient-agendamento">
          </div>
          <!-- Campo Data de Agendamento - End -->

          <!-- Campo Status da Carga - Start -->
          <div class="form-group">
            <label for="recipient-status" class="col-form-label">Status da Carga</label>
            <select class="form-control" id="recipient-status">
            	<option value="0">Selecione:</option>
            	<option value="1">Parada</option>
            	<option value="2">Expedida</option>
            	<option value="3">Cancelada</option>
            </select>
          </div>
          <!-- Campo Status da Carga - End -->

          <!-- Campo Região - Start -->
          <div class="form-group">
            <label for="recipient-regiao" class="col-form-label">Região</label>
            <select class="form-control" id="recipient-regiao">
            	<option value="0">Selecione:</option>
            	<option value="1">Santa Cruz</option>
            	<option value="2">Cruz Alta</option>
            	<option value="3">Santa Maria</option>
            	<option value="4">Passo Fundo</option>
            	<option value="5">Santa Rosa</option>
            	<option value="6">Frederico W.</option>
            	<option value="7">Erechim</option>
            	<option value="8">Uruguaiana</option>
            	<option value="9">Pelotas</option>
            	<option value="10">Bento Gonçalves</option>
            </select>
          </div>
          <!-- Campo Região - End -->

          <!-- Campo Cliente/Cidade - Start -->
          <div class="form-group">
            <label for="recipient-cliente" class="col-form-label">Cliente/Cidade</label>
            <input type="text" class="form-control" id="recipient-cliente" required>
          </div>
          <!-- Campo Cliente/Cidade - End -->

          <!-- Campo Carga Nestlé - Start -->
          <div class="form-group">
            <label for="recipient-cargaNestle" class="col-form-label">Carga Nestlé</label>
            <input type="number" class="form-control" id="recipient-cargaNestle">
          </div>
          <!-- Campo Carga Nestlé - End -->

          <!-- Campo Quantidade Carga Nestlé - Start -->
          <div class="form-group">
            <label for="recipient-qtdNestle" class="col-form-label">Quantidade Carga Nestlé</label>
            <input type="number" class="form-control" id="recipient-qtdNestle">
          </div>
          <!-- Campo Quantidade Carga Nestlé - End -->

          <!-- Campo Peso Carga Nestlé - Start -->
          <div class="form-group">
            <label for="recipient-pesoNestle" class="col-form-label">Peso Carga Nestlé</label>
            <input type="number" class="form-control" id="recipient-pesoNestle">
          </div>
          <!-- Campo Peso Carga Nestlé - End -->

          <!-- Campo Valor Carga Nestlé - Start -->
          <div class="form-group">
            <label for="recipient-valorNestle" class="col-form-label">Valor Carga Nestlé</label>
            <input type="number" class="form-control" id="recipient-valorNestle">
          </div>
          <!-- Campo Valor Carga Nestlé - End -->

          <!-- Campo Carga Vigor - Start -->
          <div class="form-group">
            <label for="recipient-cargaVigor" class="col-form-label">Carga Vigor</label>
            <input type="number" class="form-control" id="recipient-cargaVigor">
          </div>
          <!-- Campo Carga Vigor - End -->

          <!-- Campo Quantidade Carga Vigor - Start -->
          <div class="form-group">
            <label for="recipient-qtdVigor" class="col-form-label">Quantidade Carga Vigor</label>
            <input type="number" class="form-control" id="recipient-qtdVigor">
          </div>
          <!-- Campo Quantidade Carga Vigor - End -->

          <!-- Campo Peso Carga Vigor - Start -->
          <div class="form-group">
            <label for="recipient-pesoVigor" class="col-form-label">Peso Carga Vigor</label>
            <input type="number" class="form-control" id="recipient-pesoVigor">
          </div>
          <!-- Campo Peso Carga Vigor - End -->

          <!-- Campo Valor Carga Vigor - Start -->
          <div class="form-group">
            <label for="recipient-valorVigor" class="col-form-label">Valor Carga Vigor</label>
            <input type="number" class="form-control" id="recipient-valorVigor">
          </div>
          <!-- Campo Valor Carga Vigor - End -->

          <!-- Campo Carga Atacado - Start -->
          <div class="form-group">
            <label for="recipient-cargaAtacado" class="col-form-label">Carga Atacado</label>
            <input type="number" class="form-control" id="recipient-cargaAtacado">
          </div>
          <!-- Campo Carga Atacado - End -->

          <!-- Campo Quantidade Carga Atacado - Start -->
          <div class="form-group">
            <label for="recipient-qtdAtacado" class="col-form-label">Quantidade Carga Atacado</label>
            <input type="number" class="form-control" id="recipient-qtdAtacado">
          </div>
          <!-- Campo Quantidade Carga Atacado - End -->

          <!-- Campo Peso Carga Atacado - Start -->
          <div class="form-group">
            <label for="recipient-pesoAtacado" class="col-form-label">Peso Carga Atacado</label>
            <input type="number" class="form-control" id="recipient-pesoAtacado">
          </div>
          <!-- Campo Peso Carga Atacado - End -->

          <!-- Campo Valor Carga Atacado - Start -->
          <div class="form-group">
            <label for="recipient-valorAtacado" class="col-form-label">Valor Carga Atacado</label>
            <input type="number" class="form-control" id="recipient-valorAtacado">
          </div>
          <!-- Campo Valor Carga Atacado - End -->

          <!-- Campo Carga Italac - Start -->
          <div class="form-group">
            <label for="recipient-cargaItalac" class="col-form-label">Carga Italac</label>
            <input type="number" class="form-control" id="recipient-cargaItalac">
          </div>
          <!-- Campo Carga Italac - End -->

          <!-- Campo Quantidade Carga Italac - Start -->
          <div class="form-group">
            <label for="recipient-qtdItalac" class="col-form-label">Quantidade Carga Italac</label>
            <input type="number" class="form-control" id="recipient-qtdItalac">
          </div>
          <!-- Campo Quantidade Carga Italac - End -->

          <!-- Campo Peso Carga Italac - Start -->
          <div class="form-group">
            <label for="recipient-pesoItalac" class="col-form-label">Peso Carga Italac</label>
            <input type="number" class="form-control" id="recipient-pesoItalac">
          </div>
          <!-- Campo Peso Carga Italac - End -->

          <!-- Campo Valor Carga Italac - Start -->
          <div class="form-group">
            <label for="recipient-valorItalac" class="col-form-label">Valor Carga Italac</label>
            <input type="number" class="form-control" id="recipient-valorItalac">
          </div>
          <!-- Campo Valor Carga Italac - End -->

          <!-- Campo Carga Pavioli - Start -->
          <div class="form-group">
            <label for="recipient-cargaPavioli" class="col-form-label">Carga Pavioli</label>
            <input type="number" class="form-control" id="recipient-cargaPavioli">
          </div>
          <!-- Campo Carga Pavioli - End -->

          <!-- Campo Quantidade Carga Pavioli - Start -->
          <div class="form-group">
            <label for="recipient-qtdPavioli" class="col-form-label">Quantidade Carga Pavioli</label>
            <input type="number" class="form-control" id="recipient-qtdPavioli">
          </div>
          <!-- Campo Quantidade Carga Pavioli - End -->

          <!-- Campo Peso Carga Pavioli - Start -->
          <div class="form-group">
            <label for="recipient-pesoPavioli" class="col-form-label">Peso Carga Pavioli</label>
            <input type="number" class="form-control" id="recipient-pesoPavioli">
          </div>
          <!-- Campo Peso Carga Pavioli - End -->

          <!-- Campo Valor Carga Pavioli - Start -->
          <div class="form-group">
            <label for="recipient-valorPavioli" class="col-form-label">Valor Carga Pavioli</label>
            <input type="number" class="form-control" id="recipient-valorPavioli">
          </div>
          <!-- Campo Valor Carga Pavioli - End -->

          <!-- Campo Carga Pedro Log - Start -->
          <div class="form-group">
            <label for="recipient-cargaPedroLog" class="col-form-label">Carga Pedro Log</label>
            <input type="number" class="form-control" id="recipient-cargaPedroLog">
          </div>
          <!-- Campo Carga Pedro Log - End -->

          <!-- Campo Quantidade Carga Pedro Log - Start -->
          <div class="form-group">
            <label for="recipient-qtdPedroLog" class="col-form-label">Quantidade Carga Pedro Log</label>
            <input type="number" class="form-control" id="recipient-qtdPedroLog">
          </div>
          <!-- Campo Quantidade Carga Pedro Log - End -->

          <!-- Campo Peso Carga Pedro Log - Start -->
          <div class="form-group">
            <label for="recipient-pesoPedroLog" class="col-form-label">Peso Carga Pedro Log</label>
            <input type="number" class="form-control" id="recipient-pesoPedroLog">
          </div>
          <!-- Campo Peso Carga Pedro Log - End -->

          <!-- Campo Valor Carga Pedro Log - Start -->
          <div class="form-group">
            <label for="recipient-valorPedroLog" class="col-form-label">Valor Carga Pedro Log</label>
            <input type="number" class="form-control" id="recipient-valorPedroLog">
          </div>
          <!-- Campo Valor Carga Pedro Log - End -->

          <!-- Campo IdUser - Start -->
          <div class="form-group">
            <label for="recipient-IdUser" class="col-form-label" style="display:none">IdUser</label>
            <input type="number" class="form-control" id="recipient-IdUser" style="display:none">
          </div>
          <!-- Campo IdUser - End -->

        </div>
          <!-- Botão Acessar - Start -->
          <div class="modal-footer">
            <a href="../View/logCargas.php?mes=<?php echo $mes;?>"><button type="button"  class="btn btn-secondary" id="voltar">Voltar</button></a>
            <button type="button"  class="btn btn-secondary" id="criarCarga">Criar</button>           
          </div>
          <!-- Botão Acessar - End -->
    	</div>
	    </div>
      <!-- Tela de Nova Carga - End -->

      <div id="espaço2"></div>

      <table id="tabelaprincipal" class="table table-dark table-striped" width="200px">
        <tr>
          <td><center><b>Nº Carga</b></center></td>
          <td><center><b>Tipo da Carga</b></center></td>
          <td><center><b>Carga Origem</b></center></td>
          <td><center><b>Data Criação</b></center></td>
          <td><center><b>Data Expedição</b></center></td>
          <td><center><b>Data Agendamento</b></center></td>
          <td><center><b>Status da Carga</b></center></td>
          <td><center><b>Região</b></center></td>
          <td><center><b>Cliente/Cidade</b></center></td>
          <td><center><b>Carga Nestlé</b></center></td>
          <td><center><b>Quantidade Nestlé</b></center></td>
          <td><center><b>Peso Nestlé</b></center></td>
          <td><center><b>Valor Nestlé</b></center></td>
          <td><center><b>Carga Vigor</b></center></td>
          <td><center><b>Quantidade Vigor</b></center></td>
          <td><center><b>Peso Vigor</b></center></td>
          <td><center><b>Valor Vigor</b></center></td>
          <td><center><b>Carga Atacado</b></center></td>
          <td><center><b>Quantidade Atacado</b></center></td>
          <td><center><b>Peso Atacado</b></center></td>
          <td><center><b>Valor Atacado</b></center></td>
          <td><center><b>Carga Italac</b></center></td>
          <td><center><b>Quantidade Italac</b></center></td>
          <td><center><b>Peso Italac</b></center></td>
          <td><center><b>Valor Italac</b></center></td>
          <td><center><b>Carga Pavioli</b></center></td>
          <td><center><b>Quantidade Pavioli</b></center></td>
          <td><center><b>Peso Pavioli</b></center></td>
          <td><center><b>Valor Pavioli</b></center></td>
          <td><center><b>Carga Pedro Log</b></center></td>
          <td><center><b>Quantidade Pedro Log</b></center></td>
          <td><center><b>Peso Pedro Log</b></center></td>
          <td><center><b>Valor Pedro Log</b></center></td>
          <td><center><b>Total Quantidade</b></center></td>
          <td><center><b>Total Peso</b></center></td>
          <td><center><b>Total Valor</b></center></td>
          <td><center><b>Criado Por</b></center></td>
          <td><center><b>Alterado Por</b></center></td>
        </tr>

 	      <tr>
     	  	<th><input type="text" id="Nº Carga"/></th>
          <th><input type="text" id="Tipo da Carga"/></th>
          <th><input type="text" id="Carga Origem"/></th>
     	  	<th><input type="text" id="Data Criação"/></th>
          <th><input type="text" id="Data Expedição"/></th>
          <th><input type="text" id="Data Agendamento"/></th>
     	  	<th><input type="text" id="Status da Carga"/></th>
          <th><input type="text" id="Região"/></th>
          <th><input type="text" id="Cliente/Cidade"/></th>
     	  	<th><input type="text" id="Carga Nestlé"/></th>
          <th><input type="text" id="Quantidade Nestlé"/></th>
          <th><input type="text" id="Peso Nestlé"/></th>
     	  	<th><input type="text" id="Valor Nestlé"/></th>
          <th><input type="text" id="Carga Vigor"/></th>
          <th><input type="text" id="Quantidade Vigor"/></th>
     	  	<th><input type="text" id="Peso Vigor"/></th>
          <th><input type="text" id="Valor Vigor"/></th>
          <th><input type="text" id="Carga Atacado"/></th>
     	  	<th><input type="text" id="Quantidade Atacado"/></th>
          <th><input type="text" id="Peso Atacado"/></th>
          <th><input type="text" id="Valor Atacado"/></th>
     	  	<th><input type="text" id="Carga Italac"/></th>
          <th><input type="text" id="Quantidade Italac"/></th>
          <th><input type="text" id="Peso Italac"/></th>
     	  	<th><input type="text" id="Valor Italac"/></th>
          <th><input type="text" id="Carga Pavioli"/></th>
          <th><input type="text" id="Quantidade Pavioli"/></th>
          <th><input type="text" id="Peso Pavioli"/></th>
          <th><input type="text" id="Valor Pavioli"/></th>
     	  	<th><input type="text" id="Carga Pedro Log"/></th>
          <th><input type="text" id="Quantidade Pedro Log"/></th>
          <th><input type="text" id="Peso Pedro Log"/></th>
          <th><input type="text" id="Valor Pedro Log"/></th>
     	  	<th><input type="text" id="Total Quantidade"/></th>
          <th><input type="text" id="Total Peso"/></th>
          <th><input type="text" id="Total Valor"/></th>                        
          <th><input type="text" id="Criado Por"/></th>
          <th><input type="text" id="Alterado Por"/></th> 
 	      </tr>
 <?php
 
 while (odbc_fetch_row($result)) {

 ?>

        <tr>
          <?php
            if($CodPerfil == 3){
          ?>
          <td><center><img id="" src="../imagem/blockLapis.png" width="16px" height="16px"></a>&nbsp&nbsp<?php echo odbc_result($result, "id_carga");?></center></td>
          <?php
          }else{
          ?>  
          <td><center><a href="../View/editarCarga.php?id_carga=<?php echo odbc_result($result, "id_carga");?>"><img id="" src="../imagem/lapis.png" width="16px" height="16px"></a>&nbsp&nbsp<?php echo odbc_result($result, "id_carga");?></center></td>  
          <?php
          }
          ?>
          <td><?php echo odbc_result($result, "desc_tipo");?></td>
          <td><?php echo odbc_result($result, "carga_origem");?></td>
          <td><?php echo odbc_result($result, "date_criacao");?></td>
          <td><?php echo odbc_result($result, "date_expedicao");?></td>
          <td><?php echo odbc_result($result, "date_agendamento");?></td>
          <td><?php echo odbc_result($result, "desc_status");?></td>
          <td><?php echo odbc_result($result, "desc_regiao");?></td>
          <td><?php echo odbc_result($result, "cliente_cidade");?></td>
          <td><?php echo odbc_result($result, "carga_nestle");?></td>
          <td><?php echo odbc_result($result, "qtd_nestle");?></td>
          <td><?php echo odbc_result($result, "peso_nestle");?></td>
          <td><?php echo odbc_result($result, "valor_nestle");?></td>
          <td><?php echo odbc_result($result, "carga_vigor");?></td>
          <td><?php echo odbc_result($result, "qtd_vigor");?></td>
          <td><?php echo odbc_result($result, "peso_vigor");?></td>
          <td><?php echo odbc_result($result, "valor_vigor");?></td>
          <td><?php echo odbc_result($result, "carga_atacado");?></td>
          <td><?php echo odbc_result($result, "qtd_atacado");?></td>
          <td><?php echo odbc_result($result, "peso_atacado");?></td>
          <td><?php echo odbc_result($result, "valor_atacado");?></td>
          <td><?php echo odbc_result($result, "carga_italac");?></td>
          <td><?php echo odbc_result($result, "qtd_italac");?></td>
          <td><?php echo odbc_result($result, "peso_italac");?></td>
          <td><?php echo odbc_result($result, "valor_italac");?></td>
          <td><?php echo odbc_result($result, "carga_pavioli");?></td>
          <td><?php echo odbc_result($result, "qtd_pavioli");?></td>
          <td><?php echo odbc_result($result, "peso_pavioli");?></td>
          <td><?php echo odbc_result($result, "valor_pavioli");?></td>
          <td><?php echo odbc_result($result, "carga_log");?></td>
          <td><?php echo odbc_result($result, "qtd_log");?></td>
          <td><?php echo odbc_result($result, "peso_log");?></td>
          <td><?php echo odbc_result($result, "valor_log");?></td>
          <td><?php echo odbc_result($result, "qtd_nestle")+odbc_result($result, "qtd_vigor")+odbc_result($result, "qtd_atacado")+odbc_result($result, "qtd_italac")+odbc_result($result, "qtd_pavioli")+odbc_result($result, "qtd_log");?></td>
          <td><?php echo odbc_result($result, "peso_nestle")+odbc_result($result, "peso_vigor")+odbc_result($result, "peso_atacado")+odbc_result($result, "peso_italac")+odbc_result($result, "peso_pavioli")+odbc_result($result, "peso_log");?></td>
          <td><?php echo odbc_result($result, "valor_nestle")+odbc_result($result, "valor_vigor")+odbc_result($result, "valor_atacado")+odbc_result($result, "valor_italac")+odbc_result($result, "valor_pavioli")+odbc_result($result, "valor_log");?></td>
          <td><?php echo odbc_result($result, "NameInsert");?></td>
          <td><?php echo odbc_result($result, "NameUpdate");?></td>
        </tr>
 <?php
 }
 odbc_close($con);
 ?>
      </table>
    </body>
</html>