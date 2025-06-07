<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    // Validaciones básicas
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Correo inválido.");
    }

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, contraseña) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $email, $contraseña);

    if ($stmt->execute()) {
        echo "¡Usuario registrado con éxito!";
    } else {
        echo "Error al registrar: " . $conn->error;
    }
    $stmt->close();
    $conn->close();
} else {
    echo "Acceso no permitido.";
}
?>
