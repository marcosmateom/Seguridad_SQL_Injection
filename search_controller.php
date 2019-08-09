<?php
session_start();
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "injection";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$id = $_POST['id'];

#Evitar la inyección validando el tipo de valor recibido
#$id = $conexion->real_escape_string($id);
#$id = filter_var($id,FILTER_VALIDATE_INT);

$sql = "SELECT * FROM users WHERE user_id = $id";

$result = $conexion->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //$user = $row["name"];
        echo "El nombre encontrado es: ";
        echo $row["name"]. "<br>";
    }
} else {
    //header("Location: index.php?search=false" , true);
}

 mysqli_close($conexion); 
 ?>