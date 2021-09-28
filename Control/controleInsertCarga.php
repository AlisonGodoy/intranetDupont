<?php

session_start();
$IdUser = $_SESSION['CodUser'];

/// Recebe valores do Ajax - Start
$id_tipo          = @$_GET['id_tipo'];
$carga_origem     = @$_GET['carga_origem'];
$date_criacao     = @$_GET['date_criacao'];
$date_expedicao   = @$_GET['date_expedicao'];
$date_agendamento = @$_GET['date_agendamento'];
$id_status        = @$_GET['id_status'];
$cliente_cidade   = @$_GET['cliente_cidade'];
$carga_nestle     = @$_GET['carga_nestle'];
$qtd_nestle       = @$_GET['qtd_nestle']; 
$peso_nestle      = @$_GET['peso_nestle'];
$valor_nestle     = @$_GET['valor_nestle'];
$carga_vigor      = @$_GET['carga_vigor'];
$qtd_vigor        = @$_GET['qtd_vigor'];
$peso_vigor       = @$_GET['peso_vigor'];
$valor_vigor      = @$_GET['valor_vigor'];
$carga_atacado    = @$_GET['carga_atacado'];
$qtd_atacado      = @$_GET['qtd_atacado'];
$peso_atacado     = @$_GET['peso_atacado'];
$valor_atacado    = @$_GET['valor_atacado'];
$carga_italac     = @$_GET['carga_italac'];
$qtd_italac       = @$_GET['qtd_italac'];
$peso_italac      = @$_GET['peso_italac'];
$valor_italac     = @$_GET['valor_italac'];
$carga_pavioli    = @$_GET['carga_pavioli'];
$qtd_pavioli      = @$_GET['qtd_pavioli'];
$peso_pavioli     = @$_GET['peso_pavioli'];
$valor_pavioli    = @$_GET['valor_pavioli'];
$carga_log        = @$_GET['carga_log'];
$qtd_log          = @$_GET['qtd_log'];
$peso_log         = @$_GET['peso_log'];
$valor_log        = @$_GET['valor_log'];
$id_regiao        = @$_GET['id_regiao'];

$command          = $_GET['command'];
/// Recebe valores do Ajax - End

// Atribui Zero ao Peso caso o mesmo seja Nulo - START
if ($peso_nestle == null) {
  $peso_nestle = 0;
}
if ($peso_vigor == null) {
  $peso_vigor = 0;
}
if ($peso_atacado == null) {
  $peso_atacado = 0;
}
if ($peso_italac == null) {
  $peso_italac = 0;
}
if ($peso_pavioli == null) {
  $peso_pavioli = 0;
}
if ($peso_log == null) {
  $peso_log = 0;
}
// Atribui Zero ao Peso caso o mesmo seja Nulo - END

