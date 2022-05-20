<?php

/// Recebe valores do Ajax - Start
$origem    = @$_GET['origem'];

$command     = $_GET['command'];
/// Recebe valores do Ajax - End

  $query = "
            INSERT INTO [dbo].[cadastroOrigem]
           ([desc_origem])
            VALUES
           ('".$origem."')
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