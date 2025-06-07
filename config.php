<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$db   = 'wvnslopj_mi_base_datos';
$user = 'wvnslopj_kevin2006';
$pass = 'kdaafgpuertocadete';   // Asegurate de que sea la correcta

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexion: " . $conn->connect_error);
}
?>