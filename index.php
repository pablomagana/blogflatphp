<?php
echo "<h1>Bienvenido al blog !</h1>";
echo "User: develop pablo. cerrar sesion";
echo "<br/>";
echo "zona admin super";
if(isset($_GET['id'])){
  //lista.php modificada
  include ('controller/detalle.php');
}else{
  include ('controller/todo.php');
}
 ?>
