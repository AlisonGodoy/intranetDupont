<?php

include("../Model/conexaoIntranetGd.php");

     $tableBaixaSmarts = "SELECT a.id_estoque, CONVERT (VARCHAR,a.data_baixa,103) AS data_baixa, c.desc_marca, d.desc_modelo, e.imei, e.pulsus, f.desc_motivo, a.destino, g.desc_devolucao 
                            FROM baixaSmart AS a
                            INNER JOIN cadastroSmart AS b ON a.id_smart = b.id
                            INNER JOIN cadastroMarca AS c ON b.id_marca = c.id
                            INNER JOIN cadastroModelo AS d ON b.id_modelo = d.id
                            INNER JOIN estoqueSmart AS e ON a.id_estoque = e.id
                            INNER JOIN cadastroMotivo AS f ON a.id_motivo = f.id
                            INNER JOIN cadastroDevolucao AS g ON a.id_devolucao = g.id
     ";
     
$result = odbc_exec($con , $tableBaixaSmarts);

?>
