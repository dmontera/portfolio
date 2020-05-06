<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre mí</title>
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
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item active">
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
    <section id="sobre-mi">
      <div class="row pt-3 pt-sm-5" id="parrafo">
        <div class="col-12 col-sm-6">
          <h1>Sobre mi</h1>
          <p>Técnico electromecánico. Estudiante de Letras y de Programación. Apasionado por el constante aprendizaje,
            la ciencia, la tecnología, la literatura y el cine.</p>
        </div>
        <div class="col-12 col-sm-6 text-center pt-4 pt-sm-0">
          <img src="images/IMG_20190523_103450.jpg" alt="fotocv">
        </div>
      </div>
      <div class="row py-5 pt-sm-3 pb-sm-4">
        <div class="col-12 text-center text-sm-left">
          <a href="http://localhost/portfolio/files/C.V.pdf" class="btn" target="_blank">Descargar CV</a>
        </div>
      </div>

      <div class="row py-sm-3">
        <div class="col-12 col-sm-6 pb-4 pb-sm-0">
          <div class="bg-white p-4">
            <i class="fas fa-code"></i>
            <h5>LENGUAJES DE PROGRAMACIÓN</h5>
            <p>PHP, Laravel, HTML, CSS, Bootstrap, Javascript, jQuery, React.js, MySQL/MariaDB</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 pb-4 pb-sm-0">
          <div class="bg-white p-4">
            <i class="fas fa-laptop"></i>
            <h5>SOFTWARE</h5>
            <P>Git, Heidi SQL, Sublime Text, XAMPP, Word, Excel</P>
          </div>
        </div>
      </div>

      <div class="row pb-5">
        <div class="col-12 col-sm-6 pb-4">
          <div class="bg-white p-4">
            <i class="fas fa-language"></i>
            <h5>IDIOMAS</h5>
            <P>INGLES - Intermediate B2 <br>ESPAÑOL - Nativo </P>
          </div>
        </div>
        <div class="col-12 col-sm-6 pb-4">
          <div class="bg-white p-4">
            <i class="fas fa-puzzle-piece"></i>
            <h5>HOBBIES</h5>
            <p>Fútbol <br>Running <br>Lectura</p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="container-fluid" id="exp">
    <div class="container">
      <div class="row pt-5 py-3 py-sm-5">
        <div class="col-12">
          <h6>Experiencia laboral</h6>
        </div>
      </div>
      <div class="row py-4 py-sm-5" id="descr">
        <div class="col-12 col-sm-2">
          <p><span>2019-2020<br>C.A.B.A.</span></p>
        </div>
        <div class="col-12 col-sm-2 pb-3 pb-sm-0" id="decor">
          <img src="images/pastalinda.png" alt="fotopasta">
        </div>
        <div class="col-12 col-sm-4">
          <p><span>Operador metalúrgico</span><br>Pastalinda S.A.</p>
        </div>
        <div class="col-12 col-sm-4">
          <p><span>Tareas</span><br>Armado, preparación y reparación de piezas para máquinas para hacer pastas y armado
            de dichas máquinas.</p>
        </div>
      </div>
      <div class="row py-4 py-sm-5">
        <div class="col-12 col-sm-2">
          <p><span>2019<br>C.A.B.A.</span></p>
        </div>
        <div class="col-12 col-sm-2 pb-3 pb-sm-0" id="decor">
          <img src="images/estrategia.jpg" alt="fotoestrat">
        </div>
        <div class="col-12 col-sm-4">
          <p><span>Data entry</span><br>Estrategia laboral</p>
        </div>
        <div class="col-12 col-sm-4">
          <p><span>Tareas</span><br>Subida de datos de las elecciones presidenciales de 2019.</p>
        </div>
      </div>
      <div class="d-block d-sm-block d-md-none">
        <div class="row pt-5">
          <div class="col-12 text-right">
            <h4>Patrocinado por <br><a href="https://depcsuite.com" target="_blank"><span>DePC Suite</span></a></h4>
          </div>
        </div>
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
                <a href="https://api.whatsapp.com/send?phone=541134247078&amp;text=Hola" target="_blank"><i class="fab fa-whatsapp"></i></a>
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