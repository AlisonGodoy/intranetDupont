<?php

$valor 			 = @$_GET['valor'];
$id 				 = @$_GET['id'];
$valorStatus = @$_GET['valorStatus'];
$valorRegiao = @$_GET['valorRegiao'];
$campo 			 = @$_GET['campo'];

include("../Model/conexaoIntranetGd.php"); //Conecta ao banco

if ($valorStatus != null){

	$updateCargaStatus = "UPDATE [dbo].[cadastroCarga] SET [id_status] = '".$valorStatus."' WHERE [id_carga] = ".$id."";
	$result  = odbc_exec($con, $updateCargaStatus);

}elseif ($valorRegiao != null){

	$updateCargaRegiao = "UPDATE [dbo].[cadastroCarga] SET [id_regiao] = '".$valorRegiao."' WHERE [id_carga] = ".$id."";
	$result  = odbc_exec($con, $updateCargaRegiao);

}elseif ($campo == 1) {
	
  $updateCarga = "UPDATE [dbo].[cadastroCarga] SET [data_exp] = '".$valor."' WHERE [id_carga] = ".$id."";

}elseif ($campo == 2) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [data_agendamento] = '".$valor."' WHERE [id_carga] = ".$id."";

}elseif ($campo == 5) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [rota] = '".$valor."' WHERE [id_carga] = ".$id."";

}elseif ($campo == 6) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [carga_sap] = ".$valor." WHERE [id_carga] = ".$id."";

}elseif ($campo == 7) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [carga_carro_viagem] = '".$valor."' WHERE [id_carga] = ".$id."";

}elseif ($campo == 9) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [id_regiao] = ".$valor." WHERE [id_carga] = ".$id."";

}elseif ($campo == 10) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [id_status] = ".$valor." WHERE [id_carga] = ".$id."";

}elseif ($campo == 11) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [cod_carro] = ".$valor.", [motorista] = (SELECT b.NOMEPG FROM FLEXX_00206000..IBETTPLPDRVEC AS a, FLEXX_00206000..IBETCPLEPG AS b WHERE PCTPDRPTPVALBASCSS > 0 AND a.CODVEC = ".$valor." AND a.CODMTCEPG = b.CODMTCEPG) WHERE [id_carga] = ".$id."";

}elseif ($campo == 13) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [motorista] = '".$valor."' WHERE [id_carga] = ".$id."";

}elseif ($campo == 14) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [cod_carro_transb] = ".$valor.", [motorista_transb] = (SELECT b.NOMEPG FROM FLEXX_00206000..IBETTPLPDRVEC AS a, FLEXX_00206000..IBETCPLEPG AS b WHERE PCTPDRPTPVALBASCSS > 0 AND a.CODVEC = ".$valor." AND a.CODMTCEPG = b.CODMTCEPG) WHERE [id_carga] = ".$id."";

}elseif ($campo == 16) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [motorista_transb] = '".$valor."' WHERE [id_carga] = ".$id."";

}elseif ($campo == 17) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [cubagem] = ".$valor." WHERE [id_carga] = ".$id."";

}elseif ($campo == 18) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [valor] = ".$valor." WHERE [id_carga] = ".$id."";

}elseif ($campo == 19) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [peso] = ".$valor." WHERE [id_carga] = ".$id."";

}elseif ($campo == 20) {

	$updateCarga = "UPDATE [dbo].[cadastroCarga] SET [quantidade] = ".$valor." WHERE [id_carga] = ".$id."";

}
	
  @$result  = odbc_exec($con, $updateCarga);

?>