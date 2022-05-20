<?php

  include("../Model/conexaoIntranetGd.php"); //Conecta ao banco

/// Recebe valores - Start
  $id_estoque          = @$_GET['id_estoque'];
/// Recebe valores - End

  $queryIdSmart = "
            SELECT id_smart
            FROM estoqueSmart
            WHERE id = ".$id_estoque."
           ";

  $resultIdSmart  = odbc_exec($con, $queryIdSmart);
  $id_smart = odbc_result($resultIdSmart, "id_smart");

  $queryEntradaDev = "
            INSERT INTO [dbo].[entradaSmart]
           ([id_smart]
           ,[id_estoque]
           ,[id_origem]
           ,[data_entrada])
            VALUES
           (".$id_smart."
           ,".$id_estoque."
           ,3
           ,(select CONVERT (date, GETDATE())))
           ";

  $queryUpdateDisponivel = "
             UPDATE estoqueSmart
             SET disponivel = 'Sim'
             WHERE id = ".$id_estoque."
  ";

  $queryUpdateDevolvido = "
             UPDATE baixaSmart
             SET id_devolucao = 1
             WHERE id_estoque = ".$id_estoque."
  ";


/// Gravar no Banco de dados - Start
  $result  = odbc_exec($con, $queryEntradaDev);
  $result  = odbc_exec($con,$queryUpdateDevolvido);
  $result  = odbc_exec($con,$queryUpdateDisponivel);

  //echo $result;
  if($result){
    echo '<script language="javascript">';
    echo 'alert("Smart Devolvido com Sucesso!");window.location="tiBaixasSmarts.php"';
    echo '</script>';

  }else{
    echo '<script language="javascript">';
    echo 'alert("Viisshh deu ERRO, fala com o Godoy!");window.location="tiBaixasSmarts.php"';
    echo '</script>';
  }

/// Gravar no Banco de dados - End
?>