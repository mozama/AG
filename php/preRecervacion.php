<!html>
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  </head>
</html>

<?php

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $mensaje = $_POST["mensaje"];

  require 'PHPMailerAutoload.php';
/*  require 'codigoCondiciones.php';
  $condiciones = codigoC();*/

  $mail = new PHPMailer;

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'santiago7nubesoft@gmail.com';
  $mail->Password = '';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  $mail->From = $email;
  $mail->FromName = $nombre;
  $mail->addAddress('sili_santiago@hotmail.com', 'Contacto AG');

  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';

  $mail->Subject = 'PRE-RECERVACIÓN desde sitio web';
  $mail->Body    = "
  <table border='0' cellspacing='3' cellpadding='2'>
  <tr>
    <th align='center'>
      Pre-recervación
    </th>
  </tr>
    <tr>
      <td width='30%' align='rigth'><strong>Nombre:</strong></td>
      <td width='80%' align='left'>".$nombre." </td>
      </tr>
      <tr>
        <td align='rigth'><strong>E-mail:</strong></td>
        <td align='left'>".$email."</td>
      </tr>
      <tr>
        <td width='30%' align='rigth'><strong>Teléfono:</strong></td>
        <td width='70%' align='left'>".$telefono." </td>
      </tr>
      <tr>
        <td align='rigth'><strong>Nota:</strong></td>
        <td align='left'>".$mensaje." </td>
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
    echo "Problemas enviando correo electrónico";
  }
  else{
    echo "Mensaje enviado correctamente";
  }
