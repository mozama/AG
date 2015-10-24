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
        <?php include ("./secciones/menuPaquete.php"); ?>
    </div>

    <div class="col-md-10">  <!-- contenido -->
      <article >
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h2><i class="fa fa-bookmark"></i> Vuelo Compartido: <small class="textoBlanco">Canastilla compartida con otros pasajeros</small></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <h4 class="text-warning">Incluye:</h4>
            <ul>
              <li>Coffee break en zona de despegue.</li>
              <li>Vuelo en Globo de 45 a 60 minutos.</li>
              <li>Brindis con vino blanco espumoso al aterrizar.</li>
              <li>Banner "FELIZ CUMPLEAÑOS" ó "FELIZ ANIVERSARIO".</li>
              <li>Certificado de vuelo por pasajero.</li>
              <li>Desayuno Buffet en Restaurante Gran Teocalli.</li>
              <li>Pastel Individual para el festejado durante el desayuno.</li>
              <li>Transportacion local durante la actividad.</li>
            </ul>
            <br>
            <h4 class="text-warning text-center"><b>Contamos con servicio de transporte del DF a Teotihucán y de
            regreso al DF, pregunta costos.<br> </b></h4>
          </div>
          <div class="col-md-4">
            <br><br>
              <img class="img-responsive img-rounded img" src="images/vueloCompartido.jpg" alt="vuelo compartido">
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 text-center ">
              <h3 class="textoNaranja">MXN $ 2,100.<sup>00</sup></h3>
				<!-- vuelo compartido -->
			         	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			         	<input type="hidden" name="cmd" value="_s-xclick">
			         	<input type="hidden" name="hosted_button_id" value="6ATDWKVSXNWTJ">
			         	<table>
			         	<tr><td><input type="hidden" name="on0" value="Vuelo compartido">Vuelo compartido</td></tr><tr><td><select name="os0">
			         	  <option value="Vuelo compartido (por persona)">Vuelo compartido (por persona) $2,100.00 MXN</option>
			         	  <option value="Menores de 5 a 12 años">Menores, de 5 a 12 años $1,700.00 MXN</option>
			         	</select> </td></tr>
			         	</table>
			         	<input type="hidden" name="currency_code" value="MXN">
			         	<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
			         	</form>
				<!-- fin del carrito-->
          </div>
                   <div class="col-md-4 text-center">
            <h3 class="text-primary"> Precio por pasajero.</h3>
          </div>
        </div>
      </article>
      <br>
      <article >
        <div class="row cabeceraVuelo">
          <div class="col-lg-12">
            <h2><i class="fa fa-bookmark"></i> Vuelo VIP: <small class="textoBlanco">Vuelo para entregar anillo de compromiso o quieres ser mi novia</small></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <h4 class="text-warning">Incluye:</h4>
            <ul>
              <li>Coffee break en zona de despegue.</li>
              <li>Vuelo en Globo de 45 a 60 minutos.</li>
              <li>Desplegado de banner " TE QUIERES CASAR CONMIGO " "QUIERES SER MI NOVIA" durante el vuelo.</li>
              <li>Botella de vino blanco espumoso para brindar durante el vuelo.</li>
              <li>Video con camara fija (Gopro).</li>
              <li>Certificado de vuelo por pasajero.</li>
              <li>Desayuno Buffet en Restaurante Gran Teocalli.</li>
              <li>Ramo de rosas (una docena).</li>
              <li>Transportacion local durante la actividad.</li>
            </ul>
			<br>
            <h4 class="text-warning text-center"><b>Contamos con servicio de transporte del DF a Teotihucán y de
            regreso al DF, pregunta costos.<br> </b></h4>
          </div>
          <div class="col-md-4">
            <br><br><br><br><br>
              <img class="img-responsive img-rounded img" src="images/galeria/compromiso.jpg" alt="anillo de compromiso">
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 text-center">
              <h3 class="textoNaranja">MXN $ 6,400.<sup>00</sup></h3>
              <h3 class="textoNaranja">Promoción de Lunes a Viernes: MXN $ 6,000.<sup>00</sup>  </h3>
              <h4 class="text-warning">No aplica en días festivos</h4>
              <br>
              <!--Carrito vip-->
			             <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				            <input type="hidden" name="cmd" value="_s-xclick">
				            <input type="hidden" name="hosted_button_id" value="7KYNSL6L8VPJ6">
				            <table>
				            <tr><td><input type="hidden" name="on0" value="Paquete Vuelo Privado VIP">Paquete Vuelo Privado VIP</td></tr><tr><td><select name="os0">
				              <option value="Vuelo privado VIP (por pareja)">Vuelo privado VIP (por pareja) $6,400.00 MXN</option>
				              <option value="Vuelo privado VIP de LUNES a VIERNES(por pareja)">Vuelo privado VIP de LUNES a VIERNES (por pareja) $6,000.00 MXN</option>
				            </select> </td></tr>
				            </table>
				            <input type="hidden" name="currency_code" value="MXN">
				            <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
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
            <h2><i class="fa fa-bookmark"></i> Vuelo Madrugador: <small class="textoBlanco">Vive la experiencia de ver el amanecer del valle de Teotihuacán</small></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <h4 class="text-warning">Incluye:</h4>
            <ul>
              <li>Coffee break en zona de despegue.</li>
              <li>Vuelo en Globo de 45 a 60 minutos.</li>
              <li>Banner de "FELIZ CUMPLEAÑOS O FELIZ ANIVERSARIO"</li>
              <li>Botella de vino blanco espumoso para brindar durante el vuelo.</li>
              <li>Certificado de vuelo por pasajero</li>
              <li>Desayuno Buffet en Restaurante Gran Teocalli.</li>
              <li>Transportacion local durante la actividad</li>
            </ul>
            <br>
            <h4 class="text-warning text-center"><b>Contamos con servicio de transporte del DF a Teotihucán y de
            regreso al DF, pregunta costos. <br></b></h4>
          </div>
          <div class="col-md-4">
            <br><br>
              <img class="img-responsive img-rounded img" src="images/amanecer.jpg" alt="vuelo amananecer">
          </div>

        <div class="row">
          <div class="col-md-7 text-center">
              <h3 class="textoNaranja">MXN $ 6,200.<sup>00</sup></h3>
               <h3 class="textoNaranja">Promoción de Lunes a Viernes: MXN $ 5,800.<sup>00</sup>  </h3>
              <h4 class="text-warning">No aplica en días festivos</h4>
              <!--vuelo madrugador carrito-->
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="BE9JNHZFTNCDG">
                    <table>
                    <tr><td><input type="hidden" name="on0" value="Paquete Vuelo Privado VIP">Vuelo Privado VIP</td></tr><tr><td><select name="os0">
                      <option value="Vuelo madrugador (por pareja)">Vuelo madrugador (por pareja) $6,200.00 MXN</option>
                      <option value="Vuelo madrugador de LUNES a VIERNES(por pareja)">Vuelo madrugador de LUNES a VIERNES(por pareja) $5,800.00 MXN</option>
                    </select> </td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="MXN">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
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
            <h2><i class="fa fa-bookmark"></i> Vuelo Privado: <small class="textoBlanco"> Exclusivo para ti y tus acompañantes mínimo dos personas</small></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <h4 class="text-warning">Incluye:</h4>
            <ul>
              <li>Coffee break en zona de despegue.</li>
              <li>Vuelo exclusivo para dos personas de 45 a 60 minutos.</li>
              <li>Botella de vino blanco espumoso para brindar durante el vuelo.</li>
              <li>Banner " FELIZ CUMPLEAÑOS O FELIZ ANIVERSARIO ".</li>
              <li>Video ( camara Gopro ).</li>
              <li>Pastel individual para el cumpleañero durante el desayuno.</li>
              <li>Transportacion local durante la actividad.</li>
            </ul>
            <br>
            <h4 class="text-warning text-center"><b>Contamos con servicio de transporte del DF a Teotihucán y de
            regreso al DF, pregunta costos. <br> </b></h4>
          </div>
          <div class="col-md-4">
            <br>
            <img class="img-responsive img-rounded img" src="images/cumpleanios.jpg" alt="cumpleanos">
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 text-center">
              	<h3 class="textoNaranja">Sábados y Domingos: MXN $ 3,000.<sup>00</sup>  </h3>
                <h3 class="textoNaranja">Lunes a Viernes: MXN $ 2,600.<sup>00</sup>  </h3>
		          <!--carrito vuelo privado-->
				  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="G96YV3MXGYDHC">
					<table>
					<tr><td><input type="hidden" name="on0" value="Paquete Vuelo Privado"> <!--  Paquete Vuelo Privado --></td></tr><tr><td><select name="os0">
					  <option value="Vuelo privador (por persona)">Vuelo privado (por persona) $3,000.00 MXN</option>
					  <option value="Vuelo privado de LUNES a VIERNES (por persona)">Vuelo privado de LUNES a VIERNES (por persona) $2,600.00 MXN</option>
					  <option value="Vuelo privado mas hospedaje (por persona)">Vuelo privado más hospedaje (por persona) $7,400.00 MXN</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="MXN">
					<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
					<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
				  </form>
		          <!--fin del carrito-->
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-primary">Precio por pasajero.</h3>
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
