<?php
$mysqli = new mysqli("localhost", "user", "pass", "BD");
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}
?>