// Atribui - as Datas caso o mesmo seja Nulo - START
if ($date_expedicao == null and $date_agendamento != null) {
  $date_expedicao = "null";

  $query = "
            INSERT INTO [dbo].[controleCarga]
           ([id_tipo]
           ,[carga_origem]
           ,[date_criacao]
           ,[date_expedicao]
           ,[date_agendamento]
           ,[id_status]
           ,[id_regiao]
           ,[cliente_cidade]
           ,[carga_nestle]
           ,[qtd_nestle]
           ,[peso_nestle]
           ,[valor_nestle]
           ,[carga_vigor]
           ,[qtd_vigor]
           ,[peso_vigor]
           ,[valor_vigor]
           ,[carga_atacado]
           ,[qtd_atacado]
           ,[peso_atacado]
           ,[valor_atacado]
           ,[carga_italac]
           ,[qtd_italac]
           ,[peso_italac]
           ,[valor_italac]
           ,[carga_pavioli]
           ,[qtd_pavioli]
           ,[peso_pavioli]
           ,[valor_pavioli]
           ,[carga_log]
           ,[qtd_log]
           ,[peso_log]
           ,[valor_log]
           ,[user_create])
            VALUES
           ('".$id_tipo."',
           '".$carga_origem."',
           (select CONVERT (date, GETDATE())), 
           ".$date_expedicao.", 
           '".$date_agendamento."', 
           '".$id_status."', 
           '".$id_regiao."',
           '".$cliente_cidade."', 
           '".$carga_nestle."', 
           '".$qtd_nestle."', 
           ".$peso_nestle.", 
           '".$valor_nestle."', 
           '".$carga_vigor."',
           '".$qtd_vigor."', 
           ".$peso_vigor.", 
           '".$valor_vigor."', 
           '".$carga_atacado."', 
           '".$qtd_atacado."', 
           ".$peso_atacado.", 
           '".$valor_atacado."', 
           '".$carga_italac."', 
           '".$qtd_italac."', 
           ".$peso_italac.", 
           '".$valor_italac."', 
           '".$carga_pavioli."', 
           '".$qtd_pavioli."', 
           ".$peso_pavioli.",
           '".$valor_pavioli."', 
           '".$carga_log."', 
           '".$qtd_log."', 
           ".$peso_log.", 
           '".$valor_log."',
           '".$IdUser."' )";
}
    elseif ($date_agendamento == null and $date_expedicao != null) {
      $date_agendamento = "null";
      $query = "
            INSERT INTO [dbo].[controleCarga]
           ([id_tipo]
           ,[carga_origem]
           ,[date_criacao]
           ,[date_expedicao]
           ,[date_agendamento]
           ,[id_status]
           ,[id_regiao]
           ,[cliente_cidade]
           ,[carga_nestle]
           ,[qtd_nestle]
           ,[peso_nestle]
           ,[valor_nestle]
           ,[carga_vigor]
           ,[qtd_vigor]
           ,[peso_vigor]
           ,[valor_vigor]
           ,[carga_atacado]
           ,[qtd_atacado]
           ,[peso_atacado]
           ,[valor_atacado]
           ,[carga_italac]
           ,[qtd_italac]
           ,[peso_italac]
           ,[valor_italac]
           ,[carga_pavioli]
           ,[qtd_pavioli]
           ,[peso_pavioli]
           ,[valor_pavioli]
           ,[carga_log]
           ,[qtd_log]
           ,[peso_log]
           ,[valor_log]
           ,[user_create])
     VALUES
           ('".$id_tipo."',
           '".$carga_origem."',
           (select CONVERT (date, GETDATE())), 
           '".$date_expedicao."', 
           ".$date_agendamento.", 
           '".$id_status."',
           '".$id_regiao."', 
           '".$cliente_cidade."', 
           '".$carga_nestle."', 
           '".$qtd_nestle."', 
           ".$peso_nestle.", 
           '".$valor_nestle."', 
           '".$carga_vigor."',
           '".$qtd_vigor."', 
           ".$peso_vigor.", 
           '".$valor_vigor."', 
           '".$carga_atacado."', 
           '".$qtd_atacado."', 
           ".$peso_atacado.", 
           '".$valor_atacado."', 
           '".$carga_italac."', 
           '".$qtd_italac."', 
           ".$peso_italac.", 
           '".$valor_italac."', 
           '".$carga_pavioli."', 
           '".$qtd_pavioli."', 
           ".$peso_pavioli.",
           '".$valor_pavioli."', 
           '".$carga_log."', 
           '".$qtd_log."', 
           ".$peso_log.", 
           '".$valor_log."',
           '".$IdUser."' )";
  }

  elseif ($date_agendamento == null and $date_expedicao == null) {
      $date_agendamento = "null";
      $date_expedicao = "null";
      $query = "
            INSERT INTO [dbo].[controleCarga]
           ([id_tipo]
           ,[carga_origem]
           ,[date_criacao]
           ,[date_expedicao]
           ,[date_agendamento]
           ,[id_status]
           ,[id_regiao]
           ,[cliente_cidade]
           ,[carga_nestle]
           ,[qtd_nestle]
           ,[peso_nestle]
           ,[valor_nestle]
           ,[carga_vigor]
           ,[qtd_vigor]
           ,[peso_vigor]
           ,[valor_vigor]
           ,[carga_atacado]
           ,[qtd_atacado]
           ,[peso_atacado]
           ,[valor_atacado]
           ,[carga_italac]
           ,[qtd_italac]
           ,[peso_italac]
           ,[valor_italac]
           ,[carga_pavioli]
           ,[qtd_pavioli]
           ,[peso_pavioli]
           ,[valor_pavioli]
           ,[carga_log]
           ,[qtd_log]
           ,[peso_log]
           ,[valor_log]
           ,[user_create])
     VALUES
           ('".$id_tipo."',
           '".$carga_origem."',
           (select CONVERT (date, GETDATE())), 
           ".$date_expedicao.", 
           ".$date_agendamento.", 
           '".$id_status."',
           '".$id_regiao."', 
           '".$cliente_cidade."', 
           '".$carga_nestle."', 
           '".$qtd_nestle."', 
           ".$peso_nestle.", 
           '".$valor_nestle."', 
           '".$carga_vigor."',
           '".$qtd_vigor."', 
           ".$peso_vigor.", 
           '".$valor_vigor."', 
           '".$carga_atacado."', 
           '".$qtd_atacado."', 
           ".$peso_atacado.", 
           '".$valor_atacado."', 
           '".$carga_italac."', 
           '".$qtd_italac."', 
           ".$peso_italac.", 
           '".$valor_italac."', 
           '".$carga_pavioli."', 
           '".$qtd_pavioli."', 
           ".$peso_pavioli.",
           '".$valor_pavioli."', 
           '".$carga_log."', 
           '".$qtd_log."', 
           ".$peso_log.", 
           '".$valor_log."',
           '".$IdUser."' )";
  }

  elseif ($date_agendamento != null and $date_expedicao != null) {
      $query = "
            INSERT INTO [dbo].[controleCarga]
           ([id_tipo]
           ,[carga_origem]
           ,[date_criacao]
           ,[date_expedicao]
           ,[date_agendamento]
           ,[id_status]
           ,[id_regiao]
           ,[cliente_cidade]
           ,[carga_nestle]
           ,[qtd_nestle]
           ,[peso_nestle]
           ,[valor_nestle]
           ,[carga_vigor]
           ,[qtd_vigor]
           ,[peso_vigor]
           ,[valor_vigor]
           ,[carga_atacado]
           ,[qtd_atacado]
           ,[peso_atacado]
           ,[valor_atacado]
           ,[carga_italac]
           ,[qtd_italac]
           ,[peso_italac]
           ,[valor_italac]
           ,[carga_pavioli]
           ,[qtd_pavioli]
           ,[peso_pavioli]
           ,[valor_pavioli]
           ,[carga_log]
           ,[qtd_log]
           ,[peso_log]
           ,[valor_log]
           ,[user_create])
     VALUES
           ('".$id_tipo."',
           '".$carga_origem."',
           (select CONVERT (date, GETDATE())), 
           '".$date_expedicao."', 
           '".$date_agendamento."', 
           '".$id_status."',
           '".$id_regiao."', 
           '".$cliente_cidade."', 
           '".$carga_nestle."', 
           '".$qtd_nestle."', 
           ".$peso_nestle.", 
           '".$valor_nestle."', 
           '".$carga_vigor."',
           '".$qtd_vigor."', 
           ".$peso_vigor.", 
           '".$valor_vigor."', 
           '".$carga_atacado."', 
           '".$qtd_atacado."', 
           ".$peso_atacado.", 
           '".$valor_atacado."', 
           '".$carga_italac."', 
           '".$qtd_italac."', 
           ".$peso_italac.", 
           '".$valor_italac."', 
           '".$carga_pavioli."', 
           '".$qtd_pavioli."', 
           ".$peso_pavioli.",
           '".$valor_pavioli."', 
           '".$carga_log."', 
           '".$qtd_log."', 
           ".$peso_log.", 
           '".$valor_log."',
           '".$IdUser."' )";
  
  }

// Atribui - as Datas caso o mesmo seja Nulo - END

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