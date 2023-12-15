function updateTime() {
  const now = new Date();

  const clock = document.getElementById('clock');
  const date = document.getElementById('date');

  const options = {
    hour: 'numeric',
    minute: 'numeric',
    second: 'numeric',
    hour12: true
  };

  const formattedTime = now.toLocaleTimeString('en-US', options);
  const formattedDate = now.toDateString();

  clock.textContent = formattedTime;
  date.textContent = formattedDate;
}

// Actualizar la hora y la fecha cada segundo
setInterval(updateTime, 1000);

// Mostrar la hora y la fecha al cargar la página
updateTime();


document.querySelector('form').addEventListener('submit', function(event) {
  event.preventDefault(); // Evitar el envío del formulario
  
  var usuario = document.getElementById('usuario').value;
  var contrasena = document.getElementById('contrasena').value;
  var mensaje = document.getElementById('mensaje');

  if (usuario === '' || contrasena === '') {
      mensaje.textContent = "Por favor, completa todos los campos";
  } else {
      mensaje.textContent = ""; // Borrar mensaje de advertencia
      // Aquí puedes realizar la verificación de la contraseña y redireccionar al sistema
  }
});
