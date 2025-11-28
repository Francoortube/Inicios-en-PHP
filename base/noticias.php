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
<section data-section="noticias">
  <h2>📰 Noticias - Unidad VI</h2>
  <?php   
  $noticia = array ( 
  array('Titulo'=>'Messi es Mundial -de Clubes-','Info'=>'Messi es Mundial. Es Mundial en todo sentido, incluso es Mundial de Clubes. Lionel se puso al hombro al Inter Miami, lideró una victoria para los libros ante el Porto y lo ubicó con altas chances de seguir en el torneo FIFA. El 10 clavó un golazo de tiro libre para el 2-1, que lo pone arriba de su grupo junto a Palmeiras. Las más de 31 mil personas en el Mercedes-Benz Stadium de Atlanta deliraron con el argentino y también los millones en el mundo.','Imagen'=>'grupoa.jpg'),
  array('Titulo'=>'Batacazo del Fogao','Info'=>'Botafogo rompió todos los pronósticos este jueves y venció por 1-0 a PSG en Pasadena por la segunda fecha del Grupo B del Mundial de Clubes que produjo un hecho histórico: el campeón vigente de la Copa Libertadores cortó ante su par de la Champions League una sequía de 13 años sin que un equipo sudamericano superara a uno europeo.','Imagen'=>'grupob.jpg'),
  array('Titulo'=>'Boca perdío de pie','Info'=>'Partidazo, alguna vez hay que tapar el resultado y quedarse con lo que el equipo dio, con lo que dejó en la cancha. Boca lo sufrió, sí, sobre todo al principio, pero le puso el cuerpo, aguantó, lo guapeó, logró empatar, coqueteó con el triunfo pero claro, la jerarquía del rival pesó. con esta derrota 2-1 en el estadio Hard Rock de Miami, Boca no está afuera, pero quedó con la calculadora en la mano','Imagen'=>'grupoc.jpg'),
  array('Titulo'=>'River empato y se complico','Info'=>'No merecía terminar así River. Sufriendo por una expulsión, asimilando que no podrá contar con tres de sus titulares en la fecha final y sabiendo que tendrá que jugarse la clasificación para los octavos de final en la última fecha mano a mano con Inter. A pesar de que generó las mejores situaciones y dominó completamente el segundo tiempo, apenas se fue con un 0-0 ante Monterrey.','Imagen'=>'grupoe.jpg')
 );
 for($n=0; $n<count($noticia); $n++) {
  ?>
  <article class="noticias">
<div class="ima_noticia">
  <img src="imagenes/<?php echo $noticia [$n]['Imagen'];?>" alt="" class="Img_ajustar">
</div>
<div class="info_noticia">
  <h2 class="titulo_noticia"><?php echo $noticia [$n]['Titulo'];?></h2>
  <p><?php echo $noticia [$n]['Info'];?></p>
</div>
  </article>
  <?php } ?>
</section>
 <footer>
    <p>&copy; <?php echo date("Y"); ?> Programación con PHP y MySQL - Elearning Total. Todos los derechos reservados.</p>
  </footer>
</body>
</html>