<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

$host = "sql111.infinityfree.com";
$user = "if0_39176586";
$password = "2FtilBwIf7t";
$dbname = "if0_39176586_DatosUsuarios";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Conexión fallida: " . $conn->connect_error]));
}

$nombre = $conn->real_escape_string($data["nombre"]);
$email = $conn->real_escape_string($data["email"]);

$sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["mensaje" => "Datos guardados correctamente"]);
} else {
    echo json_encode(["error" => "Error al guardar: " . $conn->error]);
}

$conn->close();
?>
