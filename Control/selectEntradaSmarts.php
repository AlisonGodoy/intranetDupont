<?php

include("../Model/conexaoIntranetGd.php");

     $tableEntradaSmarts = "SELECT a.id_estoque, CONVERT (VARCHAR,a.data_entrada,103) AS data_entrada, c.desc_marca, d.desc_modelo, e.imei, e.pulsus, f.desc_origem
                            FROM entradaSmart AS a
                            INNER JOIN cadastroSmart AS b ON a.id_smart = b.id
                            INNER JOIN cadastroMarca AS c ON b.id_marca = c.id
                            INNER JOIN cadastroModelo AS d ON b.id_modelo = d.id
                            INNER JOIN estoqueSmart AS e ON a.id_estoque = e.id
                            INNER JOIN cadastroOrigem AS f ON a.id_origem = f.id
     ";
     
$result = odbc_exec($con , $tableEntradaSmarts);

?>