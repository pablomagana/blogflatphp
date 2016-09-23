<?php
//enrutador principa
//$ruta = $_SERVER['REQUEST_URI'];


// switch ($ruta) {
//   case 'detalle':
//     //redirigir a detalle.php
//     break;
//
//   default:
//     //redirigir a todo.php
//     require ('controller/todo.php');
//     break;


if(isset($_GET['id'])){
  //lista.php modificada
  include ('controller/detalle.php');
}else{
  include ('controller/todo.php');
}
 ?>
