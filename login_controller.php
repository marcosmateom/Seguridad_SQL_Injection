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

$usr = $_POST['usuario'];
$pass = $_POST['pass'];

#$sql = 'SELECT * FROM users WHERE user = $usr';
$sql = "SELECT * FROM users WHERE username=$usr";
$result = $conexion->query($sql) or die("Parece que algo ha salido mal!");
$row = mysqli_fetch_array( $result );

if ($row[0]) { 
    echo "id: " . $row["user_id"]. " - Name: " . $row["name"]. " " . $row["password"]. "<br>";
}
else{
    echo '0 Resultados';
}
 mysqli_close($conexion); 
 ?>