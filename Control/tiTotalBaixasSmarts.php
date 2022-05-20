<?php

include("../Model/conexaoIntranetGd.php");

     $resultTotalBaixas = "SELECT COUNT(DISTINCT ID_ESTOQUE) AS TOTAL_BAIXADO FROM baixaSmart WHERE ID_DEVOLUCAO = '2'
     ";
     
$result = odbc_exec($con , $resultTotalBaixas);

?>