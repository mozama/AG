<!DOCTYPE html>
<html lang="es">
<head>
  <?php include ("./secciones/head.php"); ?>
  <title>Hospedaje | Aventura en Globos</title>
  <meta name="description" content="Conoce las distintas opciones de hospedaje que te ofrecemos para acompletar tu aventura.">

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69468292-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>

<body data-spy="scroll" data-target="#topnav" class="hospedajeFondo">
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
        <div class="row cabeceraHospedaje">
          <div class="col-lg-12">
            <h2><i class="fa fa-bed"></i> Hotel Quinto Sol <small class="textoBlanco"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></small></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <h4>Completa tu paquete con hospedaje:</h4>
            <ul>
              <li>Costo por noche de hospedaje.</li>
              <li>Habitación ocupación <span class="text-primary"> doble</span> <span class="text-warning">MX $1,100</span> pesos por noche.</li>
              <li>Habitación ocupación <span class="text-primary"> triple</span> <span class="text-warning">MX $1,350</span> pesos por noche.</li>
              <li>Habitación ocupación <span class="text-primary"> cuádruple</span> <span class="text-warning">MX $1,450</span> pesos por noche.</li>
            </ul>
            <br>
          <!-- carrito quinto sol-->
               <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
               <input type="hidden" name="cmd" value="_s-xclick">
               <input type="hidden" name="hosted_button_id" value="TWB97YKBALNFL">
               <table>
               <tr><td><input type="hidden" name="on0" value="Hotel Quinto Sol Habitacion">Hotel Quinto Sol Habitacion</td></tr><tr><td><select name="os0">
                 <option value="Habitacion ocupacion doble">Habitacion ocupacion doble $1,100.00 MXN</option>
                 <option value="Habitacion ocupacion triple">Habitacion ocupacion triple $1,350.00 MXN</option>
                 <option value="Habitacion ocupacion cuádruple">Habitacion ocupacion cuádruple $1,450.00 MXN</option>
               </select> </td></tr>
               </table>
               <input type="hidden" name="currency_code" value="MXN">
               <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
               <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
               </form>
          <!--fin carrito-->
          </div>
          <div class="col-md-4">
            <br><br>
              <a class="btn btn-primary btn-block" href="http://www.gshoteles.com.mx/gs-quinto-sol-teotihuacan.html" target=blanck><i class="fa fa-link"></i> Ver sitio web Hotel Quinto Sol </a>
          </div>
        </div>

      </article>
      <br>
            <article >
              <div class="row cabeceraHospedaje">
                <div class="col-lg-12">
                  <h2><i class="fa fa-bed"></i> Hotel Villas Arqueológicas <small class="textoBlanco"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></small></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <h4>Completa tu paquete con hospedaje:</h4>
                  <ul>
                    <li>Costo por noche de hospedaje.</li>
                    <li>Habitación ocupación <span class="text-primary"> doble</span> <span class="text-warning">MX $1,100</span> pesos por noche.</li>
                  </ul>
               <!--carrito villas-->
                  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="NM22UYPJY7ANJ">
                  <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                  </form>
               <!-- fin carrito-->
                </div>
                <div class="col-md-4">
                    <br><br>
                    <a class="btn btn-primary btn-block" href="http://www.villasmex.com/" target=blanck><i class="fa fa-link"></i> Ver sitio web Hotel Villas Arqueolgogicas</a>
                </div>
              </div>

            </article>
            <br>
            <article >
              <div class="row cabeceraHospedaje">
                <div class="col-lg-12">
                  <h2><i class="fa fa-bed"></i> Hotel Ollin Teotl <small class="textoBlanco"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></small></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <h4>Completa tu paquete con hospedaje:</h4>
                  <ul>
                    <li>Costo por noche de hospedaje.</li>
                    <li>Habitación ocupación <span class="text-primary"> doble</span> <span class="text-warning">MX $850</span> pesos por noche.</li>
                    <li>Jacuzzi.</li>
                  </ul>

                  <!--carrito ollin teotl-->
                      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                      <input type="hidden" name="cmd" value="_s-xclick">
                      <input type="hidden" name="hosted_button_id" value="3T5CU2DGTCAF4">
                      <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                      <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                      </form>
                <!-- fin de carrito-->
                </div>
                <div class="col-md-4">
                    <br><br>
                      <a class="btn btn-primary btn-block" href="http://www.hotelollinteotl.com/" target=blanck><i class="fa fa-link"></i> Ver sitio web Hotel Ollin Teotl</a>
                </div>
              </div>
            </article>
              <!--posada jade-->
                 <article >
        <div class="row cabeceraHospedaje">
          <div class="col-lg-12">
            <h2><i class="fa fa-bed"></i> Posada Jade <small class="textoBlanco"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></small></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <h4>Completa tu paquete con hospedaje:</h4>
            <ul>
              <li>Costo por noche de hospedaje.</li>
              <li>Habitación ocupación <span class="text-primary"> doble</span> <span class="text-warning">MX $600</span> pesos por noche.</li>
              <li>Habitación ocupación <span class="text-primary"> triple</span> <span class="text-warning">MX $650</span> pesos por noche.</li>
              <li>Habitación ocupación <span class="text-primary"> cuádruple</span> <span class="text-warning">MX $700</span> pesos por noche.</li>
            </ul>
            <!-- carrito posada jade-->
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="WED23N73JYXVG">
                    <table>
                    <tr><td><input type="hidden" name="on0" value="Posada Jade Hataciones">Posada Jade Hataciones</td></tr><tr><td><select name="os0">
                      <option value="Habitacion ocupacion doble">Habitacion ocupacion doble $600.00 MXN  </option>
                      <option value="Habitacion Ocupaciotiple">Habitacion Ocupacion tiple $650.00 MXN</option>
                      <option value="Habitacion Ocupacion Cuadruple">Habitacion Ocupacion Cuadruple $700.00 MXN</option>
                    </select> </td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>
            <!--fin carrito-->
          </div>
          <div class="col-md-4">
            <br><br>
            <a class="btn btn-primary btn-block" href=" http://www.posadajade.com/amenities.htm" target=blanck><i class="fa fa-link"></i> Ver sitio web Posada Jade </a>
          </div>
        </div>

      </article>
      <br>
      <article >
              <div class="row cabeceraHospedaje">
                <div class="col-lg-12">
                  <h2><i class="fa fa-bed"></i> Posada Ahuehuetes <small class="textoBlanco"><i class="fa fa-star"></i> <i class="fa fa-star"></i></small></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <h4>Completa tu paquete con hospedaje:</h4>
                  <ul>
                    <li>Costo por noche de hospedaje.</li>
                    <li>Habitación ocupación <span class="text-primary"> doble</span> <span class="text-warning">MX $600</span> pesos por noche.</li>
                    <li>Habitación ocupación <span class="text-primary"> triple</span> <span class="text-warning">MX $700</span> pesos por noche.</li>
                    <li>Cabaña <span class="text-primary"> 2 habitaciones, baño completo, sala, cocina y comedor terraza y jardín </span>  <span class="text-warning">MX $1,200</span> pesos por noche.</li>
                  </ul>
             <!--carrito ahuehuetes-->
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="RJVV425NUCSH6">
                    <table>
                    <tr><td><input type="hidden" name="on0" value="Posada Jade Hataciones">Posada Jade Hataciones</td></tr><tr><td><select name="os0">
                      <option value="Habitacion ocupacion doble">Habitacion ocupacion doble $600.00 MXN</option>
                      <option value="Habitacion ocupacion tiple">Habitacion ocupacion tiple $700.00 MXN</option>
                      <option value="Cabana">Cabaña $1,200.00 MXN</option>
                    </select> </td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>
             <!-- fin carrito-->
                </div>
                <div class="col-md-4">
                    <br><br>
                    <a class="btn btn-primary btn-block" href="http://www.restaurantelosahuehuetes.com/#!hospedaje/c1cz8" target=blanck><i class="fa fa-link"></i> Ver sitio web Posada Ahuehuetes</a>
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
  $('#liHospedaje').addClass('colorNavActivo');
</script>
<script charset="utf-8">
  $('#navPaquete').addClass('activoLi');
</script>
</div>
</body>
</html>
