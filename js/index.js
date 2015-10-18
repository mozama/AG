var inpNombre = $('#nombre'),
    inpTelefono = $('#telefono'),
    inpEmail = $('#email'),
    txtMensaje = $('#txtMensaje'),
    contactoh = $('#contactoh');
var RegExPattern=/^([\w\s\n\-\¿\?.,:áéíóúÁÉÍÓÚñÑ])+$/;

function limpiar(){
  inpNombre.val('');
  inpTelefono.val('');
  inpEmail.val('');
  txtMensaje.val('');
}

function verificarContenido(){

  if((inpNombre.val() == '' )||(inpNombre == null)){
    inpNombre.focus();
    swal("Favor de indicar nombre.","", "warning");
    return false;
  }
  if((inpTelefono.val() == '' )||(inpTelefono == null)){
    inpTelefono.focus();
    swal("Favor de indicar número telefonico.","", "warning");
    return false;
  }
  if((inpEmail.val() == '' )||(inpEmail == null)){
    inpEmail.focus();
    swal("Favor de indicar correo electrónico.","", "warning");
    return false;
  }
  if((txtMensaje.val() == '' )||(txtMensaje == null)){
    txtMensaje.focus();
    swal("Favor de ingresar su mensaje.","", "warning");
    return false;
  }

  if (chkAcepto.is(':checked')){
    return true;
  }
  else{
    chkAcepto.focus();
    swal("Debe aceptar las políticas de uso y privacidad.","Para hacer uso de este sitio web usted debera aceptar las políticas de uso y privacidad.", "warning");
    return false;
  }
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
function enviado(){
  alert("mensaje enviado");
}

//btnEnviar.on('click', enviar);
$(document).on('ready', function(){
  $(window).scroll(function() {
      if ($(".navbar").offset().top > 50) {
          $(".navbar-fixed-top").addClass("top-nav-collapse");
      } else {
          $(".navbar-fixed-top").removeClass("top-nav-collapse");
      }
  });


  jQuery('#moodular').moodular({
    effects: 'fade mosaic',
    controls: 'keys',
    easing: '',
    step: 1,
    selector: 'li',
    timer: 3500,
    speed: 2000,
    queue: false,
    keyPrev: 37, // left key
    keyNext: 39, // right key
    slices: [10, 5],
    mode: 'random',
    your_params : 'cause you can create your own effect or control'
});


  limpiar();
  intNombre = document.querySelector("input[name='nombre']");
  intNombre.addEventListener("input", comprobarNombre);
  intTel = document.querySelector("input[name='telefono']");
  intTel.addEventListener("input", comprobarTel);
  intMensaje = document.getElementById("txtMensaje");
  intMensaje.addEventListener("input", comprobarMensaje);
});
