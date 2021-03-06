<!DOCTYPE html>
<html lang="es">
<head>
  <?php include ("./secciones/head.php"); ?>
  <title>Paquetes de Vuelo | Aventura en Globos</title>
  <meta name="description" content="Conoce nuestros paquetes de vuelo | Vuelo Compartido | Vuelo VIP | Vuelo Madrugador | Vuelo Privado">

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69468292-1', 'auto');
    ga('send', 'pageview');
</script>

</head>

<body data-spy="scroll" data-target="#topnav" class="vuelosFondo" >
  <div class="fondo2">
<?php include ("./secciones/menu.php"); ?>

<div class="contenidoPagMenu">
  <div class="row">
    <div class="col-md-2">
        <?php include ("./secciones/menuPaquete.php"); ?>
    </div>

    <div class="col-md-10">  <!-- contenido -->
      <article id="vueloCompartido">
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h3 class="junction"><i class="fa fa-bookmark"></i> Vuelo Compartido: <small class="textoBlanco">Canastilla compartida con otros pasajeros</small></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <br>
            <p class="text-warning juntion"><b>Incluye:</b></p>
            <ul>
              <li class="juntion">Coffee break en zona de despegue (Sábados y Domingos).</li>
              <li class="juntion">Vuelo en Globo de 45 a 60 minutos.</li>
              <li class="juntion">Brindis con vino blanco espumoso al aterrizar.</li>
              <li class="juntion">Certificado de vuelo por pasajero.</li>
              <li class="juntion">Desayuno Buffet en Restaurante Gran Teocalli.</li>
              <li class="juntion">Transportación local durante la actividad.</li>
              <li class="juntion">Seguro de pasajeros.</li>
            </ul>
            <br>
            <p class="text-warning text-center junction"><b>Contamos con servicio de transporte a la CDMX viaje redondo,
              pregunta costos.<br> </b></p>
          </div>
          <div class="col-md-4">
            <br><br>
              <img class="img-responsive img-rounded img" src="images/vueloCompartido.jpg" alt="vuelo compartido">
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 text-center ">
            			<!-- fin del carrito-->
                  <br>
                <p class="textoNaranja textoPromocion">$ 2,300.<sup>00</sup> MXN</p>
                <p class="textoNaranja textoPromocion">$ 1,800.<sup>00</sup> MXN <small> - menores de 5-12 años</small></p>

                <!-- p class="text-warning roboto">No aplica en días festivos</p -->
                <!-- carrito vuelo compartido-->
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="X2269XC93PKXE">
                    <table>
                    <tr><td><input type="hidden" name="on0" value="Paquete Vuelo Compartido">Paquete Vuelo Compartido</td></tr><tr><td><select name="os0">
                     <option value="Vuelo compartido (costo por persona)">Vuelo compartido (costo por persona) $2,300.00 MXN</option>
                     <option value="Menores de 5 a 12">Menores de 5 a 12 $1,800.00 MXN</option>
                    </select> </td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>
        <!-- fin del carrito-->

          </div>
           <div class="col-md-4 text-center">
             <br>
            <p class="textoAmber textoPromocion2"><i class="fa fa-star" id="estrella"></i> <span class="text-danger">10% DE DESCUENTO </span> AL PAGAR EN EFECTIVO</p>
          </div>
        </div>
      </article>
      <br>
      <article id="vueloVip">
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h3 class="junction"><i class="fa fa-bookmark"></i> Vuelo Privado VIP: <small class="textoBlanco">Para esa ocación especial</small></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <h4 class="text-warning junction">Incluye:</h4>
            <ul>
              <li class="juntion">Coffee break en zona de despegue (Sábados y Domingos).</li>
              <li class="juntion">Vuelo en Globo de 45 a 60 minutos.</li>
              <li class="juntion">Desplegado de banner " TE QUIERES CASAR CONMIGO ", " QUIERES SER MI NOVIA " durante el vuelo.</li>
              <li class="juntion">Botella de vino blanco espumoso para brindar después de anillo.</li>
              <li class="juntion">Fotos con cámara fija (Gopro).</li>
              <li class="juntion">Certificado de vuelo por pasajero.</li>
              <li class="juntion">Desayuno Buffet en Restaurante Gran Teocalli.</li>
              <li class="juntion">Ramo de rosas (una docena).</li>
              <li class="juntion">Transportación local durante la actividad.</li>
              <li class="juntion">Seguro de pasajeros.</li>
            </ul>
      <br>
      <p class="text-warning text-center junction"><b>Contamos con servicio de transporte a la CDMX viaje redondo,
        pregunta costos.<br> </b></p>
          </div>
          <div class="col-md-4">
            <br><br>
              <center><img class="img-responsive img-rounded img" src="images/galeria/29.jpg" alt="anillo de compromiso"></center>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 text-center">
            <br>
              <p class="textoNaranja textoPromocion">$ 7,000.<sup>00</sup> MXN</p>

              <!-- p class="textoAmber textoPromocion"><i class="fa fa-star"></i> Promoción de Lunes a Viernes: $ 6,200.<sup>00</sup> MXN</p-->
              <br>
              <!--Carrito vip-->
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="7KYNSL6L8VPJ6">
                <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
                
            <!--fin del carrito-->
          </div>
          <div class="col-md-4 text-center">
            <br>
           <p class="textoAmber textoPromocion2"><i class="fa fa-star" id="estrella"></i> <span class="text-danger">10% DE DESCUENTO </span> AL PAGAR EN EFECTIVO</p>
        </div>
      </article>
      <br>
      <article >            
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h3 class="junction"><i class="fa fa-bookmark"></i> Vuelo Madrugador: <small class="textoBlanco">Vive la experiencia de ver el amanecer del valle de Teotihuacán</small></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <h4 class="text-warning junction">Incluye:</h4>
            <ul>
              <li class="juntion">Coffee break en zona de despegue (Sábados y Domingos).</li>
              <li class="juntion">Vuelo en Globo de 45 a 60 minutos.</li>
              <li class="juntion">Botella de vino blanco espumoso para brindar durante el vuelo.</li>
              <li class="juntion">Certificado de vuelo por pasajero.</li>
              <li class="juntion">Desayuno Buffet en Restaurante Gran Teocalli.</li>
              <li class="juntion">Transportación local durante la actividad.</li>
              <li class="juntion">Seguro de pasajero.</li>
            </ul>
            <br>
            <p class="text-warning text-center junction"><b>Contamos con servicio de transporte a la CDMX viaje redondo,
              pregunta costos.<br> </b></p>
          </div>
          <div class="col-md-4">
            <br><br>
              <img class="img-responsive img-rounded img" src="images/galeria/30.jpg" alt="vuelo amananecer">
          </div>

        <div class="row">
          <div class="col-md-7 text-center">
            <br>
              <p class="textoNaranja textoPromocion">$ 6,500.<sup>00</sup> MXN </p>
              <!-- p class="textoAmber textoPromocion"><i class="fa fa-star"></i> Promoción de Lunes a Viernes: $ 5,800.<sup>00</sup> MXN</p-->
              <!--vuelo madrugador carrito-->
                  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                     <input type="hidden" name="cmd" value="_s-xclick">
                     <input type="hidden" name="hosted_button_id" value="DJM46LWVSNJ2E">
                     <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                     <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                  </form>
              <!-- fin de carrito-->
          </div><div class="col-md-4 text-center">
            <br>
           <p class="textoAmber textoPromocion2"><i class="fa fa-star" id="estrella"></i> <span class="text-danger">10% DE DESCUENTO </span> AL PAGAR EN EFECTIVO</p>
        </div>
      </article>
      <br>
      <article >
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h3 class="junction"><i class="fa fa-bookmark"></i> Vuelo Privado: <small class="textoBlanco"> Exclusivo para ti y tus acompañantes mínimo dos personas</small></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <h4 class="text-warning junction">Incluye:</h4>
            <ul>
              <li class="juntion">Coffee break en zona de despegue (Sábados y Domingos).</li>
              <li class="juntion">Vuelo exclusivo para dos personas de 45 a 60 minutos.</li>
              <li class="juntion">Botella de vino blanco espumoso para brindar durante el vuelo.</li>
              <li class="juntion">Desayuno buffet  en restaurante Gran Teocalli.</li>
              <li class="juntion">Transportación local durante la actividad.</li>
              <li class="juntion">Seguro de pasajeros.</li>
            </ul>
            <br>
            <p class="text-warning text-center junction"><b>Contamos con servicio de transporte a la CDMX viaje redondo,
              pregunta costos.<br> </b></p>
          </div>
          <div class="col-md-4">
            <br>
            <img class="img-responsive img-rounded img" src="images/galeria/16.jpg" alt="cumpleanos">
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 text-center">
            <br><br>
                <p class="textoNaranja textoPromocion">$ 3,200.<sup>00</sup> MXN</p>
                <p class="textoNaranja textoPromocion">$ 2,500.<sup>00</sup> MXN <small>- menores de 5 - 12 años</small></p>

                <!-- p class="textoAmber textoPromocion"><i class="fa fa-star"></i> Promoción Lunes a Viernes: $ 2,800.<sup>00</sup> MXN</p-->
                <!-- p class="text-warning roboto">No aplica en días festivos</p -->
              <!--carrito vuelo privado-->
                  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="G96YV3MXGYDHC">
                  <table>
                  <tr><td><input type="hidden" name="on0" value="Paquete Vuelo Privado">Paquete Vuelo Privado</td></tr><tr><td><select name="os0">
                    <option value="Vuelo privado (por persona)">Vuelo privado (por persona) $3,200.00 MXN</option>
                    <option value="Menores de 5 a 12">Menores de 5 a 12 $2,500.00 MXN</option>
                  </select> </td></tr>
                  </table>
                  <input type="hidden" name="currency_code" value="MXN">
                  <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                  </form>
              <!--fin del carrito-->
          </div>
          <div class="col-md-4 text-center">
            <br>
           <p class="textoAmber textoPromocion2"><i class="fa fa-star" id="estrella"></i> <span class="text-danger">10% DE DESCUENTO </span> AL PAGAR EN EFECTIVO</p>
        </div>
      </article>

      <article >
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h3 class="junction"><i class="fa fa-bookmark"></i> Vuelo Cumpleaños o Aniversario:</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <h4 class="text-warning junction">Incluye:</h4>
            <ul>
              <li class="juntion">Coffee break en zona de despegue (Sábados y Domingos).</li>
              <li class="juntion">Vuelo exclusivo para dos personas de 45 a 60 minutos.</li>
              <li class="juntion">Banner " FELIZ CUMPLEAÑOS " ó " FELIZ ANIVERSARIO ".</li>
              <li class="juntion">Botella de vino blanco espumoso para brindar durante el vuelo.</li>
               <li class="juntion">Desayuno buffet  en restaurante Gran Teocalli.</li>
              <li class="juntion">Pastelito individual para el festejado (sólo cumpleaños).</li>
              <li class="juntion">Fotos.</li>
              <li class="juntion">Transportación local durante la actividad.</li>
              <li class="juntion">Seguro de pasajeros.</li>
            </ul>
            <br>
            <p class="text-warning text-center junction"><b>Contamos con servicio de transporte a la CDMX viaje redondo,
              pregunta costos.<br> </b></p>
          </div>
          <div class="col-md-4">
            <br>
            <img class="img-responsive img-rounded img" src="images/cumpleanios.jpg" alt="cumpleanos">
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 text-center">
            <p class="textoNaranja textoPromocion">$ 6,800.<sup>00</sup> MXN</p>

              <!--carrito vuelo cumpleañ-->
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="RWLBTFRPPGQMY">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    
              <!--fin del carrito-->
          </div><div class="col-md-4 text-center">
            <br>
           <p class="textoAmber textoPromocion2"><i class="fa fa-star" id="estrella"></i> <span class="text-danger">10% DE DESCUENTO </span> AL PAGAR EN EFECTIVO</p>
        </div>
      </article>
    </div>  <!-- /contenido -->
  </div>

</div>

<?php include ("./secciones/footer.php"); ?>

<script src="./js/jquery.js"></script>
<script src="./js/efectos.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script>
  $('#liVuelo').addClass('colorNavActivo');
</script>
<script charset="utf-8">
  $('#navPaquete').addClass('activoLi');
</script>
</div>
</body>
</html>
