var inpNombre = $('#nombre'),
    inpTelefono = $('#telefono'),
    inpEmail = $('#email'),
    txtMensaje = $('#txtMensaje'),
    contactoh = $('#contactoh');
var RegExPattern=/^([\w\s\n\-\¿\/\?.,:áéíóúÁÉÍÓÚñÑ])+$/;

function limpiar(){
  inpNombre.val('');
  inpTelefono.val('');
  inpEmail.val('');
  txtMensaje.val('');
}


function comprobarNombre(e){
  var elem = e.target;
  if (elem.validity.valid) {
    document.getElementById('spnNombre').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnNombre').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo se aceptan caracteres alfabeticos.';
  }
}
function comprobarTel(e){
  var elem = e.target;
  if (elem.validity.valid) {
    document.getElementById('spnTel').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnTel').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo se aceptan caracteres alfanuméricos.';
  }
}
function comprobarMensaje(e){
  var elem = e.target;
  if (elem.value.match(RegExPattern)) {
    document.getElementById('spnMensaje').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnMensaje').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo se aceptan caracteres alfanuméricos.';
  }
}

//btnEnviar.on('click', enviar);
$(document).on('ready', function(){
  limpiar();
  intNombre = document.querySelector("input[name='nombre']");
  intNombre.addEventListener("input", comprobarNombre);
  intTel = document.querySelector("input[name='telefono']");
  intTel.addEventListener("input", comprobarTel);
  intMensaje = document.getElementById("txtMensaje");
  intMensaje.addEventListener("input", comprobarMensaje);
  $(window).scroll(function() {
      if ($(".navbar").offset().top > 50) {
          $(".navbar-fixed-top").addClass("top-nav-collapse");
      } else {
          $(".navbar-fixed-top").removeClass("top-nav-collapse");
      }
  });
});
