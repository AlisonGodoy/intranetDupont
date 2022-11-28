<html>
  <head>
  <meta charset="UTF-8"/>

    <title>Controle de Cargas</title>

      <!-- Faz referência a arquivo .css personalizado -->
      <link rel="stylesheet" href="../css/teamplatelogcargas.css" > 

      <!-- Faz referência a biblioteca Jquery -->
      <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Faz referência a biblioteca de Mascaras Jquery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/Tempo.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/logValidaModais.js" defer></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/logAlteraCamposTabela.js"></script>

      <!--jQuery library file -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
      <!--Datatable plugin JS library file -->
      <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

  </head>

    <body id="tudo">

      <!---CODIGO MERGE--->
      <nav class="cabecalho">   

        <figure class="criar-carga">
          <figcaption>Criar Carga</figcaption>
          <button class="botAbrir" onclick="ModalCarga()"><img src="../imagem/mais.png" alt="criar carga"></button>
        </figure>
    
        <figure class="criar-operacao">
          <figcaption>Criar Operação</figcaption>
          <button class="botAbrir" onclick="ModalOper()"><img src="../imagem/icone-oper.png" alt="criar operação" ></button>
        </figure>

        <figure class="criar-regiao">
          <figcaption>Criar Região</figcaption>
          <button class="botAbrir" onclick="ModalRegiao()"><img src="../imagem/icone-regiao.png" alt="criar regiao"></button>
        </figure>

        <figure class="criar-status">
          <figcaption>Criar Status</figcaption>
          <button class="botAbrir" onclick="ModalStatus()"><img src="../imagem/icone-status.png" alt="criar status"></button>
        </figure>

        <button style="background-color: blue; color: white;" id="open" onclick="ModalEditar()">ABRIR</button>

  </nav>

  <!---MODAL CRIAR CARGA--->
  <div id="modalCriarCarga" class="modal-cont">
    

      <div id="modal" class="modal">
        <h1>CRIAÇÃO NOVA CARGA</h1> 
        
        <div id="numCarga">N° Carga</div>
        
        <div id="top">
          <label for="status">Status</label>
          <select name="status" id="status">
            <option value="1">Parada</option>
            <option value="2">Expedida</option>
            <option value="3">Cancelada</option>
          </select>

          <p>

            <?php
              $DiaAtual = date("Y-m-d");
              $U_Dia = date("Y-m-t");
            ?>

            <label for="dataFat">Data Fat.</label>
            <input style="width: 110px" type="date" name="dataFat" id="dataFat" value="<?php echo $DiaAtual?>">
          
          </p>
        </div>
        
        
        <p style="text-align: center;">
          <label style="padding: 1px 20px" for="oper">Operação</label>
          <select style="margin-bottom: 20px" name="oper" id="oper" class="operacao">
            <option value="0">Selecione...</option>
            <option value="1">Nestlé</option>
            <option value="2">Pedro</option>
            <option value="3">Operador</option>
            <option value="4">Reentrega - Nestlé</option>
            <option value="5">Reentrega - Pedro</option>
            <option value="6">Reentrega - Operador</option>
            <option value="7">Outros</option>
          </select>
        </p>
        
        <div class="modal-body">
          <p>
            <label for="">Carga SAP</label>
            <input type="number" name="cargaSAP" id="cargaSAP" class="cargaSAP" class="operUM operQUATRO">

            <!--<input name="somename"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                type = "number"
                maxlength = "6"
             />-->
          </p>
          
          <p>
            <label for="">Carro Viagem</label>
            <input type="text" name="carroViagem" id="carroViagem" class="operDOIS operCINCO">
          </p>
          
          <p>
            <label for="">Nota Fiscal</label>
            <input type="text" name="notaF" id="notaF" class="operTRES operQUATRO operCINCO">
          </p>
          <p>
            <label for="">Carga Vinculada</label>
            <input type="text" name="cargaVin" id="cargaVin" class="operQUATRO operCINCO">
          </p>
          
          <p>
            <label for="">Rota</label>
            <input type="text" name="rota" id="rota" maxlength="200" class="operT">
          </p>
        </div>
        
        <div id="vpq">
          <label style="padding: 1px 20px" for="valor">Valor</label> <input type="text" name="valor" id="valor" step="0.01" min="0" max="10000000" class="operT">
          <label style="padding: 1px 20px" for="peso">Peso</label> <input type="text" step="0.01" min="0" name="peso" id="peso" class="operT">
          <label style="padding: 1px 20px" for="quant">Quant.</label></caption> <input type="text" name="quant" id="quant" class="operT">
        </div>
        
        <p>
          <label style="padding: 1px 20px" for="regiao">Região</label> 
          <select style="width: 400px;" name="regiao" id="regiao" class="operT">
          <option value="0">Selecione...</option>
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
        </p>
        
        <button id="botSalvar">Salvar</button>
        <button id="botCancelar">Cancelar</button>
        
        <div id="modal-fechar" class="modal-fechar">
          
          <div class="modalFechar">
            <p style="vertical-align: middle; text-align: center; margin-top: 30px;">Tem certeza que deseja sair?</p>
            <button style="margin-top: 40px;" id="botCancelar">Não</button>
            <button style="margin-top: 40px;" id="botSalvar">Sim</button>
          </div>
        </div>  
      </div>

    </div>

  <!---MODAL CRIAR OPERAÇÃO--->
  <div id="modalOperacao" class="modal-cont">
    
    <div id="modal" class="modal">
      <h1>TESTE</h1>


      <div class="modal-body">
        <p>
          <label for="nomeOperacao">Nome da Operação</label>
          <input type="text" name="nomeOperacao" id="nomeOperacao" maxlength="30">
        </p>
        <p>
          <label for="oper">Operação</label>
          <select name="oper" id="oper">
            <option value="0">Selecione...</option>
            <option value="1">Nestlé</option>
            <option value="2">Pedro</option>
            <option value="3">Operador</option>
            <option value="4">Reentrega - Nestlé</option>
            <option value="5">Reentrega - Pedro</option>
            <option value="6">Reentrega - Operador</option>
            <option value="7">Outros</option>
          </select>
          </select>
        </p>
      </div>
      
      <button id="botSalvar">Salvar</button>
      <button id="botCancelar">Cancelar</button>
      
    </div>
  </div>

  <!---MODAL CRIAR REGIÃO--->
    <div id="modalRegiao" class="modal-cont">

    <div id="modal" class="modal">
      <h1>Criação de Região</h1>

      <div class="modal-body">
        <p>
          <label for="nomeRegiao">Nome da Região</label>
          <input type="text" name="nomeRegiao" id="nomeRegiao" maxlength="100">
        </p>
      </div>

      <button id="botSalvar">Salvar</button>
      <button id="botCancelar">Cancelar</button>
    </div>
  </div>
  
  <!---MODAL CRIAR STATUS--->
  <div id="modalStatus" class="modal-cont">

    <div id="modal" class="modal">
      <h1>Criação de Status</h1>
      
      <div class="modal-body">
        <p>
          <label for="nomeStatus">Status</label>
          <input type="text" name="nomeStatus" id="nomeStatus" maxlength="30">
        </p>
      </div>

      <button id="botSalvar">Salvar</button>
      <button id="botCancelar">Cancelar</button>
    </div>
  </div>

  <!---MODAL EDIÇÃO--->
  <div id="modalEditar" class="modal-cont">

    <div id="modal" class="modal">
        <h1>EDIÇÃO CARGA</h1> 
        
        <div id="numCarga">N° Carga</div>
        
        <div id="top">
          <label for="status">Status</label>
          <select name="status" id="status">
            <option value="1">Parada</option>
            <option value="2">Expedida</option>
            <option value="3">Cancelada</option>
          </select>

          <p>
            
            <?php
              $DiaAtual = date("Y-m-d");
              $U_Dia = date("Y-m-t");
            ?>

            <label for="dataFat">Data Fat.</label>
            <input style="width: 110px" type="date" name="dataFat" id="dataFat" value="<?php echo $DiaAtual?>">
          
          </p>
        </div>
        
        
        <p style="text-align: center;">
          <label style="padding: 1px 20px" for="oper">Operação</label>
          <select style="margin-bottom: 20px" name="oper" id="oper" class="operacao">
            <option value="0">Selecione...</option>
            <option value="1">Nestlé</option>
            <option value="2">Pedro</option>
            <option value="3">Operador</option>
            <option value="4">Reentrega - Nestlé</option>
            <option value="5">Reentrega - Pedro</option>
            <option value="6">Reentrega - Operador</option>
            <option value="7">Outros</option>
          </select>
        </p>
        
        <div class="modal-body">
          <p>
            <label for="" style="width: 120px">Carga SAP</label>
            <input type="number" name="cargaSAP" id="cargaSAP" class="cargaSAP" maxlength="10">

          </p>
          
          <p>
            <label style="width: 120px" for="">Carro Viagem</label>
            <input type="text" name="carroViagem" id="carroViagem">
            
            <label>Motorista - Viagem</label>
            <input type="text" name="motViagem" id="motViagem">
          </p>

          <p>
            <label style="width: 120px">Carro Transb</label>
            <input type="text" name="carroTransb" id="carroTransb">

            <label>Motorista - Transb</label>
            <input type="text" name="motTransb" id="motTransb">
          </p>
          
          <p>
            <label style="width: 120px" for="">Nota Fiscal</label>
            <input type="number" name="notaF" id="notaF">

            <label for="">Carga Vinculada</label>
            <input type="number" name="cargaVin" id="cargaVin">
          </p>
          
          <p>
            <label for="" style="width: 120px">Rota</label>
            <input style="width: 450px;" type="text" name="rota" id="rota"maxlength="200">
          </p>
        </div>
        
        <div id="vpq">
          <label style="padding: 0px 1px 20px;" for="quant">Cubagem</label><input style="width:90px" type="number" min="0" name="cubagem" id="cubagem">
          <label style="padding: 1px 10px" for="valor">Valor</label> <input style="width:90px" type="number" name="valor" id="valor"  step="0.01" min="0" max="10000000">
          <label style="padding:  1px 10px" for="peso">Peso</label> <input style="width:90px" type="number" step="0.01" min="0" name="peso" id="peso">
          <label style="padding: 1px 10px" for="quant">Quant.</label><input style="width:90px" type="number" name="quant" id="quant">
        </div>
        
        <p>
          <label style="padding: 1px 20px" for="regiao">Região</label> 
          <select style="width: 400px;" name="regiao" id="regiao">
          <option value="0">Selecione...</option>
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
        </p>
        
        <button id="botSalvar">Salvar</button>
        <button id="botCancelar">Cancelar</button>  
      </div>
    
  </div>
  <br>
  <!---CODIGO MERGE--->

      <form method="GET" action="">

        <label> Data Faturamento:</label>
          <?php
            $dataInicio = (!empty($_GET['dataInicio'])) ? $_GET['dataInicio'] : '';
            $dataFim    = (!empty($_GET['dataFim'])) ? $_GET['dataFim'] : '';
          ?> 
        <input type="date" name="dataInicio" id="dataInicio" value="<?php echo htmlentities($dataInicio);?>">
        <input type="date" name="dataFim" id="dataFim" value="<?php echo htmlentities($dataFim);?>">
        <input style="display:none;" name="page" id="page" value="0"> <!-- leva pagina = 0-->
        <input type="submit" name="filtrarData" id="filtrarData" value="Ok"/>
        
        <b>&nbsp&nbsp|&nbspVisualização:</b> <a class="toggle-vis" style="cursor: pointer;">Detalhado</a> | <a class="toggle-hide" style="cursor: pointer;">Resumido</a>

      </form>

      <?php 

        include_once("../Control/logSelectControleCargas.php");

        $contador = odbc_result($resultCont, "Contador");
        $contPagina = ceil(($contador/500));

      ?>

      <div class='paginacao'>

        <a class='numeroPaginacao' href="../View/logControleCargas?page=0&&dataInicio=<?php echo $dataInicio?>&&dataFim=<?php echo $dataFim?>">1</a>

          <?php 

            $page = 0;
            $numPage = 1;
            $i = 1;

            while ($i < $contPagina) {

              $page = ($page + 500);
              $numPage = ($numPage + 1);
              $i++;
              ?>

              <a class='numeroPaginacao' href="../View/logControleCargas?page=<?php echo $page?>&&dataInicio=<?php echo $dataInicio?>&&dataFim=<?php echo $dataFim?>"><?php echo $numPage?></a>

              <?php
            }
              ?>
      </div>

      <table id="tabelaprincipal" width="100%">
        <thead>
          <tr>
            <th style="display:none;">Id</th>
            <th>Expedição</th>
            <th>Agendamento</th>
            <th>Nº Carga</th>
            <th>Tipo de Carga</th>
            <th>Rota</th>
            <th>Carga SAP</th>
            <th>Carro Viagem</th>          
            <th>Operação</th>
            <th>Região</th>
            <th>Status</th>
            <th>Cód Carro</th>
            <th>Placa</th>
            <th>Motorista</th>
            <th>Carro Transb.</th>
            <th>Placa Transb.</th>
            <th>Mot. Transb.</th>
            <th>Cubagem</th>
            <th>Valor</th>
            <th>Peso</th>
            <th>Quant.</th>
            <th>Criado Por</th>
            <th>Alterado Por</th>
          </tr>
        </thead>

        <tbody>
