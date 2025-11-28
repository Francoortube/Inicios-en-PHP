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
<section data-section="catalogo">
<nav id="botonera_catalogo">

<ul>
   <li><a href="catalogo.php?cat=Tele">Televisores</a></li>
   <li><a href="catalogo.php?cat=Moni">Monitores</a></li>
   <li><a href="catalogo.php?cat=Celu">Celulares</a></li>
   <li><a href="catalogo.php?cat=Elec">Eletrodomesticos</a></li>
   <li><a href="catalogo.php?cat=Audi">Audio</a></li>
</ul>
</nav>
<?php  
if(isset($_GET['cat'])) {
switch ($_GET['cat']){
case 'Tele' :
  $producto = 'Smart TV 32 pulgadas';
  $precio = '$250000';
  $caracteristicas = 'Smart 32 Pulgadas Android Hd Chromecast Netflix Youtube es un televisor LED de 32 pulgadas con Android, resolución High Definition y control de voz. Cuenta con la galería de aplicaciones más amplia del mercado gracias a su sistema operativo de Google, que descarga mediante Google Play';
  $imagen = 'smart.jpg';
  break;
case 'Moni' :
  $producto = 'Monitor LG 24 pulgadas';
  $precio = '$190000';
  $caracteristicas = 'El LG 24MS500-B es un monitor Full HD de 23.8 pulgadas diseñado para ofrecer una excelente calidad de imagen con resolución de 1920x1080 píxeles. Su pantalla IPS asegura colores precisos y amplios ángulos de visión, lo que lo convierte en una opción ideal tanto para trabajo como para entretenimiento. El monitor soporta contenido HDR10, lo que mejora la claridad y el contraste en imágenes y videos';
  $imagen = 'monitor.jpg';
  break;
case 'Celu' : 
  $producto = 'Celular Moto G15';
  $precio = '$230000';
  $caracteristicas = 'Disfruta de tus películas, programas y juegos favoritos en la pantalla brillante Full HD+ de 6.7", incluso en exteriores bajo la luz del sol. Obtén una visión clara y nítida en cualquier condición de luz gracias al modo Brillo alto. Vive la acción al máximo y evita las distracciones con el diseño de pantalla superior';
  $imagen = 'celular5.jpg';
  break;
case 'Elec' :
  $producto = 'Heladera Drean';
  $precio = '$1170000';
  $caracteristicas = 'Disfrutá de tus alimentos frescos y almacenalos de manera práctica y cómoda en la heladera Drean, la protagonista de la cocina';
  $imagen = 'heladera2.jpg';
  break;
  case 'Audi' :
  $producto = 'Altavoz JBL';
  $precio = '$410000';
  $caracteristicas = 'JBL Charge 6 ofrece un sonido natural, con una gran claridad y precisión, que se dispersa de manera uniforme. Un parlante que asegura potencia y calidad por igual en la reproducción de contenidos multimedia';
  $imagen = 'audio.jpg';
  break;
}

?>

<article id="info_catalogo">
    <div id="imagen_catalogo">
      <img src= "imagenes/<?php echo $imagen; ?>" alt="">
    </div>
    <div id="text_catalogo">

          <h2><?php echo $producto; ?></h2>
          <h3><?php echo $precio; ?></h3>
          <p><?php echo $caracteristicas; ?></p>
          <h4></h4>
    </div>
  </article>
<?php } ?>

</section>
 <footer>
    <p>&copy; <?php echo date("Y"); ?> Programación con PHP y MySQL - Elearning Total. Todos los derechos reservados.</p>
  </footer>
</body>
</html>