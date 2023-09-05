<?php
// Conexión a la base de datos
$servername = "containers-us-west-32.railway.app";
$username = "root"; // Cambia esto al nombre de usuario correcto
$password = "mxMQ1TifyIZUekk9epnI"; // Cambia esto a la contraseña correcta
$dbname = "usuarionuevos"; // Cambia esto al nombre de tu base de datos
$port = 6536;
$protocol = "TCP";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

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
