<html>
    <head><title>Recibir datos en php</title></head>
    <meta http`-equiv="Content-type" content="text/html; charset=utf-8"/>
<meta charset="utf-8">
<body>
<font size="5" color="red" face="comic sans ms">
    REPASO PHP  </font>
<p>
<?php

echo "<p> hola mundo ";
$nombre ="<p> bienvenidos ";
echo $nombre;
$n1=1;
$n2=2;
$suma=$n1+$n2;
echo "<p> Los numeros de las varaibles son ".$n1." Y ".$n2." la suma de estos numeros es ".$suma;
?>

<form name="formulario" method="post" action="datos.php">
    <table border=2>
        <tr>
            <td>Usuario <input type="text" name="usuario" size="25" maxlength="50"></td>
            <td>Contraseña <input type="password" name="contra" size="25" maxlength="50"></td>
</tr>
<tr>
            <td>Numero1 <input type="number" name="num1" size="25" maxlength="50"></td>
            <td>Numero2 <input type="number" name="num2" size="25" maxlength="50"></td>
</tr>
<tr> <td><input type="submit" value="Enviar"></td></tr>
</table>
</form>


</body>
</html>



