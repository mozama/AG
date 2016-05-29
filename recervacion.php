<!DOCTYPE html>
<html lang="es">
<head>
  <?php include ("./secciones/head.php"); ?>
  <title>Reservación | Aventura en Globos</title>
  <meta name="description" content="Realiza tu pre-reservación indica el tipo de vuelo así como los demás paquetes a disfrutar.">

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69468292-1', 'auto');
  ga('send', 'pageview');
</script>
</head>

<body data-spy="scroll" data-target="#topnav" class="recervacionFondo">
<div class="fondo2">
<?php include ("./secciones/menu.php"); ?>
<div class="container contenidoPag">
  <article >
    <div class="row cabeceraVuelo">
      <div class="col-lg-12">
        <h3 class="junction"><i class="fa fa-calendar"></i> Reservación:</h3>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-12">

          <ul id="myTab" class="nav nav-tabs nav-justified">
              <li class=""><a href="#tblProceso" data-toggle="tab" class="junction">Proceso</a>
              </li>
              <li class="active"><a href="#tblPre" data-toggle="tab" class="junction"> Pre-reservación </a>
              </li>
              <li class=""><a href="#tblPoliticas" data-toggle="tab" class="junction"> Políticas </a>
              </li>
              <li class=""><a href="#tblRestricciones" data-toggle="tab" class="junction"> Restricciones </a>
              </li>
              <li class=""><a href="#tblRecomendaciones" data-toggle="tab" class="junction"> Recomendaciones </a>
              </li>
          </ul>

          <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade  " id="tblProceso">
                <br>
                <div class="row">
                  <div class="col-md-8">

                    <h5><strong>1.-Llenar el formulario de pre-Reservación. </strong></h5>
                    <p class="sangriaTodoTxt text-justify">Para volar en Aventura en globos es necesario llenar una previa reservación en nuestro apartado de reservaciones, es necesario verificar la disponibilidad de nuestros servicios.
                    </p>
                    <h5><strong>2.-Confirmación de fecha y hora disponible. </strong></h5>
                    <p class="sangriaTodoTxt text-justify">Nosotros confirmamos la fecha y hora disponible y nos ponemos en contacto con usted.
                    </p>
                    <h5><strong>3.-Depósito Bancario.</strong></h5>
                    <p class="sangriaTodoTxt text-justify">Una vez disponible la fecha, para reservar 100 % será necesario realizar el anticipo del 30 % de costo total.
                    </p>
                    <h5><strong>4.-Ficha de depósito.</strong></h5>
                    <p class="sangriaTodoTxt text-justify">Una vez realizado el pago, deberás notificarnos vía correo electrónico y enviar el comprobante de pago, si requieres factura el pago será en una sola exhibición.
                    </p>
                    <h5><strong>5.-Confirmación de la reservación.</strong></h5>
                    <p class="sangriaTodoTxt text-justify">Con esto queda confirmada al 100% la reservación, al momento de reservar se solicitaran los pesos de las personas que realizaran la actividad, si no se envía los pesos reales Aventura en Globos S. de R.L. de C.V. se reserva el derecho de modificar el servicio por logística del vuelo.
                    </p>

                  </div>
                  <div class="col-md-4">

                  </div>
                </div>
              </div>

              <div class="tab-pane fade active in" id="tblPre">
                <div class="row">
                  <div class="col-md-8">
                    <br><h3 class="text-center">Realiza tu pre-reservación aqui</h3>

                    <form class="clearfix" accept-charset="utf-8" action="php/preRecervacion.php" method="post" >
                      <div class="control-group form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input name="nombre" id="nombre" pattern="[a-zA-Z\sáéíóúÁÉÍÓÚñÑ]+" type="text" class="form-control grisObscuro"  placeholder="*Nombre" maxlength="50" required>
                        </div>
                        <p class="text-danger" id="spnNombre"> </p>
                      </div>
                      <div class="control-group form-group">
                        <div class="input-group">
                          <span class="input-group-addon glyphicon"><i class="fa fa-at"></i></span>
                          <input name="email" id="email" type="email" class="form-control grisObscuro"  placeholder="*Correo Electrónico" maxlength="50" required>
                          <p class="text-danger" id="spnCorreo"> </p>
                        </div>
                      </div>
                      <div class="control-group form-group">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input  name="telefono" id="telefono" pattern="[0-9a-zA-Z\+\s]+" type="tel" class="form-control grisObscuro"  placeholder="*Número Telefónico" maxlength="20" required>
                          </div>
                          <p class="text-danger" id="spnTel"> </p>
                      </div>

                      <h4 class="text-center">Datos del sevicio</h4>

                      <div class="row">
                        <div class="col-md-6">

                          <div class="panel panel-default panelTrans">
                            <div class="panel-body">
                              <h4 class="text-center">Paquete de vuelo:</h4>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="vuelo[]" value="1">
                                  Vuelo Compartido
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="vuelo[]" value="2">
                                  Vuelo VIP
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="vuelo[]" value="3">
                                  Vuelo Madrugador
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="vuelo[]" value="4">
                                  Vuelo Privado
                                </label>
                              </div>

                            </div>
                          </div>

                        </div>
                        <div class="col-md-6">
                          <div class="panel panel-default panelTrans">
                            <div class="panel-body">
                              <h4 class="text-center">Hospedaje:</h4>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="hospedaje[]" value="1">
                                  Hotel Quinto Sol
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="hospedaje[]" value="2">
                                  Hotel Villas Arqueológicas
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="hospedaje[]" value="3">
                                  Hotel Ollin Teotl
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="hospedaje[]" value="4">
                                  Posada Jade
                                </label>
                              </div>

                              </div>
                            </div>
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-md-12">

                        <div class="panel panel-default panelTrans">
                          <div class="panel-body">
                            <h4 class="text-center">Más Aventura: </h4>
                            <div class="col-md-6">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="aventura[]" value="1">
                                  Ultraligero
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="aventura[]" value="2">
                                  Temazcal
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="aventura[]" value="3">
                                  Visita Guiada
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="aventura[]" value="4">
                                  Tour en Cuatrimoto
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="aventura[]" value="5">
                                  Reino Animal
                                </label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="aventura[]" value="6">
                                  Tour en bici: Ruta pulque-arqueológica
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="aventura[]" value="7">
                                  Bicitour Teotihuacan: Bike Cueva
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="aventura[]" value="8">
                                  Bike tour Teotihuacan: Rodada-nadada
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="aventura[]" value="9">
                                  Bici-Campamento: Solo los fines de semana
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="aventura[]" value="10">
                                  Biketour Teotihuacan: Ruta gastronómica
                                </label>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                      </div>

                      <div class="control-group form-group">
                        <div class="controls">
                          <textarea id="txtMensaje" name="mensaje" rows="8" cols="100" class="form-control grisObscuro"  maxlength="500" style="resize:none" placeholder="*Notas, indicar fecha de reservación, especificaciones o dudas"></textarea>
                          <p class="text-danger" id="spnMensaje"> </p>
                        </div>
                      </div>
                            <button class="btn btn-success btn-xlg" type="submit"><i class="fa fa-calendar-check-o"></i> Realizar pre-reservación</button>
                    </form>

                  </div>
                  <div class="col-md-4">
                    <br><br><br>
                    <img class="img-responsive img-rounded img" src="images/mexico.jpg" alt="globos aerostaticos">
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="tblPoliticas">
                <div class="row">
                  <div class="col-md-12">
                    <br>
                    <p class="text-justify sangriaTodoTxt"><b class="junction">I.</b> Se reserva el derecho de cancelación del vuelo por condiciónes climáticas (exceso de neblina, lluvia, viento mayor a 20 Km/h).
                    </p>
                    <p class="text-justify sangriaTodoTxt"><b class="junction">II.</b> Cambios de fecha con al menos 4 días antes de la fecha del servicio no hay penalización,
  				          cambios de fecha con menos de 4 días antes de la fecha del servicio tendrá una penalización de 50%
  				          sobre tu deposito.
                    Si el cliente no se presenta el día del vuelo se realizara el cargo al 100 % sobre su depósito.
                    En caso de cancelación por mal clima, la fecha se reprograma en un periodo no mayor a 3 meses, solo en casos específicos se podrá realizar reembolso. (Aplica restricciones).
                    </p>
                    <p class="text-justify sangriaTodoTxt"><b class="junction">III.</b> Como los vuelos en globo dependen totalmente de las condiciones del clima, no podemos
                    garantizar que sigan una trayectoria en particular. Nuestro objetivo es que el globo vuele un
                    mínimo de 40 minutos, pero es el piloto el que tiene la responsabilidad final de decidir la
                    duración y de la conducta de cualquier vuelo así como el lugar y la hora de aterrizaje por
                    motivos evidentes de seguridad del pasajero. Los vuelos en globo están sometidos a las limitaciones
                    de las REGLAS DE VUELO VISUAL.</p>

                  </div>
                </div>

              </div>
              <div class="tab-pane fade" id="tblRestricciones">
                <div class="row">
                  <div class="col-md-8"><br>
                    <ul>
                      <li ><h5>Personas con problemas cardiacos.</h5></li>
                      <li ><h5>Mujeres embarazadas.</h5></li>
                      <li ><h5>Niños menores de 1.10 m. de estatura.</h5></li>
                      <li ><h5>No podrá volar bajo la influencia de alcohol o drogas.</h5></li>
                      <li ><h5>Personas que tengas operaciones recientes.</h5></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <br>
                    <img class="img-responsive img-rounded img" src="images/nubes.jpg" alt="nubes debajo de globo aerostatico">
                  </div>
                </div>
                <br>

              </div>

              <div class="tab-pane fade" id="tblRecomendaciones">
                <div class="row">
                  <div class="col-md-8">
                    <br>
                    <ul>
                      <li ><h5>Traer ropa cómoda como para día de campo.</h5></li>
                      <li ><h5>Zapatos cómodos como tenis, sin tacones o zapato cerrado.</h5></li>
                      <li ><h5>Traer gorra o sombrero por el calor que produce el quemador.</h5></li>
                      <li ><h5>Llevar cámara fotográfica y/o de video.</h5></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <br>
                    <img class="img-responsive img-rounded img" src="images/aventura.jpg" alt="aventura sobre teotihuacan">
                  </div>

                </div>

              </div>
          </div>

      </div>
    </div>

  </article>
</div>

<?php include ("./secciones/footer.php"); ?>
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/efectos.js"></script>
<script src="js/reservacion.js"></script>
</script>
<script charset="utf-8">
  $('#navRecervacion').addClass('activoLi');
</script>
</div>
</body>
</html>
