<?php
if(isset($_GET['id'])){
  //lista.php modificada
  include ('controller/detalle.php');
}else{
  include ('controller/todo.php');
}
 ?>
