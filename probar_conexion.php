<?php
$host = 'localhost';
$db   = 'wvnslopj_mi_base_datos';
$user = 'wvnslopj_kevin2006';
$pass = 'kdaafgpuertocadete';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Falló la conexión: " . $conn->connect_error);
}
?>
