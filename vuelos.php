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
              <li class="juntion">Coffee break en zona de despegue.</li>
              <li class="juntion">Vuelo en Globo de 45 a 60 minutos.</li>
              <li class="juntion">Brindis con vino blanco espumoso al aterrizar.</li>
              <li class="juntion">Certificado de vuelo por pasajero.</li>
              <li class="juntion">Desayuno Buffet en Restaurante Gran Teocalli.</li>
              <li class="juntion">Transportación local durante la actividad.</li>
              <li class="juntion">Seguro de pasajeros.</li>
            </ul>
            <br>
            <p class="text-warning text-center junction"><b>Contamos con servicio de transporte del DF a Teotihucán y de
            regreso al DF, pregunta costos.<br> </b></p>
          </div>
          <div class="col-md-4">
            <br><br>
              <img class="img-responsive img-rounded img" src="images/vueloCompartido.jpg" alt="vuelo compartido">
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 text-center ">
              <!--<h3 class="textoNaranja">MXN $ 2,100.<sup>00</sup></h3>-->
              <p class="textoAmber textoPromocion">Promoción de $2,100.<sup>00</sup></p>
              <p class="textoNaranja textoPromocion"><i class="fa fa-star" id="estrella"></i>  a solo $1,790.<sup>00</sup> MXN <i class="fa fa-star" id="estrella"></i></p>
              <p class="text-warning roboto">Válido hasta el 31 de Junio 2016</p>
        <!-- vuelo compartido -->
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="6ATDWKVSXNWTJ">

				<!-- fin del carrito-->

              <!--<table>
              <tr><td><input type="hidden" name="on0" value="Vuelo compartido">Vuelo compartido</td></tr><tr><td><select name="os0">
              <option value="Vuelo compartido (por persona)">Vuelo compartido (por persona) $2,100.00 MXN</option>  Nota este es para cuando se termine la promocion ya sera visible jiji
              <option value="Vuelo compartido promocion (por persona)">Vuelo compartido promocion (por persona) $1,790.00 MXN</option>
              <option value="Menores de 5 a 12">Menores de 5 a 12 $1,700.00 MXN</option>
              </select> </td></tr>
              </table>-->
              <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
              <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
              </form>

        <!-- fin del carrito-->

          </div>
                   <div class="col-md-4 text-center">
            <h3 class="text-primary junction"> Precio por pasajero.</h3>
          </div>
        </div>
      </article>
      <br>
      <article id="vueloVip">
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h3 class="junction"><i class="fa fa-bookmark"></i> Vuelo VIP: <small class="textoBlanco">Para esa ocación especial</small></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <h4 class="text-warning junction">Incluye:</h4>
            <ul>
              <li class="juntion">Coffee break en zona de despegue.</li>
              <li class="juntion">Vuelo en Globo de 45 a 60 minutos.</li>
              <li class="juntion">Desplegado de banner " TE QUIERES CASAR CONMIGO " " QUIERES SER MI NOVIA " durante el vuelo.</li>
              <li class="juntion">Botella de vino blanco espumoso para brindar después de la exhibición  del banner.</li>
              <li class="juntion">Fotos con cámara fija (Gopro).</li>
              <li class="juntion">Certificado de vuelo por pasajero.</li>
              <li class="juntion">Desayuno Buffet en Restaurante Gran Teocalli.</li>
              <li class="juntion">Ramo de rosas (una docena).</li>
              <li class="juntion">Transportacion local durante la actividad.</li>
              <li class="juntion">Seguro de pasajeros.</li>
            </ul>
      <br>
        <!--    <h4 class="text-warning text-center"><b>Contamos con servicio de transporte del DF a Teotihucán y de
            regreso al DF, pregunta costos.<br> </b></h4> -->
          </div>
          <div class="col-md-4">
            <br><br>
              <center><img class="img-responsive img-rounded img" src="images/galeria/10.jpg" alt="anillo de compromiso"></center>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 text-center">
              <p class="textoNaranja textoPromocion">Sábados y Domingos: $ 6,600.<sup>00</sup> MXN</p>
              <p class="textoAmber textoPromocion"><i class="fa fa-star"></i> Promoción de Lunes a Viernes: $ 6,200.<sup>00</sup> MXN</p>
              <p class="text-warning roboto">No aplica en días festivos</p>
              <br>
              <!--Carrito vip-->

              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="7KYNSL6L8VPJ6">
              <table>
              <tr><td><input type="hidden" name="on0" value="Paquete Vuelo Privado VIP"></td></tr><tr><td><select name="os0">
                <option value="Vuelo privado VIP (por pareja)">Vuelo privado VIP (por pareja) $6,600.00 MXN</option>
                <option value="Vuelo privado VIP promocion de Lunes a Viernes (por pareja)">Vuelo privado VIP promocion de Lunes a Viernes (por pareja) $6,200.00 MXN</option>
              </select> </td></tr>
              </table>
              <input type="hidden" name="currency_code" value="MXN">
              <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
              <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
              </form>


            <!--fin del carrito-->
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-primary">2 Pasajeros.</h3>
          </div>
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
              <li class="juntion">Coffee break en zona de despegue.</li>
              <li class="juntion">Vuelo en Globo de 45 a 60 minutos.</li>
              <li class="juntion">Banner de " FELIZ CUMPLEAÑOS " ó " FELIZ ANIVERSARIO ".</li>
              <li class="juntion">Botella de vino blanco espumoso para brindar durante el vuelo.</li>
              <li class="juntion">Certificado de vuelo por pasajero.</li>
              <li class="juntion">Desayuno Buffet en Restaurante Gran Teocalli.</li>
              <li class="juntion">Pastel individual para el cumpleañero durante el desayuno.</li>
              <li class="juntion">Transportacion local durante la actividad.</li>
              <li class="juntion">Seguro de pasajero.</li>
            </ul>
            <br>
            <p class="text-warning text-center junction"><b>Contamos con servicio de transporte del DF a Teotihucán y de
            regreso al DF, pregunta costos. <br></b></p>
          </div>
          <div class="col-md-4">
            <br><br>
              <img class="img-responsive img-rounded img" src="images/amanecer.jpg" alt="vuelo amananecer">
          </div>

        <div class="row">
          <div class="col-md-7 text-center">
            <br><br>
              <p class="textoNaranja textoPromocion">Sábados y Domingos: $ 6,200.<sup>00</sup> MXN</p>
              <p class="textoAmber textoPromocion"><i class="fa fa-star"></i> Promoción de Lunes a Viernes: $ 5,800.<sup>00</sup> MXN</p>
              <p class="text-warning roboto">No aplica en días festivos</p>
              <!--vuelo madrugador carrito-->
                   <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                   <input type="hidden" name="cmd" value="_s-xclick">
                   <input type="hidden" name="hosted_button_id" value="DJM46LWVSNJ2E">
                   <table>
                      <tr><td><input type="hidden" name="on0" value="Paquete Vuelo Privado VIP"></td></tr><tr><td><select name="os0">
                        <option value="Vuelo madrugador (por pareja)">Vuelo madrugador (por pareja) $6,200.00 MXN</option>
                        <option value="Vuelo madrugador de LUNES a VIERNES(por pareja)">Vuelo madrugador de LUNES a VIERNES(por pareja) $5,800.00 MXN</option>
                   </select> </td></tr>
                   </table>
                   <input type="hidden" name="currency_code" value="MXN">
                   <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                   <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                   </form>
              <!-- fin de carrito-->
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-primary">2 Pasajeros.</h3>
          </div>
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
              <li class="juntion">Coffee break en zona de despegue.</li>
              <li class="juntion">Vuelo exclusivo para dos personas de 45 a 60 minutos.</li>
              <li class="juntion">Botella de vino blanco espumoso para brindar durante el vuelo.</li>
              <li class="juntion">Banner " FELIZ CUMPLEAÑOS " ó " FELIZ ANIVERSARIO ".</li>
              <li class="juntion">Pastel individual para el cumpleañero durante el desayuno.</li>
              <li class="juntion">Desayuno buffet  en restaurante Gran Teocalli.</li>
              <li class="juntion">Transportación local durante la actividad.</li>
              <li class="juntion">Seguro de pasajeros.</li>
            </ul>
            <br>
            <p class="text-warning text-center junction"><b>Contamos con servicio de transporte del DF a Teotihucán y de
            regreso al DF, pregunta costos. <br> </b></p>
          </div>
          <div class="col-md-4">
            <br>
            <img class="img-responsive img-rounded img" src="images/galeria/16.jpg" alt="cumpleanos">
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 text-center">
            <br><br>
                <p class="textoNaranja textoPromocion">Sábados y Domingos: $ 3,000.<sup>00</sup> MXN</p>
                <p class="textoAmber textoPromocion"><i class="fa fa-star"></i> Promoción Lunes a Viernes: $ 2,800.<sup>00</sup> MXN</p>
                <p class="text-warning roboto">No aplica en días festivos</p>
              <!--carrito vuelo privado-->
                  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="G96YV3MXGYDHC">
                  <table>
                  <tr><td><input type="hidden" name="on0" value="Paquete Vuelo Privado"></td></tr><tr><td><select name="os0">
                    <option value="Vuelo privado (por persona)">Vuelo privado (por persona) $3,000.00 MXN</option>
                    <option value="Vuelo privado de LUNES a VIERNES (por persona)">Vuelo privado de LUNES a VIERNES (por persona) $2,800.00 MXN</option>
                  </select> </td></tr>
                  </table>
                  <input type="hidden" name="currency_code" value="MXN">
                  <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                  </form>
              <!--fin del carrito-->
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-primary junction">Precio por pasajero.</h3>
          </div>
        </div>
      </article>

      <article >
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h3 class="junction"><i class="fa fa-bookmark"></i> Vuelo Cumpleañero:</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <h4 class="text-warning junction">Incluye:</h4>
            <ul>
              <li class="juntion">Coffee break en zona de despegue.</li>
              <li class="juntion">Banner " FELIZ CUMPLEAÑOS " ó " FELIZ ANIVERSARIO ".</li>
              <li class="juntion">Vuelo en globo de 45 a 60 minutos.</li>
              <li class="juntion">Brindis de vino blanco espumoso. </li>
              <li class="juntion">Fotos del vuelo para el festejado.</li>
              <li class="juntion">Pastel individual para el cumpleañero durante el desayuno.</li>
              <li class="juntion">Transportación local durante la actividad.</li>
              <li class="juntion">Seguro de pasajeros.</li>
            </ul>
            <br>
            <p class="text-warning text-center junction"><b>Contamos con servicio de transporte del DF a Teotihucán y de
            regreso al DF, pregunta costos. <br> </b></p>
          </div>
          <div class="col-md-4">
            <br>
            <img class="img-responsive img-rounded img" src="images/cumpleanios.jpg" alt="cumpleanos">
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 text-center">
                <h3 class="textoNaranja"> $ 2,300.<sup>00</sup> MXN</h3>
              <!--carrito vuelo cumpleañ-->
                   <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                   <input type="hidden" name="cmd" value="_s-xclick">
                   <input type="hidden" name="hosted_button_id" value="RWLBTFRPPGQMY">
                   <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                   <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                   </form>
              <!--fin del carrito-->
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-primary junction">Precio por pasajero.</h3>
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
<script>
  $('#liVuelo').addClass('colorNavActivo');
</script>
<script charset="utf-8">
  $('#navPaquete').addClass('activoLi');
</script>
</div>
</body>
</html>
