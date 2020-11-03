<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "contacto";

include_once("PHPMailer/src/PHPMailer.php");
include_once("PHPMailer/src/SMTP.php");

function guardarCorreo($correo)
{
  $archivo = fopen("mails.txt", "a+");
  fwrite($archivo, $correo . "\n");
  fclose($archivo);
}

if ($_POST) {

  $nombre = $_POST["txtNombre"];
  $correo = $_POST["txtCorreo"];
  $asunto = $_POST["txtAsunto"];
  $mensaje = $_POST["txtMensaje"];

  guardarCorreo($correo);


  if ($nombre != "" && $correo != "") {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "mail.dominio.com"; // SMTP a utilizar
    $mail->Username = "info@dominio.com.ar"; // Correo completo a utilizar
    $mail->Password = "aqui va la clave de tu correo";
    $mail->Port = 25;
    $mail->From = "info@dominio.com.ar"; //Desde la cuenta donde enviamos
    $mail->FromName = "Tu nombre a mostrar";
    $mail->IsHTML(true);
    $mail->SMTPOptions = array(
      'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );

    //Destinatarios
    $mail->addAddress($correo);
    $mail->addBCC("dante.montera@hotmail.com"); //Copia oculta
    $mail->Subject = utf8_decode("Contacto página Web");
    $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
    //if (!$mail->Send()) {
    //$msg = "Error al enviar el correo, intente nuevamente mas tarde.";
    //}
    $mail->ClearAllRecipients(); //Borra los destinatarios

    //Envía ahora un correo a nosotros con los datos de la persona
    $mail->addAddress("dante.montera@hotmail.com");
    $mail->Subject = utf8_decode("Recibiste un mensaje desde tu página Web");
    $mail->Body = "Te escribio $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";

    //if ($mail->Send()) { /* Si fue enviado correctamente redirecciona */
    header('Location: confirmacion-envio.php');
    //} else {
    $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
    //}
    //} else {
    $msg = "Complete todos los campos";
  }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
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
    <section id="contacto">
      <div class="row pt-4 pt-sm-5">
        <div class="col-12">
          <h1>¡Trabajemos juntos!</h1>
        </div>
      </div>
      <div class="row py-4 pt-sm-3">
        <div class="col-12 col-sm-6">
          <h2>Para más detalles sobre mi trabajo podés ver mi <a href="https://linkedin.com/in/dante-montera" target="_blank">Linkedin</a>, descargar mi <a href="http://localhost/portfolio/files/DANTE_MONTERA.pdf" target="_blank">CV</a> o mandarme un <a href="contacto.php">mensaje.</a>
          </h2>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-10">
          <form method="POST" action="contacto.php">
            <div class="row pt-3 pt-sm-5">
              <div class="col 12 col-sm-6 form-group">
                <input type="text" name="txtNombre" id="txtNombre" class="form-control" required placeholder="NOMBRE">
              </div>
              <div class="col-12 col-sm-6 form-group">
                <input type="email" name="txtCorreo" id="txtCorreo" class="form-control" required placeholder="CORREO">
              </div>
              <div class="col-12 form-group">
                <input type="text" name="txtAsunto" id="txtAsunto" class="form-control" required placeholder="ASUNTO">
              </div>
              <div class="col-12 form-group">
                <textarea name="txtMensaje" id="txtMensaje" rows="7" class="form-control" placeholder="MENSAJE" required></textarea>
              </div>
            </div>
            <div class="row pb-5">
              <div class="col-12 text-center">
                <input type="submit" name="btnEnviar" value="ENVIAR" class="btn">
              </div>
            </div>
          </form>
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