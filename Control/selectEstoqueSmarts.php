<?php

include("../Model/conexaoIntranetGd.php");

     $tableEstoqueSmarts = "SELECT a.id_smart, c.desc_marca, d.desc_modelo, COUNT(a.id) AS 'quantidade'
                            FROM estoqueSmart AS a
                            INNER JOIN cadastroSmart AS b ON a.id_smart = b.id
                            INNER JOIN cadastroMarca AS c ON b.id_marca = c.id
                            INNER JOIN cadastroModelo AS d ON b.id_modelo = d.id
                            WHERE a.disponivel = 'Sim'
                            GROUP BY a.id_smart, c.desc_marca, desc_modelo

     ";
     
$result = odbc_exec($con , $tableEstoqueSmarts);

?>