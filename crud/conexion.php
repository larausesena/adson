<?php
$conexion= new mysqli("localhost", "root", "", "datos_crud");
//Comproprobar conexion
if(mysqli_connect_errno())
{
    printf("fallo la conexion");
}
else{
    //printf("Estas conectado");
}
?>