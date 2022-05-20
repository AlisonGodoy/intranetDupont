<?php

/// Recebe valores do Ajax - Start
$id_smart    = @$_GET['id_smart'];
$id          = @$_GET['id'];
$id_motivo   = @$_GET['id_motivo'];
$destino     = @$_GET['destino'];

$command     = $_GET['command'];
/// Recebe valores do Ajax - End

  $query = "
            INSERT INTO [dbo].[baixaSmart]
           ([id_smart]
           ,[id_estoque]
           ,[id_motivo]
           ,[id_devolucao]
           ,[data_baixa]
           ,[destino])
     VALUES
           (".$id_smart."
           ,".$id."
           ,".$id_motivo."
           ,2
           ,(select CONVERT (date, GETDATE()))
           ,'".$destino."')
           ";

  $queryUpdate = "
            UPDATE estoqueSmart 
            SET disponivel = 'Nao' 
            WHERE id = ".$id."
  ";

include("../Model/conexaoIntranetGd.php"); //Conecta ao banco

/// Gravar no Banco de dados - Start
if($command == 'insert'){
  $result  = odbc_exec($con, $query);
  $result  = odbc_exec($con, $queryUpdate);
  
if($result){
  $strJson = '{"status":true}';
  echo $strJson;

}else{
  $strJson = '{"status":false}';
  echo $strJson;
}
}
/// Gravar no Banco de dados - End
?>