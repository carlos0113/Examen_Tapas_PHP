<?php
session_start();
include 'head.php';             
echo'<form action="" method="post">
            Selecciona la Tapa a la cual quieres votar
                            <select name="codigo">';
                              foreach($_SESSION["tapas"] as $clave=>$vector) {
                                echo'<option value="'.$clave.'">'.$vector[0].'</option>';
                              }
                                echo'</select>
     <br> 
     <input name="votar" type="submit"  value="Votar"/>
    </form>';
if(isset($_REQUEST["votar"])) {
  $codigo_tapa=$_REQUEST["codigo"];
  $_SESSION["votos"][$codigo_tapa]++;
}
 include 'pie.php';

