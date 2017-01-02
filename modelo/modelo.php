<?php
//modelo php

function openBD()
{
  $enlace= new PDO("mysql:host=localhost;dbname=blog","root","vagrant");
  return $enlace;
}

function closeBD($enlace)
{
  $enlace=null;
}

function getEntradas()
{
  $enlace=openBD();
  $resultado=$enlace->query("select * from entradas;");

  $entradas =array();
  while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
    $entradas[]=$fila;//va incrementando el array con cada una de las filas
  }

  closeBD($enlace);

  return $entradas;
}

function getEntradaId($id)
{
    $enlace=openBD();

    //extraer un elemento
    $query="select titulo,descripcon from entradas where id=?;";
    $sentencia=$enlace->prepare($query);
    $sentencia->bindParam(1,$id,PDO::PARAM_INT);
    $sentencia->execute();

    $fila=$sentencia->fetch(PDO::FETCH_ASSOC);

    closeBD($enlace);

    return $fila;
}
 ?>
