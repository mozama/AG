<!DOCTYPE html>
<html lang="es">
<head>
  <?php include ("./secciones/head.php"); ?>
  <title>Galerías | Aventura en Globos</title>
  <meta name="description" content="">

  <link rel="stylesheet" type="text/css" href="./css/bookblock.css" />
  <link rel="stylesheet" type="text/css" href="./css/demo1.css" />
  <script src="js/modernizr.custom.js"></script>
</head>

<body data-spy="scroll" data-target="#topnav" class="galeriaFondo">
<!-- Navigation Bar -->
    <?php include ("./secciones/menu.php"); ?>

<div class="fondo2">

<div class="container contenidoPag">
  <article >
    <div class="row cabecera">
      <div class="col-lg-12">
        <h2><i class="fa fa-picture-o"></i> Fotos</h2>
      </div>
    </div>
    <br>

      <div class="row" aling="center">
        <div class="col-md-9 col-md-offset-1">

    <div class="bb-custom-wrapper">

      <div id="bb-bookblock" class="bb-bookblock">
        <div class="bb-item">
          <img class="imgF" src="images/galeria/teotihuacan.jpg" alt="teotihuacan"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/vuelo.jpg" alt="vuelo teotihuacan"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/familias.jpg" alt="vuelo en familia"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/canasta.jpg" alt="canasta globo aerostatico"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/familia.jpg" alt="globo aerostatico familia"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/despegues.jpg" alt="zona despegue"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/aerostatico.jpg" alt="aerostatico"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/pareja.jpg" alt="pareja"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/amanecer.jpg" alt="vuelo amanecer"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/compromiso.jpg" alt="anillo compromiso"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/gobloAerostatico.jpg" alt="valle teotihuacan"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/luna.jpg" alt="piramide de la luna"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/brindis.jpg" alt="brindis en globo"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/novia.jpg" alt="quieres ser mi novia"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/valleTeotihuacan.jpg" alt="sobre el valle de teotihuacan"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/anillo.jpg" alt="anillo"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/cumpleaños.jpg" alt="cumpleaños"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/globo.jpg" alt="globos"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/mexico.jpg" alt="mexico"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/calzada.jpg" alt="image05"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/grupo.jpg" alt="vuelo en grupo"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/teotihuacanMexico.jpg" alt="image02"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/grupos.jpg" alt="viaje en grupo"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/novio.jpg" alt="novio"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/nube.jpg" alt="nubes"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/mensaje.jpg" alt="mensaje"/>
        </div>
        <div class="bb-item">
          <img class="imgF" src="images/galeria/mujeres.jpg" alt="inflado globo"/>
        </div>



      </div>

      <nav>
        <a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
        <a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
        <a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
        <a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
      </nav>

    </div>



          <!-- Fotos -->
        </div>
      </div>
  </article>
<br><br>
  <!--  <article >
    <div class="row cabecera">
      <div class="col-lg-12">
        <h2><i class="fa fa-film"></i> Videos</h2>
      </div>
    </div>
    <br>
      <div class="row">
        <div class="col-md-12">
          <h1>Enlace a video 1</h1>
        </div>
      </div>
  </article> -->
</div>
</div>

<?php include ("./secciones/footer.php"); ?>

<script src="./js/jquery.js"></script>
<script src="./js/efectos.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./js/jquery.bookblock.min.js"></script>

<script>
  var Page = (function() {

    var config = {
        $bookBlock : $( '#bb-bookblock' ),
        $navNext : $( '#bb-nav-next' ),
        $navPrev : $( '#bb-nav-prev' ),
        $navFirst : $( '#bb-nav-first' ),
        $navLast : $( '#bb-nav-last' )
      },
      init = function() {
        config.$bookBlock.bookblock( {
          speed : 800,
          shadowSides : 0.8,
          shadowFlip : 0.7
        } );
        initEvents();
      },
      initEvents = function() {

        var $slides = config.$bookBlock.children();

        // add navigation events
        config.$navNext.on( 'click touchstart', function() {
          config.$bookBlock.bookblock( 'next' );
          return false;
        } );

        config.$navPrev.on( 'click touchstart', function() {
          config.$bookBlock.bookblock( 'prev' );
          return false;
        } );

        config.$navFirst.on( 'click touchstart', function() {
          config.$bookBlock.bookblock( 'first' );
          return false;
        } );

        config.$navLast.on( 'click touchstart', function() {
          config.$bookBlock.bookblock( 'last' );
          return false;
        } );

        // add swipe events
        $slides.on( {
          'swipeleft' : function( event ) {
            config.$bookBlock.bookblock( 'next' );
            return false;
          },
          'swiperight' : function( event ) {
            config.$bookBlock.bookblock( 'prev' );
            return false;
          }
        } );

        // add keyboard events
        $( document ).keydown( function(e) {
          var keyCode = e.keyCode || e.which,
            arrow = {
              left : 37,
              up : 38,
              right : 39,
              down : 40
            };

          switch (keyCode) {
            case arrow.left:
              config.$bookBlock.bookblock( 'prev' );
              break;
            case arrow.right:
              config.$bookBlock.bookblock( 'next' );
              break;
          }
        } );
      };

      return { init : init };

  })();
</script>
<script>
    Page.init();
</script>

</body>
</html>
