<?php

include("../Model/conexaoIntranetGd.php");

     $tableSelectMarca = "SELECT * FROM cadastroMarca
     ";

     $tableSelectModelo = "SELECT * FROM cadastroModelo
     ";
     
$resultMarca = odbc_exec($con , $tableSelectMarca);
$resultModelo = odbc_exec($con , $tableSelectModelo);

?>