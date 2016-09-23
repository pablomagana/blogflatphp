<?php

//index.php
//pablo magaña
//pablomagub@gmail.com

require_once 'modelo/modelo.php';//solo importa el documento una vez
$entradas=getEntradas();
require 'vistas/lista.php';

?>
