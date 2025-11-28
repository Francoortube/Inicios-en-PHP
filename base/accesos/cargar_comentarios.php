<?php
$nombreComentario = $_POST['nombre']; 
$apellidoComentario = $_POST['apellido'];
$correoComentario = $_POST['correo'];
$comentario = $_POST['comentario'];


include('datosBD.php');

mysqli_query($conexionBD,"INSERT INTO comentarios VALUE('', '$nombreComentario','$apellidoComentario','$correoComentario','$comentario')");

header('Location: ../comentarios.php?comentario_cargado');
?>