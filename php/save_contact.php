<?php
include 'connection.php'; // Asegúrate de que la ruta es correcta y que este archivo se encuentra en el mismo directorio.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asegúrate de que $conn está definido y es una conexión válida
    $nombre = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $asunto = $conn->real_escape_string($_POST['subject']);
    $mensaje = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contactos (nombre, email, asunto, mensaje) VALUES ('$nombre', '$email', '$asunto', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Gracias por contactarnos. Nos pondremos en contacto contigo pronto.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
