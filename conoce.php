<!DOCTYPE html>
<html lang="es">
<head>
  <?php include ("./secciones/head.php"); ?>
  <title>Vuelos | Aventura en Globos</title>
  <meta name="description" content="">
</head>

<body data-spy="scroll" data-target="#topnav" class="vuelosFondo" >
  <div class="fondo2">
<?php include ("./secciones/menu.php"); ?>

<div class="contenidoPagMenu">
  <div class="row">
    <div class="col-md-2">
      <div>
        <?php include ("./secciones/menuPaquete.php"); ?>
      </div>
    </div>

       <div class="col-md-10">  <!-- contenido -->
      <article >
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h2><i class="fa fa-bookmark"></i> Xochimilco <small class="textoBlanco"></small></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h4 class="text-warning">Incluye:</h4>
            <ul>
              <li>Viaje redondo.</li>
              <li>La casa de Frida Kalo.</li>
              <li>Xochimilco.</li>
              <li>Estadio Azteca.</li>
              <li>Coyoacán.</li>
              <li>Ciudad Universitaria.</li>
            </ul>
            <br>
            <h4 class="text-warning text-center"><b> <br> </b></h4>
          </div>
          <div class="col-md-8 text-center">
            <img class="img-responsive img-rounded img" src="images/frico.jpg" alt="">    
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center ">
              <h3 class="textoNaranja">Ponte en contacto con nosotros para conecer precios.</h3>
              <a href="index.php#contact"><button class="btn btn-success btn-xlg sombra" type="submit">¡Contactanos!</button></a>
        </div>
      </article>
      <br>
      <article >
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h2><i class="fa fa-bookmark"></i> Grutas de Tolantongo <small class="textoBlanco"></small></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h4 class="text-warning">Incluye:</h4>
            <ul>
              <li>Viaje redondo.</li>
              <li>Descenso a las grutas.</li>
              <li>Dos días de estancia.</li>
              <li>Zona de camping.</li>
              <li>Lunch.</li>
              <li>Tirolesa.</li>
            </ul>
            <br>
            <h4 class="text-warning text-center"><b> <br> </b></h4>
          </div>
          <div class="col-md-8">
            <br><br>
            <img class="img-responsive img-rounded img" src="images/grutas.jpg" alt="">   
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center ">
              <h3 class="textoNaranja">Ponte en contacto con nosotros para conecer precios.</h3>
              <a href="index.php#contact"><button class="btn btn-success btn-xlg sombra" type="submit">¡Contactanos!</button></a>
          </div>
        </div>
      </article>
      <article >
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h2><i class="fa fa-bookmark"></i> Taxco <small class="textoBlanco"></small></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h4 class="text-warning">Incluye:</h4>
            <ul>
              <li>Visita a la iglesia.</li>
              <li>Visita a los talleres artesanales de plata.</li>
              <li>Paseo visita a la grutas.</li>
              <li>Paseo por los ríos.</li>
              <li>Paseo en el teleférico.</li>
              <li>Viosita a los restaurantes.</li>

            </ul>
            <br>
            <h4 class="text-warning text-center"><b> <br> </b></h4>
          </div>
          <div class="col-md-8 text-center"><br>
            <img class="img-responsive img-rounded img" src="images/taxco.jpg" alt="">    
          </div>

        </div>
        <div class="row">
          <div class="col-md-12 text-center ">
              <h3 class="textoNaranja">Ponte en contacto con nosotros para conecer precios.</h3>
              <a href="index.php#contact"><button class="btn btn-success btn-xlg sombra" type="submit">¡Contactanos!</button></a>
          </div>
                   <div class="col-md-4 text-center">
            <h3 class="text-primary"> .</h3>
          </div>
        </div>
      </article>
    </div>  <!-- /contenido -->
  </div>
</div>

<?php include ("./secciones/footer.php"); ?>

<script src="./js/jquery.js"></script>
<script src="./js/efectos.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script charset="utf-8">
  $('#liVuelo').addClass('colorNavActivo');
</script>
</div>
</body>
</html>
