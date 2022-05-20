<?php

  session_start();

  include('../Control/controleSession.php');

?>
<html>
  <head>
  <meta charset="UTF-8"/>
    <title>Geração de Contrato</title>
    <link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">

      <!-- Faz referência a biblioteca Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

      <!-- Faz referência a biblioteca Jquery -->
      <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Última versão JavaScript compilada e minificada -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/Tempo.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/tiValidaContratoDupont.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/campoPesquisaTiControle.js"></script>
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
      <link rel="stylesheet" href="../css/teamplateTiEditarSmarts.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
    
  </head>

  <body>
 

<?php

  $id = @$_GET['id_estoque'];
  $desc_marca = @$_GET['desc_marca'];
  $desc_modelo = @$_GET['desc_modelo'];
  $imei = @$_GET['imei'];
  $pulsus = @$_GET['pulsus'];

  include("../Control/selectControleSmarts.php");
?>

<!-- Tela de Editar Smarts - Start -->
      <div class="modal-dialog" role="document" id="controleSmartModal">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Editar Smart - <?php echo $desc_modelo;?> ID <?php echo $id;?></h3>
            <h5 class="modal-title" id="erroInsert" style="color:red;display:none">Erro no Cadastro - Confira os Campos!</h5> <!-- Mensagem erro -->
            <h5 class="modal-title" id="okInsert" style="color:green;display:none">Carga Cadastrada com Sucesso</h5> <!-- Mensagem ok -->
          </div>
        
        <div class="modal-body">

          <!-- Campo ID Estoque - Start -->
          <div class="form-group">
            <label style="display: none;" for="recipient-id" class="col-form-label"></label>
            <input style="display: none;" type="number" class="form-control" id="recipient-id" value="<?php echo $id;?>">
          </div>
          <!-- Campo ID Estoque - End -->

          <!-- Campo Marca - Start -->
          <div class="form-group">
            <label for="recipient-desc_marca" class="col-form-label">Marca</label>
            <input type="text" class="form-control" id="recipient-desc_marca" value="<?php echo $desc_marca;?>">
          </div>
          <!-- Campo Marca - End -->


          <!-- Campo Modelo - Start -->
          <div class="form-group">
            <label for="recipient-desc_modelo" class="col-form-label">Modelo</label>
            <input type="text" class="form-control" id="recipient-desc_modelo" value="<?php echo $desc_modelo;?>">
          </div>
          <!-- Campo Modelo - End -->

          <!-- Campo IMEI - Start -->
          <div class="form-group">
            <label for="recipient-imei" class="col-form-label">IMEI</label>
            <input type="number" class="form-control" id="recipient-imei" value="<?php echo $imei;?>">
          </div>
          <!-- Campo IMEI - End -->

          <!-- Campo Nº Pulsus - Start -->
          <div class="form-group">
            <label for="recipient-pulsus" class="col-form-label">Nº Pulsus</label>
            <input type="number" class="form-control" id="recipient-pulsus" value="<?php echo $pulsus;?>">
          </div>
          <!-- Campo Nº Pulsus - End -->

          <!-- Campo Nome Colaborador - Start -->
          <div class="form-group">
            <label for="recipient-nomeColaborador" class="col-form-label">Nome Completo Colaborador</label>
            <input type="text" class="form-control" id="recipient-nomeColaborador">
          </div>
          <!-- Campo Nome Colaborador - End -->

          <!-- Campo CPF Colaborador - Start -->
          <div class="form-group">
            <label for="recipient-cpf" class="col-form-label">CPF Colaborador</label>
            <input type="number" class="form-control" id="recipient-cpf">
          </div>
          <!-- Campo CPF Colaborador - End -->

          <!-- Campo E-mail Colaborador - Start -->
          <div class="form-group">
            <label for="recipient-email" class="col-form-label">E-mail Colaborador</label>
            <input type="email" class="form-control" id="recipient-email">
          </div>
          <!-- Campo E-mail Colaborador - End -->

          <!-- Campo Telefone Colaborador - Start -->
          <div class="form-group">
            <label for="recipient-fone" class="col-form-label">Telefone Colaborador</label>
            <input type="tel" class="form-control" id="recipient-fone">
          </div>
          <!-- Campo Telefone Colaborador - End -->

          <!-- Campo Função - Start -->
          <div class="form-group">
            <label for="recipient-funcao" class="col-form-label">Função</label>
            <input type="text" class="form-control" id="recipient-funcao">
          </div>
          <!-- Campo Função - End -->

          <!-- Campo Carregado Original - Start -->
          <div class="form-group">
            <label for="recipient-carregadorOriginal" class="col-form-label">Carregador Original?</label>
            <div>
              <input type="checkbox" id="recipient-originalSim">
              <label for="recipient-originalSim">Sim</label>
            </div>
            <div>
              <input type="checkbox" id="recipient-originalNao">
              <label for="recipient-originalNao">Não</label>
            </div>
          </div>
          <!-- Campo Carregado Original - End -->

          <!-- Campo Carregado Original - Start -->
          <div class="form-group">
            <label for="recipient-caboUsb" class="col-form-label">Qual Cabo USB?</label>
            <div>
              <input type="checkbox" id="recipient-usbC">
              <label for="recipient-usbC">USB C</label>
            </div>
            <div>
              <input type="checkbox" id="recipient-microUSB">
              <label for="recipient-microUSB">Micro USB</label>
            </div>
          </div>
          <!-- Campo Carregado Original - End -->

          <!-- Botão Cadastrar - Start -->
          <div class="modal-footer">
            <a href="../View/tiBaixasSmarts.php"><button type="button"  class="btn btn-secondary" id="voltar">Cancelar</button></a>
            <button type="submit" class="btn btn-secondary" id="gerarContrato" onclick="enviaForm()">Enviar</button>    
          </div>
          <!-- Botão Cadastrar - End -->

        </div>
      </div>
    </div>

      <div id="imprimirDiv" style="display: none;">
        <img src="../imagem/logogp.png" width="70px" height="50px">
        <h3><center>TERMO DE COMPROMISSO E RESPONSABILIDADE</center></h3><br>
        <p style="color:white">_</p> 
        <p>Pelo presente termo de responsabilidade, <b id="nomeColaborador"></b>,</p><p> 
