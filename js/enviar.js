// tu-archivo-js.js

// Función para enviar el mensaje a WhatsApp
function sendMessage() {
    // Obtener los valores del formulario
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    // Validar que el número de teléfono no esté vacío
    if (phone.trim() === '') {
        alert('Por favor, ingrese un número de teléfono.');
        return; // Detener el envío del formulario
    }

    // Construir el mensaje predefinido
    var whatsappMessage = "Hola, he visto tu sitio web y estoy interesado en tu servicio. Mi nombre es " + name +
                          ", mi teléfono es " + phone + ", mi correo es " + email + ". " + message;
    
    // Escapar caracteres especiales en el mensaje
    var encodedMessage = encodeURIComponent(whatsappMessage);

    // Número de teléfono de destino
    var phoneNumber = '18097030316';

    // Construir la URL de WhatsApp
    var whatsappURL = 'https://wa.me/' + phoneNumber + '?text=' + encodedMessage;

    // Redireccionar a WhatsApp
    window.location.href = whatsappURL;
}
