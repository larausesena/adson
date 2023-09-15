<html>
    <head><title>Recibir datos en php</title></head>
    <meta http`-equiv="Content-type" content="text/html; charset=utf-8"/>
<meta charset="utf-8">
<body>
    <a href="index.php">Inicio </a><br>
    <a href="index.datos.php">datos </a><br>
<p>

<?php
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
echo $usuario." y ".$contra;
echo "<br>".$num1." y ".$num2;
//Actividad decir cual de los numeros es mayot¿r y cual es menor y q diga si son iguales 
if ($num1 > $num2){
    echo "<p> El numero ".$num1." es mayor y el numero ".$num2." es menor";
}
else if ($num1 < $num2){
    echo "<p> El numero ".$num2." es mayor y el numero ".$num1." es menor";
}
else
{
    echo "<p> El numero ".$num2." y el  ".$num1." son iguales";
}



if ($contra == "sena"){
    echo "<p> Bienvenido al sistema ";
}
else {
    echo "<p> Contraseña incorrecta ";

}
?>

<!-- Actividad
1 debe validar el usuario
2 si el usuario es correcto pasa a validar la contraseña
3 si el usuario es incorrecto le dice que el usuario no es correcto y no puede validar la contraseña
4 cuando valide la contraseña si es correcta le dice bienvenido al sistema
5 si la contraseña es incorrecta le dice que la contraseña es incorrecta -->
 <table border=2>
        <tr>
            <td>Usuario <?php echo $usuario; ?></td>
            <td>Contraseña <?php echo $contra;?></td>
</tr>
</table>

