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
  <section data-section="introduccion">
    <h2>📘 Introducción a PHP - Unidad IV</h2>
    <p>En esta sección aplicarás los contenidos introductorios a la programación web del lado del servidor.</p>

    <div id="uni4_1">
      <?php
      $intro = 'En esta entrega, realizaremos la actividad de la unidad 4';
      $presentacion = 'Me llamo franco, tengo 26 años y vivo en Pilar';
      $objetivos = 'Mi objetivos de la cursada es aprender y tener los conocimientos de PHP y sus funciones';

      ?>

      <?php echo $intro ?>
      <h4> <?php echo $presentacion ?> </h4>
      <?php echo $objetivos ?>
    </div>


    <div id="uni4_2">
      <?php
      $e = 'EVALUACION';
      $i = 'INTEGRADORA';
      $cursp = 'PHP y MySQL';


      ?>

      <?php echo '<p>' . $e . '</p><p>' . $i . '</p><p>' . $cursp . '</p>';

      ?>



    </div>
    <div id="uni4_3">
      <?php
      $edad = 26;
      $correo = 'ortubemartin6@gmail.com';
      $argentino = true;


      ?>

      <h5> <?php echo $edad ?> </h5>
      <h5> <?php echo $correo ?> </h5>
      <h5> <?php echo $argentino ?> </h5>

    </div>
    <div id="uni4_4">
      <?php $CursosFinalizados = 3;
      $CursosTotales = 10;
      ?>
      <p> Cantidad de cursos realizados hasta el momento: <?php echo $CursosFinalizados ?> </p>
      <p> Cantidad de cursos totales: <?php echo $CursosTotales  ?> </p>
      <p> Cantidad de cursos que me faltan hacer: <?php echo $CursosTotales - $CursosFinalizados   ?> </p>
    </div>
  </section>
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Programación con PHP y MySQL - Elearning Total. Todos los derechos reservados.</p>
  </footer>
</body>

</html>