<?php

include('../Control/controleSession.php');
      
?>

<html>
  <head>
	<meta charset="UTF-8"/>
	<title>Edição de Carga</title>

  <!-- Faz referência a biblioteca Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

  <!-- Faz referência a biblioteca Jquery -->
  <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Última versão JavaScript compilada e minificada -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

  <!-- Faz referência a arquivo .css personalizado -->
  <link rel="stylesheet" href="../css/teamplatelogin.css" >

  <!-- Faz referência a arquivo .js personalizado -->
  <script type="text/javascript"  src="../Control/Tempo.js"></script>
        
  <!-- Faz referência a arquivo .js personalizado -->
  <script type="text/javascript"	src="../Control/validaEditCarga.js"></script>
    
  </head>
  <body>

<?php

include("../Model/conexaoIntranetGd.php");

$id_carga = $_GET['id_carga'];

$query = "SELECT a.id_carga
      ,b.desc_tipo
      ,a.carga_origem
      ,a.date_criacao
      ,a.date_expedicao
      ,a.date_agendamento
      ,c.desc_status
      ,d.desc_regiao
      ,a.cliente_cidade
      ,a.carga_nestle
      ,a.qtd_nestle
      ,a.peso_nestle
      ,a.valor_nestle
      ,a.carga_vigor
      ,a.qtd_vigor
      ,a.peso_vigor
      ,a.valor_vigor
      ,a.carga_atacado
      ,a.qtd_atacado
      ,a.peso_atacado
      ,a.valor_atacado
      ,a.carga_italac
      ,a.qtd_italac
      ,a.peso_italac
      ,a.valor_italac
      ,a.carga_pavioli
      ,a.qtd_pavioli
      ,a.peso_pavioli
      ,a.valor_pavioli
      ,a.carga_log
      ,a.qtd_log
      ,a.peso_log
      ,a.valor_log

  FROM controleCarga AS a
  LEFT JOIN tipoCarga AS b ON a.id_tipo = b.id_tipo
  LEFT JOIN statusCarga AS c ON a.id_status = c.id_status
  LEFT JOIN Regiao AS d ON a.id_regiao = d.id_regiao  
  WHERE a.id_carga = ".$id_carga."

 ";
	
$result = odbc_exec($con , $query);

