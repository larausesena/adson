<html>
    <head><title>Recibir datos en php</title></head>
    <meta http`-equiv="Content-type" content="text/html; charset=utf-8"/>
<meta charset="utf-8">
<body>
<font size="5" color="red" face="comic sans ms">
    Bienvenidos al mundo de php </font>

<?php
echo "<br>Hola mundo";
?>
<p>
<font size="5" color="red" face="comic sans ms">
    variables en  php  adsosdddd</font><p>
<?php
$ini ="Hola esto es ";
$fin ="variables en php";
echo $ini.$fin;
echo "<br>contenido variable 1 ".$ini."<br>contenido variable 2 ".$fin;
?><p>

<font size="5" color="red" face="comic sans ms">
    operaciones con variables en   php <p>

<?php
$n1=1;
$n2=2;
echo $n1." ".$n2;
$suma=$n1+$n2;
$resta=$n1-$n2;
$multi=$n1*$n2;
$divi=$n1/$n2;
echo "<br>la suma de ".$n1." y ".$n2." es ".$suma;
echo "<br>la resta de ".$n1." y ".$n2." es ".$resta;
echo "<br>la multiplicacion de ".$n1." y ".$n2." es ".$multi;
echo "<br>la division de ".$n1." y ".$n2." es ".$divi;
//actividad muestre la - , * y / de las variables fijas
?></font>
<p>
<font size="5" color="red" face="comic sans ms">
    formularios en php </font><p>
    
<form name="formulario" method="post" action="ejemplo.php">
    <table border="2">
        <tr>
            <th>Nombre <input type="text" name="nombre" size="25" maxlength="50"><th>
            <th>Apellido <input type="text" name="apellido" size="25" maxlength="50"><th>
            <th>Nombre <input type="number" name="num1" size="25" maxlength="50"><th>
            <th>Apellido <input type="number" name="num2" size="25" maxlength="50"><th>
</tr>
<tr><td align="center"><input type="submit" value="enviar"></td></tr>
</table>
</form>
