document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

function validarFormulario(evento) {
  evento.preventDefault();
  var usuario = document.getElementById('email').value.trim();
  if(usuario.length == 0) {
    alert('[ERROR] El campo correo debe tener un valor de...');
    return;
  }
  
 var tel = document.getElementById('tel').value.trim();
  if (tel.length ==0) {
    alert('[ERROR] El campo telefono debe tener un valor de...');
    return;
  }
  else if (tel.length <6) {
    // Si no se cumple la condicion...
    alert('telefono no valido');
    return;
  }
  this.submit();
}