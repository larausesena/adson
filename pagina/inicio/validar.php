<?php
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

if ($usuario != "sena"){
    header('Location: error.php');
}
else if ($usuario == "sena") 
    if ($contra != "123")
    {
        header('Location: error.php');
    }
else 
{}
  ?>  


