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

    <div id=contenido>
        <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <thead>
            <th>No.</th>
            <th>ID</th>
            <th>Producto</th>
            <th>Descripcion</th>
            <th> <a href="nuevo_prod1.php"><button type="button" class="btn btn-info">Nuevo</button></a></th>
        </thead>

        <?php
        include "conexion.php";
        $sentecia="SELECT * FROM productos";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>"; echo $fila['no']; echo "</td>";
            echo "<td>"; echo $fila['id_producto']; echo "</td>";
            echo "<td>"; echo $fila['nombre']; echo "</td>";
            echo "<td>"; echo $fila['descripcion']; echo "</td>";
            echo "<td><a href='modif_prod1.php?no=".$fila['no']."'> <button type='button' class='btn btn-success'>Modificar</button></a></td>";
            echo "<td><a href='eliminar_prod.php?no=".$fila['no']."'> <button type='button' class='btn btn-success'>Eliminar</button></a></td>";
            echo "</tr>";
        }
        ?>



    </table>
    </div>

    <div id="footer">
        <img src="imagenes/imagen.jpg" id="img2">
    </div>

    </div>
</body>
</html>
