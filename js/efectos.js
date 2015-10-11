$(document).ready(function(){
	$("body").css("display", "none");	/*desvanecimiento*/
	$("body").fadeIn(1700);

	$("a.transicion").click(function(event){
			event.preventDefault();
			linkDestino = this.href;
			$("body").fadeOut(900, redireccionarPag);
	});

	function redireccionarPag() {
			window.location = linkDestino;
	}

	$(window).scroll(function(){ /*efecto parallax*/
		var barra = $(window).scrollTop();
		var posicion =  (barra * 0.20);

		$('body').css({
			'background-position': '0 -' + posicion + 'px'
		});
	});

	$(window).scroll(function() {	/*efecto barra nav*/
      if ($(".navbar").offset().top > 50) {
          $(".navbar-fixed-top").addClass("top-nav-collapse");
      } else {
          $(".navbar-fixed-top").removeClass("top-nav-collapse");
      }
  });

});
