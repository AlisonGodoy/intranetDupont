<?php

include("../Model/conexaoIntranetGd.php");

     $tableControleSmarts = "SELECT a.id, c.desc_marca, d.desc_modelo, a.imei, a.pulsus 
                            FROM estoqueSmart AS a
                            INNER JOIN cadastroSmart AS b ON a.id_smart = b.id
                            INNER JOIN cadastroMarca AS c ON b.id_marca = c.id
                            INNER JOIN cadastroModelo AS d ON b.id_modelo = d.id
                            WHERE a.disponivel = 'Sim'
                         ";
     
$result = odbc_exec($con , $tableControleSmarts);

?>