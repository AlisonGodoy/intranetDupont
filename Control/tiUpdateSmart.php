<?php

/// Recebe valores do Ajax - Start
$id     = @$_GET['id'];
$imei   = @$_GET['imei'];
$pulsus = @$_GET['pulsus'];

$command     = $_GET['command'];
/// Recebe valores do Ajax - End

  $query = "
            UPDATE [dbo].[estoqueSmart]
            SET [imei] = ".$imei."
                ,[pulsus] = ".$pulsus."
            WHERE [id] = ".$id."
           ";



include("../Model/conexaoIntranetGd.php"); //Conecta ao banco

/// Gravar no Banco de dados - Start
if($command == 'insert'){
  $result  = odbc_exec($con, $query);
  
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