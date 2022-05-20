<?php

  /// Recebe valores do Ajax - Start
  $imei          = @$_GET['imei'];
  $pulsus     = @$_GET['pulsus'];
  $id_origem     = @$_GET['id_origem'];
  $id   =  @$_GET['id'];
  $disponivel = "Sim";

  $command          = $_GET['command'];
  /// Recebe valores do Ajax - End

  if ($pulsus == null) {
    $query = "
            INSERT INTO [dbo].[estoqueSmart]
           ([id_smart]
           ,[imei]
           ,[disponivel])
            VALUES
           (".$id.",
           '".$imei."', 
           '".$disponivel."')";
  }else{
    $query = "
            INSERT INTO [dbo].[estoqueSmart]
           ([id_smart]
           ,[imei]
           ,[pulsus]
           ,[disponivel])
            VALUES
           (".$id.",
           '".$imei."', 
           '".$pulsus."', 
           '".$disponivel."')";
      }

    $queryEntrada = "
            INSERT INTO [dbo].[entradaSmart]
           ([id_smart]
           ,[id_estoque]
           ,[id_origem]
           ,[data_entrada])
            VALUES
           (".$id."
           ,(select MAX(id) from estoqueSmart)
           ,".$id_origem."
           ,(select CONVERT (date, GETDATE())))
           ";

  include("../Model/conexaoIntranetGd.php"); //Conecta ao banco

  /// Gravar no Banco de dados - Start
  if($command == 'insert'){
    $result  = odbc_exec($con, $query);
    $result  = odbc_exec($con, $queryEntrada);

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