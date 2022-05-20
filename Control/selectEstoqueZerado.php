<?php

include("../Model/conexaoIntranetGd.php");

     $tableEstoqueSmarts = "SELECT a.id, b.desc_marca, c.desc_modelo
                            FROM cadastroSmart AS a
                            INNER JOIN cadastroMarca AS b ON b.id = a.id_marca
                            INNER JOIN cadastroModelo AS c ON a.id_modelo = c.id
                            WHERE a.id NOT IN (select distinct id_smart from estoqueSmart where disponivel = 'sim') 
                            GROUP BY a.id, b.desc_marca, c.desc_modelo

     ";
     
$result = odbc_exec($con , $tableEstoqueSmarts);

?>