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

$sql = "SELECT * FROM users";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["user_id"]. " - Name: " . $row["name"]. " " . $row["passwors"]. "<br>";
    }
} else {
    echo "0 results";
}
$usr = $_GET['usuario'];
echo $usr;
 mysqli_close($conexion); 
 ?>