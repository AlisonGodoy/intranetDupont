<?php

$dataInicio = @$_GET['dataInicio'];
$dataFim    = @$_GET['dataFim'];
$page       = @$_GET['page'];

//var_dump($page);
//var_dump($dataFim);

include("../Model/conexaoIntranetGd.php"); //Conecta ao banco

//Consulta da tabela principal - Start
$table = "SELECT cadastroCarga.id_carga AS 'Id', CONVERT(VARCHAR,cadastroCarga.data_fat,103) AS 'Data Fat.', CONVERT(VARCHAR,cadastroCarga.data_exp,103) AS 'Data Exp.', CONVERT(VARCHAR,cadastroCarga.data_agendamento,103) AS 'Data Agend.',cadastroCarga.num_carga_mes AS 'Nº Carga', tipoCarga.desc_tipo as 'Tipo Carga', cadastroCarga.nota AS 'Nota', cadastroCarga.carga_vinculada AS 'Carga Vinculada', cadastroCarga.rota AS 'Rota', cadastroCarga.carga_sap AS 'Carga SAP',cadastroCarga.carga_carro_viagem AS 'Carro-Viagem', operacaoCarga.desc_operacao AS 'Operação', regiaoCarga.desc_regiao AS 'Região',statusCarga.desc_status AS 'Status', cadastroCarga.cod_carro AS 'Carro', c.NUMPLCVEC AS 'Placa', cadastroCarga.motorista AS 'Motorista', cadastroCarga.cod_carro_transb AS 'Carro Transb.', d.NUMPLCVEC AS 'Placa Transb.',cadastroCarga.motorista_transb AS 'Motorista Transb.', cadastroCarga.cubagem AS 'Cubagem', cadastroCarga.valor AS 'Valor',cadastroCarga.peso AS 'Peso', cadastroCarga.quantidade AS 'Quantidade', a.Name AS 'Criado Por', b.Name AS 'Alterado Por'

  FROM cadastroCarga
  INNER JOIN tipoCarga ON tipoCarga.id_tipo = cadastroCarga.id_tipo
  INNER JOIN operacaoCarga ON operacaoCarga.id_operacao = cadastroCarga.id_operacao
  INNER JOIN regiaoCarga ON regiaoCarga.id_regiao = cadastroCarga.id_regiao
  INNER JOIN statusCarga ON statusCarga.id_status = cadastroCarga.id_status
  INNER JOIN UserGd AS a ON a.CodUser = cadastroCarga.id_user_create
  INNER JOIN UserGd AS b ON b.CodUser = cadastroCarga.id_user_update
  LEFT JOIN FLEXX_00206000..IBETVEC AS c ON intranetgd..cadastroCarga.cod_carro = c.CODVEC
  LEFT JOIN FLEXX_00206000..IBETVEC AS d ON intranetgd..cadastroCarga.cod_carro_transb = d.CODVEC
 
  WHERE cadastroCarga.data_fat BETWEEN '".$dataInicio."' AND '".$dataFim."'

  ORDER BY id ASC OFFSET ".$page." ROWS FETCH NEXT 500 ROWS ONLY
  ";

$result  = odbc_exec($con, $table);
//Consulta da tabela principal - End


//Consulta contatdor de linhas - Start
$contador = "SELECT COUNT(*) AS 'Contador'
  FROM cadastroCarga
  WHERE cadastroCarga.data_fat BETWEEN '".$dataInicio."' AND '".$dataFim."'
  ";

$resultCont  = odbc_exec($con, $contador);
//Consulta contador de linhas - End

?>
