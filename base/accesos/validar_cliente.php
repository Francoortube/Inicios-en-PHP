<?php
session_start();
$correo_ingreso = $_POST['Correo'];
$contraseña_ingreso = $_POST['Contraseña'];

if($correo_ingreso == "cliente@gmail.com" && $contraseña_ingreso == "phpintermedio") {
    $_SESSION['Clientes'] = $correo_ingreso;
header("Location: ../clientes.php?");
} else {
    header("Location: ../clientes.php?error");
}
?>