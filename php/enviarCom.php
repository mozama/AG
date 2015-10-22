<!html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="./image/png" href="../images/favicon.png"/>
    <title>Enviar Mensaje Contacto</title>
  </head>
  <body style="background-image: url(../images/aerostatico2.jpg); background-size:cover; background-repeat:no-repeat;">

  </body>
</html>

<?php

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $mensaje = $_POST["mensaje"];

  require 'PHPMailerAutoload.php';
  require 'codigoCondiciones.php';
  $condiciones = codigoC();

  $mail = new PHPMailer;

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'sitiowebaventuraglobos@gmail.com';
  $mail->Password = 'agSitio2015';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  $mail->From = $email;
  $mail->FromName = $nombre;
  $mail->addAddress('aventuraenglobos@hotmail.com', 'Contacto AG');

  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';

  $mail->Subject = 'Contacto desde sitio web';
  $mail->Body    = "
  <table border='0' cellspacing='3' cellpadding='2'>
    <tr>
      <td width='30%' align='right'><strong>Nombre:</strong></td>
      <td width='80%' align='left'>".$nombre." </td>
      </tr>
      <tr>
        <td align='right'><strong>E-mail:</strong></td>
        <td align='left'>".$email."</td>
      </tr>
      <tr>
        <td width='30%' align='right'><strong>Teléfono:</strong></td>
        <td width='70%' align='left'>".$telefono." </td>
      </tr>
      <tr>
        <td align='right'><strong>Comentario:</strong></td>
        <td align='left'>".$mensaje." </td>
      </tr>
      <tr>
        <td align='right'><strong>Fecha:</strong></td>
        <td align='left'>".$condiciones." </td>
      </tr>
    </table>";
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $exito = $mail->send();
  $intentos=1;

  while ((!$exito) && ($intentos < 5)) {
    sleep(5);
    $exito = $mail->send();
    $intentos=$intentos+1;
  }

  if(!$exito){
    echo '<script language="javascript" type="text/javascript">
            alert("No se pudo realizar el envio del mensaje, intentalo más tarde" );
            document.location.href="../index.php";
            </script>';
  }
  else{
    echo '<script language="javascript" type="text/javascript">
            alert("Mensaje enviado correctamente, gracias por ponerse en contacto con nosotros." );
            document.location.href="../index.php";
            </script>';
    }
