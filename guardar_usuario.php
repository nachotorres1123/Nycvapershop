<?php
// Conexión a la base de datos (reemplaza estos valores con los de tu servidor)
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Obtener el correo electrónico del formulario
$email = $_POST['email'];

// Insertar el correo electrónico en la base de datos
$sql = "INSERT INTO usuarios (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "Gracias por suscribirte.";
} else {
    echo "Error al suscribirse: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>