<?php
// pagina con todas la propiedades de administrador del software
session_start();

//Validamos que existe un session ademas que el cargo que exista sea igual a 1 que es administrador
if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] !=1){
    /* 
    para redireccionar en php se utiliza header
    pero al ser datos enviados por la cabecera debe esjecutarse
    antes de mostrar cualquier informcaionen DOM es por eso que coloco
    el codigo antes de la estructura del html 
    */
    header('location: ../../index.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Administrador</title>
    </head>
    <body>
        <!-- ucfirst convierte la primera letra en mayusculo de una cadena -->
        Hola Administrador <?php echo ucfirst($_SESSION['nombre']); ?>
        <a href="../../controller/cerrarSesion.php">
            <button type="button" name="button">Cerrar sesion</button>
        </a>
    </body>
</html>