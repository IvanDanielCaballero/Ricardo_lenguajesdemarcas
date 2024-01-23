<?php

$username = $_POST["nuevoUsuario"];
$password = $_POST["nuevoPassword"];


$cadena_conexion = 'mysql:dbname=daw2;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    //echo "conexion realizada con exito"; 
    $ins = 'INSERT into usuarios(username, pwd) values ("' . $username . '","' . $password . '");';
    $resul = $bd->query($ins);
    if ($resul) {
        // 'insert correcto <br>';  
        // 'filas insertadas: '.$resul->rowCount().'<br>'; 
    } else
        print_r($bd->errorInfo());
    //echo 'codigo de la fila insertada'.$bd->lastInsertId().'<br>'; 
} catch (PDOException $e) {
    echo 'hay un error ' . $e->getMessage();
}



header('location: ejemplo_boostrap.html')


    ?>