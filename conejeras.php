<?php
$conectarBD=mysqli_connect("localhost","root","","bancos");
    if (!$conectarBD){
        die("No hay conexion de la conejera");
    }else{
        echo"Conexion exitosa";
    }
?>
