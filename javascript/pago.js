 // Función para mostrar el formulario de pago
 function mostrarFormularioPago(id_habitacion) {
    var formularioPago = document.getElementById('container-formulario-pago');
    formularioPago.style.display = 'block';
    // Guardar el ID de la habitación seleccionada en una cookie
    document.cookie = "id_habitacion=" + id_habitacion + "; path=/";
}

function detectCardType(cardNumber) {
    // Define las expresiones regulares para cada tipo de tarjeta
    var visaRegex = /^4[0-9]{12}(?:[0-9]{3})?$/;
    var mastercardRegex = /^5[1-5][0-9]{14}$/;
    var amexRegex = /^3[47][0-9]{13}$/;
    var discoverRegex = /^6(?:011|5[0-9]{2})[0-9]{12}$/;

    // Comprueba si el número de tarjeta coincide con alguna de las expresiones regulares y actualiza el campo de tipo de tarjeta
    if (visaRegex.test(cardNumber)) {
        document.getElementById('tipo_pago').value = 'Visa';
    } else if (mastercardRegex.test(cardNumber)) {
        document.getElementById('tipo_pago').value = 'Mastercard';
    } else if (amexRegex.test(cardNumber)) {
        document.getElementById('tipo_pago').value = 'American Express';
    } else if (discoverRegex.test(cardNumber)) {
        document.getElementById('tipo_pago').value = 'Discover';
    } else {
        document.getElementById('tipo_pago').value = 'Tipo de tarjeta desconocido';
    }
}

// Función para formatear automáticamente el número de tarjeta mientras el usuario lo ingresa
document.getElementById('numero_tarjeta').addEventListener('input', function(event) {
    var cardNumber = event.target.value.replace(/\D/g, ''); // Elimina todos los caracteres que no sean dígitos
    var formattedCardNumber = '';
    
    for (var i = 0; i < cardNumber.length; i++) {
        if (i > 0 && i % 4 === 0) {
            formattedCardNumber += ' '; // Inserta un espacio cada 4 dígitos
        }
        formattedCardNumber += cardNumber.charAt(i);
    }
    
    event.target.value = formattedCardNumber.trim().slice(0, 19); // Limita la longitud a 19 caracteres (16 dígitos + 3 espacios)
    detectCardType(cardNumber); // Detecta el tipo de tarjeta
});

document.getElementById('fecha_caducidad').addEventListener('blur', function() {
    var fechaInput = this.value;
    var fechaArray = fechaInput.split('/');
    var mes = parseInt(fechaArray[0], 10);
    var anio = parseInt(fechaArray[1], 10);
    
    var fechaActual = new Date();
    var mesActual = fechaActual.getMonth() + 1; // Se suma 1 porque los meses en JavaScript van de 0 a 11
    var anioActual = fechaActual.getFullYear() % 100; // Obtiene los dos últimos dígitos del año actual

    if (mes < 1 || mes > 12 || anio < anioActual || (anio === anioActual && mes < mesActual)) {
        alert('La fecha de vencimiento ingresada no es válida!!!! .');
        this.value = ''; // Limpiar el campo
        this.focus(); // Colocar el foco en el campo nuevamente
    }
});

document.getElementById('fecha_caducidad').addEventListener('input', function() {
    var fechaInput = this.value;
    var fechaArray = fechaInput.split('/');

    // Si se ha ingresado el mes y es válido
    if (fechaArray.length === 1 && /^[0-9]{1,2}$/.test(fechaInput)) {
        // Si el mes es válido (entre 1 y 12)
        var mes = parseInt(fechaInput, 10);
        if (mes >= 1 && mes <= 12) {
            this.value = fechaInput + '/';
        }
    }
});