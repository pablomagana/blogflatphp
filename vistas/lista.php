<!--template lista-->
<?php $titulo="cosas de un blog" ?>

<?php ob_start() //ob coge el buffer de salida y lo almacena en una variable interna que luego puedo volcar en una variable
//paralizamos la salida para controlar cuando queremos utilizar la vista?>

  <h1>cosas que mostrar en un blog</h1>
  <ul>
    <?php
    //la variable entrada la coge del fichero que importa s lista.php y que rellena despues de consultar el model
     foreach ($entradas as $entrada): ?>
    <li>
      <!--/blogphp/controller/detalle.php-->
      <a href="index.php?id=<?=/*ruta desde la raiz*/ $entrada['id']?>">
        <?=$entrada['titulo']?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>

<?php $contenido = ob_get_clean() //vuelco el contenido del ob en la variable $contenido que luego utilizare en la plantilla?>

<?php include 'plantilla.php';

//include  -es como una extension del fichero actual
//require  -es obligatorio que el fichero se importe
