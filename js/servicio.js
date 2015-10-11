$(document).ready(function(){		/*efecto parallax*/

	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion =  (barra * 0.16);

		$('body').css({
			'background-position': '0 -' + posicion + 'px'
		});

	});

});
