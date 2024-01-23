<?php

$username = $_POST['ususario'];
$password = $_POST['pwd'];

$conn = new PDO('mysql:host=localhost;dbname=daw2', 'root', '');
try {

    $sql = "SELECT username, pwd FROM usuarios where username='$username' and pwd='$password';";
    $respuesta = $conn->query($sql);

    if ($respuesta->rowCount() > 0) {
        setcookie("respuesta", "yes", time() + 3600, "/");
    } else {
        setcookie("respuesta", "no", time() + 3600, "/");
    }

} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}

header('location: ejemplo_boostrap.html');