<?php

  include_once("../Control/logSelectControleCargas.php");

  while (odbc_fetch_row($result)) {

?>
        
          <tr>
            <td class="idCarga" style="display:none;"><?php echo odbc_result($result, "Id");?></td>
            <td class="editavelDate"><?php echo odbc_result($result, "Data Exp.");?></td>
            <td class="editavelDate"><?php echo odbc_result($result, "Data Agend.");?></td>
            <td><?php echo odbc_result($result, "Nº Carga");?></td>
            <td><?php echo utf8_encode(odbc_result($result, "Tipo Carga"));?></td>
            <td class="editavel"><?php echo odbc_result($result, "Rota");?></td>
            <td class="editavelNumberSAP"><?php echo odbc_result($result, "Carga SAP");?></td>
            <td class="editavelCarroViagem"><?php echo odbc_result($result, "Carro-Viagem");?></td>
            <td><?php echo utf8_encode(odbc_result($result, "Operação"));?></td>
            <td class="editavelRegiao"><?php echo utf8_encode(odbc_result($result, "Região"));?></td>
            <td class="editavelStatus"><?php echo utf8_encode(odbc_result($result, "Status"));?></td>
            <td class="editavelNumberCarro"><?php echo odbc_result($result, "Carro");?></td>
            <td><?php echo odbc_result($result, "Placa");?></td>
            <td class="editavel"><?php echo odbc_result($result, "Motorista");?></td>
            <td class="editavelNumberCarro"><?php echo odbc_result($result, "Carro Transb.");?></td>
            <td><?php echo odbc_result($result, "Placa Transb.");?></td>
            <?php 
              $valorRegiao = odbc_result($result, "Região");

              if ($valorRegiao == 'Santa Cruz') { //desabilita edição de Motorista Transb. de acordo com região
            ?>
            <td><?php echo odbc_result($result, "Motorista Transb.");?></td>
            <?php
              }else {
                ?>
            <td class="editavel"><?php echo odbc_result($result, "Motorista Transb.");?></td>
            <?php    
              }
            ?>
            
            <td class="editavelNumber"><?php echo odbc_result($result, "Cubagem");?></td>
            <td class="editavelNumber"><?php echo odbc_result($result, "Valor");?></td>
            <td class="editavelNumber"><?php echo odbc_result($result, "Peso");?></td>
            <td class="editavelNumber"><?php echo odbc_result($result, "Quantidade");?></td>
            <td><?php echo utf8_encode(odbc_result($result, "Criado Por"));?></td>
            <td><?php echo utf8_encode(odbc_result($result, "Alterado Por"));?></td>
          </tr>   

<?php

  }
  odbc_close($con);
 
