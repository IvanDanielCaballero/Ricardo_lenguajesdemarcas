<?php
$precio = $_POST['precio'];
$editorial = $_POST['editorial'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$anualidad = $_POST['anualidad'];
$isbn = $_POST['isbn'];

//echo $precio.$editorial.$titulo.$autor.$anualidad.$isbn;


try {
    $bd = new PDO('mysql:host=localhost;dbname=DAW2', 'root', '');
    //var_dump($conn);
  //echo "conexion realizada con exito"; 
  $ins = "INSERT into libros (isbn, titulo,autor,anualidad,editorial,precio) values ('$isbn','$titulo','$autor','$anualidad','$editorial','$precio');"; 
  $resul = $bd->query($ins); 

  if ($resul) { 
       print ('insert correcto <br>');  
      // 'filas insertadas: '.$resul->rowCount().'<br>'; 
  }else print_r($bd->errorInfo()); 
  //echo 'codigo de la fila insertada'.$bd->lastInsertId().'<br>';

} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}

header('location: ejemplo_boostrap.html');
 

    ?>