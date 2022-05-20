<?php

include("../Model/conexaoIntranetGd.php");

     $baixaSmartsIdUm = "SELECT id 
                         FROM estoqueSmart
                         WHERE disponivel = 'Sim' AND id_smart = 1 

     ";
     
$resultUm = odbc_exec($con , $baixaSmartsIdUm);

     $baixaSmartsIdDois = "SELECT id 
                           FROM estoqueSmart
                           WHERE disponivel = 'Sim' AND id_smart = 2 

     ";
     
$resultDois = odbc_exec($con , $baixaSmartsIdDois);

     $baixaSmartsIdTres = "SELECT id 
                           FROM estoqueSmart
                           WHERE disponivel = 'Sim' AND id_smart = 3

     ";
     
$resultTres = odbc_exec($con , $baixaSmartsIdTres);

     $baixaSmartsIdQuatro = "SELECT id 
                             FROM estoqueSmart
                             WHERE disponivel = 'Sim' AND id_smart = 4 

     ";
     
$resultQuatro = odbc_exec($con , $baixaSmartsIdQuatro);
     
     $baixaSmartsIdCinco = "SELECT id 
                             FROM estoqueSmart
                             WHERE disponivel = 'Sim' AND id_smart = 5 

     ";
     
$resultCinco = odbc_exec($con , $baixaSmartsIdCinco);

     $baixaSmartsIdDez = "SELECT id 
                             FROM estoqueSmart
                             WHERE disponivel = 'Sim' AND id_smart = 10 

     ";
     
$resultDez = odbc_exec($con , $baixaSmartsIdDez);

    $baixaSmartsIdOnze = "SELECT id 
                             FROM estoqueSmart
                             WHERE disponivel = 'Sim' AND id_smart = 11 

     ";
     
$resultOnze = odbc_exec($con , $baixaSmartsIdOnze);


    $baixaSmartsIdQuatorze = "SELECT id 
                             FROM estoqueSmart
                             WHERE disponivel = 'Sim' AND id_smart = 14 

     ";
     
$resultQuatorze = odbc_exec($con , $baixaSmartsIdQuatorze);

     $baixaSmartsIdQuinze = "SELECT id 
                             FROM estoqueSmart
                             WHERE disponivel = 'Sim' AND id_smart = 15

     ";
     
$resultQuinze = odbc_exec($con , $baixaSmartsIdQuinze);

     $baixaSmartsIdDezesseis = "SELECT id 
                             FROM estoqueSmart
                             WHERE disponivel = 'Sim' AND id_smart = 16 

     ";
     
$resultDezesseis = odbc_exec($con , $baixaSmartsIdDezesseis);

     $baixaSmartsIdDezessete = "SELECT id 
                             FROM estoqueSmart
                             WHERE disponivel = 'Sim' AND id_smart = 17 

     ";
     
$resultDezoito = odbc_exec($con , $baixaSmartsIdDezessete);

     $baixaSmartsIdDezoito = "SELECT id 
                             FROM estoqueSmart
                             WHERE disponivel = 'Sim' AND id_smart = 18 

     ";
     
$resultDezoito = odbc_exec($con , $baixaSmartsIdDezoito);
?>