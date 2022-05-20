<?php

/// Recebe valores do Ajax - Start
$modelo    = @$_GET['modelo'];


$command     = $_GET['command'];
/// Recebe valores do Ajax - End

  $query = "
            INSERT INTO [dbo].[cadastroModelo]
           ([desc_modelo])
            VALUES
           ('".$modelo."')
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