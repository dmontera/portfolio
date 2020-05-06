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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
 
</head>

<body id="index" background="images/fondo1.png">
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre-mi.php">Sobre mi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="proyectos.php">Proyectos</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>

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