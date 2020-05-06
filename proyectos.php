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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre-mi.php">Sobre mi</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="proyectos.php">Proyectos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>

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

  <footer id="pie">
    <div class="container-fluid">
      <div class="container">
        <div class="row py-sm-5">
          <div class="col-12 col-sm-4 text-center text-sm-left">
            <div class="row">
              <div class="col-12">
                <p><a href="index.php"><span> ©Todos los derechos reservados <br>2020</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4 text-center text-sm-center">
            <div class="row">
              <div class="col-12">
                <a href="https://api.whatsapp.com/send?phone=541134247078&amp;text=Hola" target="_blank"><i
                    class="fab fa-whatsapp"></i></a>
                <a href="https://linkedin.com/in/dante-montera" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/dmontera/portfolio" target="_blank"><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4 text-center text-sm-right">
            <div class="row">
              <div class="col-12">
                <p>Patrocinado por <br><a href="https://depcsuite.com" target="_blank"><span>DePC Suite</span></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>