<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "proyectos";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyectos</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body>
  <?php include_once("menu.php"); ?>

  <div class="container">
    <section id="proyectos">
      <div class="row pt-4 pt-sm-5">
        <div class="col-12 col-sm-6">
          <h1>Mis proyectos</h1>
        </div>
      </div>
      <div class="row pb-5">
        <div class="col-12 col-sm-6">
          <h3>Estos son algunos de los proyectos que he realizado.</h3>
        </div>
      </div>

      <div class="row pb-5">
        <div class="col-12 col-sm-6 pb-3">
          <div class="bg-white">
            <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
            <div class="row p-4">
              <div class="col-12">
                <h2>ABM Clientes</h2>
                <p>Alta, Baja, modificación de un registro de clientes realizado en HTML, CSS, PHP, Bootstrap y Json.
                </p>
                <div class="row pt-5">
                  <div class="col-6 text-left pt-3">
                    <a href="" class="btn" target="_blank">Ver online</a>
                  </div>
                  <div class="col-6 text-right pt-3 pt-sm-4">
                    <a href="https://github.com/dmontera/portfolio" target="_blank">Código fuente</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 pb-5">
          <div class="bg-white">
            <img src="images/abmventas.png" alt="ABM Clientes" class="img-fluid">
            <div class="row p-4">
              <div class="col-12">
                <h2>Sistema de gestión de ventas</h2>
                <p>Gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax,
                  jQuery
                  y
                  MySQL de base de datos.
                </p>
                <div class="row pt-2">
                  <div class="col-6 text-left">
                    <a href="" class="btn" target="_blank">Ver online</a>
                  </div>
                  <div class="col-6 text-right pt-sm-2">
                    <a href="https://github.com/dmontera/portfolio" target="_blank">Código fuente</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="d-block d-sm-block d-md-none">
    <div class="row px-3">
      <div class="col-12 text-right">
        <h4>Patrocinado por <br><a href="https://depcsuite.com" target="_blank"><span>DePC Suite</span></a></h4>
      </div>
    </div>
  </div>

  <?php include_once("footer.php"); ?>
</body>

</html>