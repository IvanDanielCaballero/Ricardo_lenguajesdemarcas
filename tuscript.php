<?php
$puntero = fopen('./escribir.txt','w');


  $nombre = $_POST['name'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $anno = $_POST['anno'];
  $direccion = $_POST['direccion'];

  echo( $nombre.$apellido.$direccion.$dni.$anno);




$cadena= $nombre.','.$apellido.','.$dni.','.$anno.','.$direccion."\n";

  fwrite($puntero,$cadena);
  fclose($puntero);
  






//header("Location: formularioinscrip.html");

