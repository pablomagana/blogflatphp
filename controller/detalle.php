<?php

//detalle.php
//pablo magaña
//pablomagub@gmail.com
require_once 'modelo/modelo.php';//solo importa el documento una vez
$entrada=getEntradaId($_GET["id"]);
require 'vistas/mostrar.php';

?>
