<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</head>

<body id="index" background="images/fondo1.png">

  <?php include_once("menu.php"); ?>

  <div class="container">
    <section id="inicio">
      <div class="row pt-5">
        <div class="col-12">
          <h1>Hola!<br>Soy Dante Montera</h1>
          <h2>DESARROLLADOR FULLSTACK</h2>
        </div>
      </div>
      <div class="row pt-4 pb-5">
        <div class="col-12">
          <a href="proyectos.php" class="btn" target="_self">MIRÁ MI TRABAJO!</a>
        </div>
      </div>
    </section>
  </div>

  <div class="d-block d-sm-block d-md-none" id="patron">
    <div class="row px-3 pt-5">
      <div class="col-12 text-right">
        <h4>Patrocinado por <br><a href="https://depcsuite.com" target="_blank"><span>DePC Suite</span></a></h4>
      </div>
    </div>
  </div>

  <?php include_once("footer.php"); ?>
</body>

</html>