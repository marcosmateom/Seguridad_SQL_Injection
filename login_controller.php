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
#Escapar los datos ej. ' OR '1'='1
#$usr = $conexion->real_escape_string($usr);
#$pass = $conexion->real_escape_string($pass);

$sql = "SELECT * FROM users WHERE user ='$usr' AND password='$pass'" ;
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //$user = $row["name"];
        $nombrec = $row["name"];
        header("Location: welcome.php/?user=$nombrec" , true);
        //echo "id: " . $row["user_id"]. " - Name: " . $row["name"]. " " . $row["password"]. "<br>";
    }
} else {
    header("Location: index.php?login=false" , true);
}
 mysqli_close($conexion); 
 ?>