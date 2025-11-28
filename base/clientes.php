<?php session_start(); ?>
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
<section data-section="clientes">
  <?php 
  if(isset($_SESSION['Clientes'])) {
  include('accesos/contenido_clientes.php');
  } else {
  ?>

  <h2 class="info_noticia">👥 Clientes</h2>
  <form action="accesos/validar_cliente.php" method="POST">
    <input type="email" name="Correo" placeholder="Correo Eletronico" required>
    <input type="password" name="Contraseña" placeholder="Contraseña" required>
    <input type="submit" value="Confirmar">
  </form>
<?php 
if (isset($_GET['error'])) { ?>
  <p class='color'>El usuario y/o contraseña son incorrectos</p>
<?php } ?>
<?php } ?>
</section>
 <footer>
    <p>&copy; <?php echo date("Y"); ?> Programación con PHP y MySQL - Elearning Total. Todos los derechos reservados.</p>
  </footer>
</body>
</html>