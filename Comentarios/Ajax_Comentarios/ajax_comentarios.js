
document.addEventListener('DOMContentLoaded', function() {
  // Obtén el formulario por su ID
  let formulario = document.getElementById('formulario_comentario');

  // Agrega un evento de envío al formulario
  formulario.addEventListener('submit', function(event) {
    // Evita el envío del formulario normal
    event.preventDefault();

    // Crea un objeto XMLHttpRequest
    let xhr = new XMLHttpRequest();

    // Configura la solicitud
    xhr.open('POST', '/student042/dwes/tu_archivo_php.php', true); // Reemplaza con la ruta correcta a tu archivo PHP
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // Maneja el evento de cambio de estado de la solicitud
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          // Maneja la respuesta del servidor aquí
          document.getElementById('resultado').innerHTML = xhr.responseText;
        } else {
          // Maneja los errores aquí
          alert('Error al procesar la solicitud AJAX');
        }
      }
    };

    // Obtén los datos del formulario
    let formData = new FormData(formulario);

    // Envía la solicitud con los datos del formulario
    xhr.send(formData);
  });
});
