<nav class="navbar navbar-expand-md">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo $pg == "inicio" ? "active" : ""; ?>" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $pg == "sobremi" ? "active" : ""; ?>" href="sobre-mi.php">Sobre mi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $pg == "proyectos" ? "active" : ""; ?>" href="proyectos.php">Proyectos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $pg == "contacto" || $pg == "confirmacion-envio" ? "active" : ""; ?>" href="contacto.php">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>