<?php
include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crud php</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<div class="todo">

    <div id="cabecera">
        <img src="imagenes/fondo.jpg" width="1000" id="img1">
    </div>

    <div id="contenido">
        <div style="margin: auto; width: 800px; border-collapse: separte; border-spacing: 10px 5px;">
    <span><h1>Nuevo producto</h1></span>
    <br>
    <form action="nuevo_prod2.php" method="POST" style="border-collapse: separte; border-spacing: 10px 5px;">
    <label>Id Producto: </label>
    <input type="text" id="id_producto" name="id_producto"><br>

    <label>Producto: </label>
    <input type="text" id="producto" name="producto"><br>

    <label>Descripcion: </label>
    <textarea style="border-radius: 10px;" rows="3" cols="50" name="descripcion"></textarea><br>

    <br>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
    </div>

    </div>

    <div id="footer">
        <img src="imagenes/imagen.jpg" id="img2">
    </div>

</div>


</body>
</html>