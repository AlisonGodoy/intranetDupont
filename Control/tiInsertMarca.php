<?php

/// Recebe valores do Ajax - Start
$marca    = @$_GET['marca'];


$command     = $_GET['command'];
/// Recebe valores do Ajax - End

  $query = "
            INSERT INTO [dbo].[cadastroMarca]
           ([desc_marca])
            VALUES
           ('".$marca."')
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