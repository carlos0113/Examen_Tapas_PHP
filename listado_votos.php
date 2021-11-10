<?php
session_start();
include 'head.php';
var_dump($_SESSION["tapas"]);
echo("<br><br>");
var_dump($_SESSION["votos"]);
echo("<br><br>");
echo'
<table>
    <thead>
        <th>Codigo Tapa</th>
        <th>Numero votos</th>
    </thead>
    <tbody>';
        foreach($_SESSION["votos"] as $clave=>$valor) {
            echo'<tr>
                <td>'.$clave.'</td>
                <td>'.$valor.'</td>
            </tr>';
        }
    echo'</tbody>
</table>
';
 include 'pie.php';

