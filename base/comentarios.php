<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación web con PHP y MySQL</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header>
    <h1>🐘 Programación web con PHP y MySQL 📊</h1>
    <nav>
  <input type="checkbox" id="menu-toggle" class="menu-toggle">
  <label class="menu-icon" for="menu-toggle">
    <span></span>
    <span></span>
    <span></span>
  </label>
  <ul>
    <li><a href="index.php">📘 Introducción</a></li>
    <li><a href="catalogo.php">📦 Catálogo</a></li>
    <li><a href="noticias.php">📰 Noticias</a></li>
    <li><a href="clientes.php">👥 Clientes</a></li>
    <li><a href="comentarios.php">💬 Comentarios</a></li>
  </ul>
</nav>

</header>
<section data-section="comentarios">
  <h2 class="info_noticia">💬 Comentarios</h2>
  <form action="accesos/cargar_comentarios.php" method="POST">
  <input type="text" name="nombre" placeholder="Nombre" required>
  <input type="text" name="apellido" placeholder="Apellido" required>
  <input type="email" name="correo" placeholder="Correo Electronico" required>
  <textarea name="comentario" placeholder="Comentarios"></textarea>
  <input type="submit" value="Enviar">
  </form>
 <?php 
if (isset($_GET['comentario_cargado'])) { ?>
  <p class='color'>El comentario fue enviado con exito</p>
<?php } ?>

</section>

 <footer>
    <p>&copy; <?php echo date("Y"); ?> Programación con PHP y MySQL - Elearning Total. Todos los derechos reservados.</p>
  </footer>
</body>
</html>