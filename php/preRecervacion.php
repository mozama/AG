<!html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="./image/png" href="../images/favicon.png"/>
    <title>Enviar Mensaje Contacto</title>
  </head>
  <body style="background-image: url(../images/piramide.jpg); background-size:cover; background-repeat:no-repeat;">

  </body>
</html>

<?php

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $mensaje = $_POST["mensaje"];

  $aventura = $_POST['aventura'];
  $hospedaje = $_POST['hospedaje'];
  $vuelo = $_POST['vuelo'];

  require 'PHPMailerAutoload.php';
/*  require 'codigoCondiciones.php';
  $condiciones = codigoC();*/

  $mail = new PHPMailer;

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'pruebasMoza@gmail.com';
  $mail->Password = 'pruebasM';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  $mail->From = $email;
  $mail->FromName = $nombre;
  $mail->addAddress('sili_santiago@hotmail.com', 'Contacto AG');

  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';

  $vuelos="";
      if (in_array("1", $vuelo)) {
        $vuelos=$vuelos." Vuelo Compartido -";
      }
      if (in_array("2", $vuelo)) {
          $vuelos=$vuelos." Vuelo VIP -";
      }
      if (in_array("3", $vuelo)) {
        $vuelos=$vuelos." Vuelo Madrugador -";
      }
      if (in_array("4", $vuelo)) {
        $vuelos=$vuelos." Vuelo Privado ";
      }

  $hospedajes="";
    if (in_array("1", $hospedaje)) {
      $hospedajes=$hospedajes." Hotel Quinto Sol -";
    }
    if (in_array("2", $hospedaje)) {
        $hospedajes=$hospedajes." Hotel Villas Arqueológicas -";
    }
    if (in_array("3", $hospedaje)) {
      $hospedajes=$hospedajes." Hotel Ollin Teotl -";
    }
    if (in_array("4", $hospedaje)) {
      $hospedajes=$hospedajes." Posada Jade";
    }

    $aventuras="";
        if (in_array("1", $aventura)) {
          $aventuras=$aventuras." Ultraligero <br>";
        }
        if (in_array("2", $aventura)) {
            $aventuras=$aventuras." Temazcal <br>";
        }
        if (in_array("3", $aventura)) {
          $aventuras=$aventuras." Visita Guiada <br>";
        }
        if (in_array("4", $aventura)) {
          $aventuras=$aventuras." Tour en Cuatrimoto <br>";
        }
        if (in_array("5", $aventura)) {
          $aventuras=$aventuras." Reino Animal <br>";
        }
        if (in_array("6", $aventura)) {
          $aventuras=$aventuras." Tour en bici: Ruta pulque-arqueológica <br>";
        }
        if (in_array("7", $aventura)) {
          $aventuras=$aventuras." Bicitour Teotihuacan: Bike Cueva <br>";
        }
        if (in_array("8", $aventura)) {
          $aventuras=$aventuras." Bike tour Teotihuacan: Rodada-nadada <br>";
        }
        if (in_array("9", $aventura)) {
          $aventuras=$aventuras." Bici-Campamento <br>";
        }
        if (in_array("10", $aventura)) {
          $aventuras=$aventuras." Biketour Teotihuacan: Ruta gastronómica <br>";
        }

  $mail->Subject = 'PRE-RECERVACIÓN desde sitio web';
  $mail->Body    = "
  <table border='1' cellspacing='3' cellpadding='3'>
  <tr>
    <th align='center' colspan='2'>
      Pre-recervación
    </th>
  </tr>
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
        <td align='right'><strong>Paquete de Vuelo:</strong></td>
        <td align='left'>".$vuelos." </td>
      </tr>
      <tr>
        <td align='right'><strong>Hospedaje:</strong></td>
        <td align='left'>".$hospedajes." </td>
      </tr>
      <tr>
        <td align='right'><strong>Más Aventura:</strong></td>
        <td align='left'>".$aventuras." </td>
      </tr>
      <tr>
        <td align='right'><strong>Nota:</strong></td>
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
    echo '<script language="javascript" type="text/javascript">
            alert("No se pudo realizar la pre-reservación, intentalo más tarde" );
            document.location.href="../index.php";
            </script>';
  }
  else{
    echo '<script language="javascript" type="text/javascript">
            alert("Se envió la pre-reservación correctamente, pronto nos pondremos en contacto con usted." );
            document.location.href="../index.php";
            </script>';
  }
