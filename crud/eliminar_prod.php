<?php
    EliminarProducto($_GET['no']);

    function EliminarProducto($no)
    {
        include 'conexion.php';
        $sentecia="DELETE FROM productos WHERE no='".$no."' ";
        $conexion->query($sentecia) or die ("Error al eliminar".mysqli_error($conexion));

    }
    ?>

    <script type="text/javascript">
        alert("Producto Elininado!!");
        window.location.href='index.php';
        </script>