while (odbc_fetch_row($result)) {

?>
 <!-- Tela de Editar Carga - Start -->
    <div class="modal-dialog" role="document" id="editCarga">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel"><font face="Verdana"><font size = "5"><b>Edição Carga Nº <?php echo odbc_result($result, "id_carga");?></b></font></font></h3>
          <h5 class="modal-title" id="erroEdit" style="color:red;display:none">Erro no Cadastro - Confira os Campos!</h5> <!-- Mensagem erro -->
          <h5 class="modal-title" id="okEdit" style="color:green;display:none">Carga Alterada com Sucesso</h5> <!-- Mensagem ok -->
        </div>
      	
      <div class="modal-body">
        	<!-- Campo ID da Carga - Start -->
        <div class="form-group">
          <label for="recipientE-id" class="col-form-label" style="display:none">ID da Carga</label>
          <input class="form-control" id="recipientE-id" value="<?php echo odbc_result($result, "id_carga");?>" style="display:none">
            	
        </div>
          <!-- Campo ID da Carga - End -->

           <!-- Campo Tipo da Carga - Start -->
        <div class="form-group">
          <label for="recipientE-tipo" class="col-form-label">Tipo da Carga</label>
          <select class="form-control" id="recipientE-tipo" value="<?php echo odbc_result($result, "desc_tipo");?>">
            <option value="1">Carga Nova</option>
            <option value="2">Reentrega</option>
          </select>
        </div>
          <!-- Campo Tipo da Carga - End -->

          <!-- Campo Carga Origem - Start -->
        <div class="form-group">
          <label for="recipientE-origem" class="col-form-label">Carga Origem</label>
          <input type="number" class="form-control" id="recipientE-origem" value="<?php echo odbc_result($result, "carga_origem");?>">
        </div>
          <!-- Campo Carga Origem - End -->

          <!-- Campo Data de Expedição - Start -->
        <div class="form-group">
          <label for="recipientE-expedicao" class="col-form-label">Data de Expedição</label>
            <input type="date" class="form-control" id="recipientE-expedicao" value="<?php echo odbc_result($result, "date_expedicao");?>">
        </div>
          <!-- Campo Data de Expedição - End -->

          <!-- Campo Data de Agendamento - Start -->
        <div class="form-group">
          <label for="recipientE-agendamento" class="col-form-label">Data de Agendamento</label>
          <input type="date" class="form-control" id="recipientE-agendamento" value="<?php echo odbc_result($result, "date_agendamento");?>">
        </div>
          <!-- Campo Data de Agendamento - End -->

          <!-- Campo Status da Carga - Start -->
        <div class="form-group">
          <label for="recipientE-status" class="col-form-label">Status da Carga</label>
          <select class="form-control" id="recipientE-status" value="<?php echo odbc_result($result, "desc_status");?>">
            <option value="0">Selecione:</option>
            <option value="1">Parada</option>
            <option value="2">Expedida</option>
            <option value="3">Cancelada</option>
          </select>
        </div>
          <!-- Campo Status da Carga - End -->

          <!-- Campo Região - Start -->
        <div class="form-group">
          <label for="recipientE-regiao" class="col-form-label">Região</label>
          <select class="form-control" id="recipientE-regiao" value="<?php echo odbc_result($result, "desc_regiao");?>">
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
          <label for="recipientE-cliente" class="col-form-label">Cliente/Cidade</label>
          <input type="text" class="form-control" id="recipientE-cliente" value="<?php echo odbc_result($result, "cliente_cidade");?>" required> 
        </div>
          <!-- Campo Cliente/Cidade - End -->

          <!-- Campo Carga Nestlé - Start -->
        <div class="form-group">
          <label for="recipientE-cargaNestle" class="col-form-label">Carga Nestlé</label>
          <input type="number" class="form-control" id="recipientE-cargaNestle" value="<?php echo odbc_result($result, "carga_nestle");?>">
        </div>
          <!-- Campo Carga Nestlé - End -->

          <!-- Campo Quantidade Carga Nestlé - Start -->
        <div class="form-group">
          <label for="recipientE-qtdNestle" class="col-form-label">Quantidade Carga Nestlé</label>
          <input type="number" class="form-control" id="recipientE-qtdNestle" value="<?php echo odbc_result($result, "qtd_nestle");?>">
        </div>
          <!-- Campo Quantidade Carga Nestlé - End -->

          <!-- Campo Peso Carga Nestlé - Start -->
        <div class="form-group">
          <label for="recipientE-pesoNestle" class="col-form-label">Peso Carga Nestlé</label>
          <input type="number" class="form-control" id="recipientE-pesoNestle" value="<?php echo odbc_result($result, "peso_nestle");?>">
        </div>
          <!-- Campo Peso Carga Nestlé - End -->

          <!-- Campo Valor Carga Nestlé - Start -->
        <div class="form-group">
          <label for="recipientE-valorNestle" class="col-form-label">Valor Carga Nestlé</label>
          <input type="number" class="form-control" id="recipientE-valorNestle" value="<?php echo odbc_result($result, "valor_nestle");?>">
        </div>
          <!-- Campo Valor Carga Nestlé - End -->

          <!-- Campo Carga Vigor - Start -->
        <div class="form-group">
          <label for="recipientE-cargaVigor" class="col-form-label">Carga Vigor</label>
          <input type="number" class="form-control" id="recipientE-cargaVigor" value="<?php echo odbc_result($result, "carga_vigor");?>">
        </div>
          <!-- Campo Carga Vigor - End -->

          <!-- Campo Quantidade Carga Vigor - Start -->
        <div class="form-group">
          <label for="recipientE-qtdVigor" class="col-form-label">Quantidade Carga Vigor</label>
          <input type="number" class="form-control" id="recipientE-qtdVigor" value="<?php echo odbc_result($result, "qtd_vigor");?>">
        </div>
          <!-- Campo Quantidade Carga Vigor - End -->

          <!-- Campo Peso Carga Vigor - Start -->
        <div class="form-group">
          <label for="recipientE-pesoVigor" class="col-form-label">Peso Carga Vigor</label>
          <input type="number" class="form-control" id="recipientE-pesoVigor" value="<?php echo odbc_result($result, "peso_vigor");?>">
        </div>
          <!-- Campo Peso Carga Vigor - End -->

          <!-- Campo Valor Carga Vigor - Start -->
        <div class="form-group">
          <label for="recipientE-valorVigor" class="col-form-label">Valor Carga Vigor</label>
          <input type="number" class="form-control" id="recipientE-valorVigor" value="<?php echo odbc_result($result, "valor_vigor");?>">
        </div>
          <!-- Campo Valor Carga Vigor - End -->

          <!-- Campo Carga Atacado - Start -->
        <div class="form-group">
          <label for="recipientE-cargaAtacado" class="col-form-label">Carga Atacado</label>
          <input type="number" class="form-control" id="recipientE-cargaAtacado" value="<?php echo odbc_result($result, "carga_atacado");?>">
        </div>
          <!-- Campo Carga Atacado - End -->

          <!-- Campo Quantidade Carga Atacado - Start -->
        <div class="form-group">
          <label for="recipientE-qtdAtacado" class="col-form-label">Quantidade Carga Atacado</label>
          <input type="number" class="form-control" id="recipientE-qtdAtacado" value="<?php echo odbc_result($result, "qtd_atacado");?>">
        </div>
          <!-- Campo Quantidade Carga Atacado - End -->

          <!-- Campo Peso Carga Atacado - Start -->
        <div class="form-group">
          <label for="recipientE-pesoAtacado" class="col-form-label">Peso Carga Atacado</label>
          <input type="number" class="form-control" id="recipientE-pesoAtacado" value="<?php echo odbc_result($result, "peso_atacado");?>">
        </div>
          <!-- Campo Peso Carga Atacado - End -->

          <!-- Campo Valor Carga Atacado - Start -->
        <div class="form-group">
          <label for="recipientE-valorAtacado" class="col-form-label">Valor Carga Atacado</label>
          <input type="number" class="form-control" id="recipientE-valorAtacado" value="<?php echo odbc_result($result, "valor_atacado");?>">
        </div>
          <!-- Campo Valor Carga Atacado - End -->

          <!-- Campo Carga Italac - Start -->
        <div class="form-group">
          <label for="recipientE-cargaItalac" class="col-form-label">Carga Italac</label>
          <input type="number" class="form-control" id="recipientE-cargaItalac" value="<?php echo odbc_result($result, "carga_italac");?>">
        </div>
          <!-- Campo Carga Italac - End -->

          <!-- Campo Quantidade Carga Italac - Start -->
        <div class="form-group">
          <label for="recipientE-qtdItalac" class="col-form-label">Quantidade Carga Italac</label>
          <input type="number" class="form-control" id="recipientE-qtdItalac" value="<?php echo odbc_result($result, "qtd_italac");?>">
        </div>
          <!-- Campo Quantidade Carga Italac - End -->

          <!-- Campo Peso Carga Italac - Start -->
        <div class="form-group">
          <label for="recipientE-pesoItalac" class="col-form-label">Peso Carga Italac</label>
          <input type="number" class="form-control" id="recipientE-pesoItalac" value="<?php echo odbc_result($result, "peso_italac");?>">
        </div>
          <!-- Campo Peso Carga Italac - End -->

          <!-- Campo Valor Carga Italac - Start -->
        <div class="form-group">
          <label for="recipientE-valorItalac" class="col-form-label">Valor Carga Italac</label>
          <input type="number" class="form-control" id="recipientE-valorItalac" value="<?php echo odbc_result($result, "valor_italac");?>">
        </div>
          <!-- Campo Valor Carga Italac - End -->

          <!-- Campo Carga Pavioli - Start -->
        <div class="form-group">
          <label for="recipientE-cargaPavioli" class="col-form-label">Carga Pavioli</label>
          <input type="number" class="form-control" id="recipientE-cargaPavioli" value="<?php echo odbc_result($result, "carga_pavioli");?>">
        </div>
          <!-- Campo Carga Pavioli - End -->

          <!-- Campo Quantidade Carga Pavioli - Start -->
        <div class="form-group">
          <label for="recipientE-qtdPavioli" class="col-form-label">Quantidade Carga Pavioli</label>
          <input type="number" class="form-control" id="recipientE-qtdPavioli" value="<?php echo odbc_result($result, "qtd_pavioli");?>">
        </div>
          <!-- Campo Quantidade Carga Pavioli - End -->

          <!-- Campo Peso Carga Pavioli - Start -->
        <div class="form-group">
          <label for="recipientE-pesoPavioli" class="col-form-label">Peso Carga Pavioli</label>
          <input type="number" class="form-control" id="recipientE-pesoPavioli" value="<?php echo odbc_result($result, "peso_pavioli");?>">
        </div>
          <!-- Campo Peso Carga Pavioli - End -->

          <!-- Campo Valor Carga Pavioli - Start -->
        <div class="form-group">
          <label for="recipientE-valorPavioli" class="col-form-label">Valor Carga Pavioli</label>
          <input type="number" class="form-control" id="recipientE-valorPavioli" value="<?php echo odbc_result($result, "valor_pavioli");?>">
        </div>
          <!-- Campo Valor Carga Pavioli - End -->

          <!-- Campo Carga Pedro Log - Start -->
        <div class="form-group">
          <label for="recipientE-cargaPedroLog" class="col-form-label">Carga Pedro Log</label>
          <input type="number" class="form-control" id="recipientE-cargaPedroLog" value="<?php echo odbc_result($result, "carga_log");?>">
        </div>
          <!-- Campo Carga Pedro Log - End -->

          <!-- Campo Quantidade Carga Pedro Log - Start -->
        <div class="form-group">
          <label for="recipientE-qtdPedroLog" class="col-form-label">Quantidade Carga Pedro Log</label>
          <input type="number" class="form-control" id="recipientE-qtdPedroLog" value="<?php echo odbc_result($result, "qtd_log");?>">
        </div>
          <!-- Campo Quantidade Carga Pedro Log - End -->

          <!-- Campo Peso Carga Pedro Log - Start -->
        <div class="form-group">
          <label for="recipientE-pesoPedroLog" class="col-form-label">Peso Carga Pedro Log</label>
          <input type="number" class="form-control" id="recipientE-pesoPedroLog" value="<?php echo odbc_result($result, "peso_log");?>">
        </div>
          <!-- Campo Peso Carga Pedro Log - End -->

          <!-- Campo Valor Carga Pedro Log - Start -->
        <div class="form-group">
          <label for="recipientE-valorPedroLog" class="col-form-label">Valor Carga Pedro Log</label>
          <input type="number" class="form-control" id="recipientE-valorPedroLog" value="<?php echo odbc_result($result, "valor_log");?>">
        </div>
          <!-- Campo Valor Carga Pedro Log - End -->

          <!-- Campo Id Update - Start -->
        <div class="form-group">
          <label for="recipientE-idUpdate" class="col-form-label" style="display:none">ID da Carga</label>
          <input class="form-control" id="recipientE-idUpdate" value="$_SESSION['CodUser'];?>" style="display:none"> 
        </div>
          <!-- Campo ID Update - End -->

      </div>
          <!-- Botão Acessar - Start -->
        <div class="modal-footer">
          <button type="button"  class="btn btn-secondary" id="voltar">Voltar</button>
          <button type="button"  class="btn btn-secondary" id="updateCarga">Salvar</button>           
        </div>
          <!-- Botão Acessar - End -->
    	</div>
	  </div>
      <!-- Tela de Editar Carga - End -->
 <?php
 }
 odbc_close($con);
?>
  </body>
</html>