?> 
        </tbody>
      </table>

      <div class='paginacao'>

        <a class='numeroPaginacao' href="../View/logControleCargas?page=0&&dataInicio=<?php echo $dataInicio?>&&dataFim=<?php echo $dataFim?>">1</a>

          <?php 

            $page = 0;
            $numPage = 1;
            $i = 1;

            while ($i < $contPagina) {

              $page = ($page + 500);
              $numPage = ($numPage + 1);
              $i++;
              ?>

              <a class='numeroPaginacao' href="../View/logControleCargas?page=<?php echo $page?>&&dataInicio=<?php echo $dataInicio?>&&dataFim=<?php echo $dataFim?>"><?php echo $numPage?></a>

              <?php
            }
              ?>
      </div> 

      <script>

      //Execuções do DataTable - Start
        $(document).ready(function () {

          $('#tabelaprincipal').DataTable({
            paging: false, 
            ordering: false,
            info: false,
            "language":{
              "search": "Buscar:",
              "zeroRecords": "Nada encontrado - desculpe",
              "infoEmpty": "Nenhum dado encontrado",
              "infoFiltered": "(filtered from _MAX_ total records)",
            },
              columnDefs:[ //colunas que iniciam ocultas
              {
                target: [17,18,19,20,21,22],
                visible: false,
              },
            ],

            //função para atribuir os filtros ao cabeçalhos - start
            initComplete: function () { 

              this.api()
                  .columns()
                  .every(function () {
                    var column = this;
                    var select = $('<select class="inputFiltro"><option value="">Todos</option></select>')
                      .appendTo( $(column.header()) )
                      .on('change', function () {
                          var val = $.fn.dataTable.util.escapeRegex($(this).val());
                          column.search(val ? '^' + val + '$' : '', true, false).draw();
                      });

                    column
                      .data()
                      .unique()
                      .sort()
                      .each(function (d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>');
                      });
                  });
            },
            //função para atribuir os filtros ao cabeçalhos - end

          });
        });
        //Execuções do DataTable - End

        //validação dos botões Detalhado e Resumido - start
        $(document).ready(function () {

          var table = $('#tabelaprincipal').DataTable({
            retrieve: true,
          });
 
          $('a.toggle-hide').on('click', function (e) {
            e.preventDefault();
            table.columns( [17,18,19,20,21,22] ).visible( false );
          });

          $('a.toggle-vis').on('click', function (e) {
            e.preventDefault();
            table.columns( [17,18,19,20,21,22] ).visible( true );
          });
        });
        //validação dos botões Detalhado e Resumido - start
      
        
      </script>
    </body>
</html>