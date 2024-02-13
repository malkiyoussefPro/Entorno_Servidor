 function validar() {
    // Crea un objeto XMLHttpRequest
    let xhr = new XMLHttpRequest();

    const result = document.getElementById('result');
    const nombre = document.getElementById('nombre_Usuario').value;
    const email = document.getElementById('email_Usuario').value;
    const contraseña = document.getElementById('contraseña').value;
    const role = document.getElementById('role_Usuario').value;
    const fecha = document.getElementById('fecha_Creacion').value;

    // Configura la solicitud
    xhr.open('POST', '/student042/dwes/Usuarios/action/db_usuarios_insert_call.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // Maneja el evento de cambio de estado de la solicitud
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          // Maneja la respuesta del servidor aquí
          document.getElementById('mensaje').innerHTML = xhr.responseText;
        } else {
          // Maneja los errores aquí
          document.getElementById('mensaje').innerHTML = '<div class="alert alert-danger" role="alert">Error al procesar la solicitud AJAX</div>';
        }
      }
    };

    // Envía la solicitud con los datos del formulario
    xhr.send("nombre_Usuario="+nombre+"&email_Usuario="+email+"&contraseña="+contraseña+"&role_Usuario="+role+"&fecha_Creacion="+fecha);
  
}

