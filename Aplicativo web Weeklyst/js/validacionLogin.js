
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

function validarFormulario(evento) {
  evento.preventDefault();
  var usuario = document.getElementById('documento').value.trim();
  if(usuario.length == 0) {
    alert('[ERROR] El campo Documento no puede contener espacios en blanco');
    return;
  }

  var Clave = document.getElementById('Contraseña').value.trim();
  if (Clave.length ==0) {
    alert('La contraseña no puede contener espacios en blanco');
    return;
  }
  else if (Clave.length < 6) {
    // Si no se cumple la condicion...
    alert('Contraseña no valido');
    return;
  }
  this.submit();

 
}