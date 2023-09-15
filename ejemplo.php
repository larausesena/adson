<html>
    <head><title>Recibir datos en php</title></head>
    <meta http`-equiv="Content-type" content="text/html; charset=utf-8"/>
<meta charset="utf-8">
<body>
<font size="5" color="blue" face="comic sans ms">
 <?php
 $nombre = $_POST['nombre'];
 $apellido =$_POST['apellido'];
 $num1 = $_POST['num1'];
 $num2 =$_POST['num2'];
 echo $nombre." ".$apellido."<br>";
 echo $num1." ".$num2."<br>";
$suma=$num1+$num2;
$resta=$num1-$num2;
$multi=$num1*$num2;
$divi=$num1/$num2;
echo "<br>la suma de ".$num1." y ".$num2." es ".$suma;
echo "<br>la resta de ".$num1." y ".$num2." es ".$resta;
echo "<br>la multiplicacion de ".$num1." y ".$num2." es ".$multi;
echo "<br>la division de ".$num1." y ".$num2." es ".$divi."<p>";
 ?>
 <form>
    <table border="2">
        <tr>
            <th>Su nombre <?php $nombre2 = $_POST['nombre'];echo $nombre2    ?><th>
            <th>su Apellido <?php $apellido2 = $_POST['apellido'];echo $apellido2    ?><th>
            <th>1 numero <?php $num3 = $_POST['num1'];echo $num3    ?><th>
            <th>2 numero <?php $num4 = $_POST['num2'];echo $num4    ?><th>
</tr>

</table>
</form>
</font>
<!--Actividad
en index en el mismo formulario cree los campos 
donde me pida dos numeros y en ejemplo me diga q numeros
son y despues la + , - , * y / de estos mostrando los
numeros con que realizo la operacion -->