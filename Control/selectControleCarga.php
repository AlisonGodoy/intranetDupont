<?php
if(!isset($_SESSION)){  
  session_start(); 
} 

$mes = $_SESSION['mesSelecionado'];

if ($mes == 1 or $mes == 3 or $mes == 5 or $mes == 7 or $mes == 8 or $mes == 10 or $mes == 12 ) {
  $dayFinal = 31;
}elseif ($mes == 2) {
  $dayFinal = 28;
}else{
  $dayFinal = 30;
}

include("../Model/conexaoIntranetGd.php");

     $table = "SELECT a.id_carga
      ,b.desc_tipo
      ,a.carga_origem
      ,CONVERT (VARCHAR,a.date_criacao,103) AS date_criacao
      ,CONVERT (VARCHAR,a.date_expedicao,103) AS date_expedicao
      ,CONVERT (VARCHAR,a.date_agendamento,103) AS date_agendamento
      ,c.desc_status
      ,f.desc_regiao
      ,a.cliente_cidade
      ,a.carga_nestle
      ,a.qtd_nestle
      ,a.peso_nestle
      ,a.valor_nestle
      ,a.carga_vigor
      ,a.qtd_vigor
      ,a.peso_vigor
      ,a.valor_vigor
      ,a.carga_atacado
      ,a.qtd_atacado
      ,a.peso_atacado
      ,a.valor_atacado
      ,a.carga_italac
      ,a.qtd_italac
      ,a.peso_italac
      ,a.valor_italac
      ,a.carga_pavioli
      ,a.qtd_pavioli
      ,a.peso_pavioli
      ,a.valor_pavioli
      ,a.carga_log
      ,a.qtd_log
      ,a.peso_log
      ,a.valor_log
      ,d.Name as NameInsert
      ,e.Name as NameUpdate

      FROM controleCarga AS a
      LEFT JOIN tipoCarga AS b ON a.id_tipo = b.id_tipo
      LEFT JOIN statusCarga AS c ON a.id_status = c.id_status
      LEFT JOIN UserGd AS d ON a.user_create = d.CodUser
      LEFT JOIN UserGd AS e ON a.user_update = e.CodUser 
      LEFT JOIN Regiao AS f ON a.id_regiao = f.id_regiao      
      WHERE date_criacao BETWEEN ((SELECT CONCAT(YEAR(GETDATE()),'-', ".$mes.",'-', 01 ))) AND ((SELECT CONCAT(YEAR(GETDATE()),'-', ".$mes.",'-', ".$dayFinal." )))


     ";
     
$result = odbc_exec($con , $table);
?>