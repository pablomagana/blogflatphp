<?php
echo "<h1>Bienvenido al blog !</h1>";
echo "User: develop pablo";
if(isset($_GET['id'])){
  //lista.php modificada
  include ('controller/detalle.php');
}else{
  include ('controller/todo.php');
}
 ?>