inscrito no CPF sob o nº <b id="cpf"></b></p><p>
doravante denominado(a) EMPREGADO(A), desempenhando a função de <b id="funcao"></b> na empresa</p><p>
DUPONT DISTRIBUIDORA DE ALIMENTOS LTDA pessoa jurídica de direto privado, inscrita no CNPJ(MF) sob</p><p> 
número 89.194.377/0001-32, com sede a BR 471 KM 122,3 s/n, Bairro Várzea, na cidade de Santa Cruz do Sul, RS,</p><p> 
declara acerca do recebimento de aparelho celular para atividades relacionadas à EMPREGADORA:</p><p>
O(A) EMPREGADO(A) declara, para todos os fins e efeitos de direito, que recebeu de sua EMPREGADORA 01 (um)</p><p> 
aparelho celular <b id="marca"></b>-<b id="modelo"></b>&nbsp ID-<b id="idEstoque"></b></p><p>
com IMEI <b id="imei"></b> e Pulsus com ID <b id="pulsus"></b></p><p>
01 (um) Carregador <b id="originalSim"></b>, 01 (um) Cabo <b id="usbC"></b></p><p> 
01 (um) Chip com o número <b id="fone"></b> 01 (um) Domínio de e-mail <b id="email"></b>,</p><p>
para utilização profissional como ferramenta de trabalho, para que sejam trocadas mensagens de caráter</p><p>
profissional, como orientações de procedimento, ordens para execução de atividades, esclarecimento de dúvidas,</p><p>
retorno a clientes etc., para uso unicamente destinado ao desempenho de atividades e atribuições diárias do</p><p>
interesse da empresa.
</p>
<p>O(A) EMPREGADO(A) declara ciência acerca da finalidade do uso de seu aparelho celular em horário de expediente,</p><p>
bem como da proibição expressa da EMPREGADORA no que se refere ao envio de mensagens via aplicativos ou</p><p> 
redes sociais, para tratar de assuntos coorporativos, seja ele qual for, fora da jornada de trabalho.</p><p>
O(A) EMPREGADO(A) se compromete, a partir da assinatura do presente termo, a não fornecer seu número pessoal</p><p>
de celular a clientes, fornecedores ou a qualquer pessoa que esteja envolvida com a atividade comercial da</p><p>
EMPREGADORA, mas tão somente fazer uso das linhas telefónicas profissionais para tais questões durante a</p><p>
jornada de trabalho.</p><p>
O(A) EMPREGADO(A) se compromete, a partir da assinatura do presente termo, a não utilizar meios eletrônicos</p><p> 
de comunicação para tratar de assuntos profissionais vinculados à EMPREGADORA, fora de seu horário de trabalho,</p><p>
seja com colegas, superiores hierárquicos, fornecedores ou clientes.</p><p>
O(A) EMPREGADO(A) declara estar ciente que o uso inadequado dos aplicativos e redes sociais permitidos pela</p><p>
EMPREGADORA durante sua jornada de trabalho, para tratar de assuntos essencialmente profissionais, poderá</p><p>
ensejar punição, seja através de advertência ou de outras medidas que a EMPREGADORA entender cabíveis,</p><p> 
na forma da legislação vigente, como suspensão e até dispensa por justa causa, uma vez que, nesses casos,</p><p>
restará caracterizado ato de indisciplina e/ou insubordinação, além de desídia, o que igualmente ocorrerá em</p><p>
caso de descumprimento dos termos ora pactuados.</p><p>
O(A) EMPREGADO(A) se obriga a manter o completo e absoluto sigilo sobre qualquer informação, dado, material,</p><p>
documento, política, programa, especificações técnicas ou comerciais, estratégicas, inovações e</p><p>aperfeiçoamentos passados pela EMPREGADORA dos quais terá conhecimento e acesso, em função deste termo,</p><p>
não podendo sob qualquer pretexto divulgá-los, revelá-los e reproduzi-los, em proveito próprio ou alheio, sem o</p><p>
consentimento expresso e escrito da EMPREGADORA, sob pena de sofrer as medidas puníveis já descritas no</p><p>
parágrafo anterior, bem como sob pena de responsabilização cível e criminal. O(A) EMPREGADO(A) se obriga, em</p><p>
caso de dano, inutilização ou extravio dos equipamentos recebidos, a comunicar imediatamente a EMPREGADORA.</p><p>
O(A) EMPREGADO(A) declara estar ciente de que, no caso de o equipamento ser danificado ou
inutilizado por</p><p>
emprego inadequado, mau uso, negligência ou extravio, a EMPREGADORA fornecerá novo equipamento e cobrará</p><p>
do(a) EMPREGADO(A) o valor de um equipamento da mesma marca ou equivalente, sendo que, desde já, o(a)</p><p>
EMPREGADO(A) autoriza o desconto do valor em sua folha de pagamento.</p><p>
O(A) EMPREGADO(A) declara estar ciente de que, quando da rescisão do contrato de trabalho,
deverá devolver</p><p>
todos os equipamentos objetos do presente termo, sendo que a não entrega de quaisquer dos equipamentos</p><p>
autorizará a EMPREGADORA a proceder no desconto do valor do equipamento da mesma marca ou equivalente das</p><p>
verbas rescisórias, desconto este que, desde já, é autorizado pelo(a) EMPREGADO(A). Ainda, nos casos em que</p><p>
já houver sido realizado o pagamento das verbas rescisórias e houver descumprimento por parte do(a)</p><p> 
EMPREGADO(A) na devolução da integralidade dos equipamentos, poderá ser executado judicialmente em caso de</p><p>
não pagamento, servindo o presente termo como título executivo.</p><p>
A obrigação de confidencialidade aqui estabelecida se prolonga no tempo e não restará afastada nem mesmo em</p><p>
caso de rescisão do contrato de trabalho, ficando o(a) EMPREGADO(A), desde já, comprometido(a) a ressarcir os</p><p> 
prejuízos ocasionados.</p><p>
O(A) EMPREGADO(A) declara estar ciente de que os registros de entrada, saída e intervalos para repouso e</p><p> 
alimentação poderão ser registrados por meio do Sistema de Ponto Simix instalado nos aparelhos celulares</p><p>
fornecidos pela EMPREGADORA, sistema válido e eficaz, sendo que, quando realizado o registro no referido</p><p>
sistema, deve o(a) EMPREGADO(A) manter os serviços de localização do aparelho celular ativados, sob pena de</p><p>
penalidade disciplinar por ato de desídia, indisciplina e/ou insubordinação.</p><p>
O(A) EMPREGADO declara estar ciente que o descumprimento dos termos ora pactuados será passível de punição,</p><p>
seja através de advertência, suspensão, rescisão do contrato de trabalho por justa causa ou de outras medidas</p><p>
que a EMPREGADORA entender cabíveis, na forma da legislação vigente e observada a gravidade da infração e o</p><p>
histórico funcional, sem prejuízo do desconto em folha de pagamento referente a eventuais prejuízos causados.</p><p>
O(A) EMPREGADO(A) declara estar ciente que o presente termo passara a ser parte integrante do seu contrato</p><p> 
de trabalho.
</p>
<br>
<p>
_______________________________
<p><b id="nomeColaborador"></b></p>
      </div>
  </body>
</html>