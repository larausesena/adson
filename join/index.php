<?php
include_once('db.php');
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Larause | join php</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">larause</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Conenido pagina  -->

<div class="container">
    <h3 class="mt-5">Join php</h3>
    <hr>
    <div class="row">
        <div class="col-12 col-md-12">
            <!--Contenido -->
            <?php
            //selecionar los itens de la pagina 
    $sql ="SELECT especie.Nombre, animales.Animales FROM especie INNER JOIN animales ON especie.id=animales.IdEspecie WHERE animales.IdEspecie=3;";
    $resultado = mysqli_query($conectar, $sql);
    ?>
    <div class="container theme-showcase" role="main">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Especie</th>
                            <th class="text-center">Animales</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n=0; while($row = mysqli_fetch_array($resultado)){ $n++;?>
                            <tr>
                                <td class="text-center"><?php echo $n; ?></td>
                                <td class="text-center"><?php echo $row["Nombre"]; ?></td>
                                <td class="text-center"><?php echo $row["Animales"]; ?></td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



        </div>
    </div>
</div>