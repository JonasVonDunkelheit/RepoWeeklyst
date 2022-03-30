document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  document.getElementById("formulario").addEventListener('change', validarFormulario); 
});

function validarFormulario(evento) {
  evento.preventDefault();
  var nom = document.getElementById('nombre').value.trim();
  if(nom.length == 0) {
    alert('[ERROR] El campo nombre no puede contener espacios en blanco');
    return;
  }

  var ape= document.getElementById('apellido').value.trim();
  if (ape.length ==0) {
    alert('[ERROR] El campo apellido no puede contener espacios en blanco');
    return false;
  }
 
   var optForm = document.forms["formulario"]["tipocedula"].selectedIndex;
  if(optForm == null || optForm == 0) {

    alert('Debe seleccionar una opción en el campo');
    return;
  }
  
  var docu = document.getElementById('documento').value.trim();
  if (docu.length ==0) {
    alert('[ERROR]Campo de documento vacio');
    return;
  }
  else if (docu.length <6) {
    // Si no se cumple la condicion...
    alert('Documento no valido');
    return;
  }
  var optForm = document.forms["formulario"]["rol"].selectedIndex;
  if(optForm == null || optForm == 0) {

    alert('Debe seleccionar una opción en el campo rol');
    return;
  }

  var correo = document.getElementById('email').value.trim();
  if(correo.length == 0) {
    alert('[ERROR] El campo correo esta vacio...');
    return;
  }
  var password= document.getElementById('Contraseña').value.trim();
  if (password.length ==0) {
    alert('La contraseña no puede contener espacios en blanco');
    return;
  }
  else if (password.length < 6) {
    // Si no se cumple la condicion...
    alert('Contraseña no valido, debe tener 6 caracteres o más');
    return; 
  }
  
}
